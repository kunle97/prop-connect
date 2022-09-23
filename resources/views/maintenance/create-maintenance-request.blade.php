@extends('layouts.master')

@section('title')
Create A Maintenance Request
@endsection

@section('styles')

@endsection

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-sm-12 col-md-8 col-lg-8 offset-sm-0 offset-md-2 offset-lg-2">
            <h3 class="text-dark mb-4">Create A Maintenance Request</h3>
            <div class="card shadow mb-5">
                <form action="/dashboard/post-create-maintenance-request" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="city"><strong>Property</strong><br></label>
                                    <select class="form-select property-select" required name="property_id">
                                        <option>Select A Property</option>
                                        @foreach($properties as $property)
                                        <option value="{{$property->id}}">{{$property->name}} ({{$property->street_address}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="city"><strong>Unit</strong></label>
                                    <select class="form-select unit-select" required name="unit_id"></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="signature"><strong>Issue</strong><br></label>
                                    <textarea class="form-control" required id="signature-1" rows="4" name="description"></textarea>
                                </div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm ui-btn" type="submit">Submit</button></div>
                            </div>
                        </div>
                    </div>
            </div>
            {{@csrf_field()}}
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    (function($) {
        $unit_select = $('.unit-select');
        $('select.property-select').change(function() {
            $unit_select.empty();
            $.ajax({
                url: '/dashboard/maintenance-requests/fetch-units/',
                type: 'POST',
                data: {
                    'property_id': $(this).val(),
                    '_token': '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        $unit_id = data[i].id;
                        $unit_name = data[i].name;
                        $new_unit_option = `<option value='${$unit_id}' >${$unit_name}</option>`;
                        $unit_select.append($new_unit_option);
                    }
                },
                error: function(request, error) {
                    console.log("Request: " + JSON.stringify(request));
                    console.log("Error", error);
                }
            });

        });
    })(jQuery);
</script>
@endsection