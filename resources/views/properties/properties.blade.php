@extends('layouts.master')
@section('title')
Manage Property
@endsection
@section('styles')
<link rel="stylesheet" href="../assets/css/landlord-properties.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-10 offset-sm-0 offset-md-0 offset-lg-1">
            <div class="col-12 heading-container">
                <a class="btn btn-primary float-end new-property-btn ui-btn" role="button" href="/dashboard/add-property">New Property</a>
                <h3 class="text-dark">Your Properties</h3>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <table class="table my-0 table-hover md5_datatable" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Street</th>
                                <th>Units</th>
                                <th>Total Revenue</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($properties as $key=>$property)
                            <tr>
                                <td>{{$property->name}}</td>
                                <td>{{$property->street_address}}</td>
                                <td>{{DB::Table('units')->where('property_id', $property->id)->count()}}</td>
                                <td>${{number_format($property_profits[$key])}}</td>
                                <td>
                                    <a href="/dashboard/manage-property/{{$property->id}}"><button class="btn btn-primary ui-btn">Manage</button></a>
                                    <button class="btn btn-danger delete-property-button" data-bs-target="#global-modal" data-bs-toggle="modal" data-global-modal-title="Delete {{$property->street_address}}?" data-global-modal-message="Are you sure you want to delete this property?" data-global-modal-confirm="/dashboard/delete-property/{{$property->id}}">Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Street</strong></td>
                                <td><strong>Units</strong></td>
                                <td><strong>Vacancies</strong></td>
                                <td><strong>Total Profit</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    (function($) {
        $('.delete-property-button').click(function(e) {
            $this = $(this);
            $('#global-modal-title').text($this.attr('data-global-modal-title'));
            $('#global-modal-message').text($this.attr('data-global-modal-message'));
            $('#global-modal-confirm').attr("href", $this.attr('data-global-modal-confirm'));
        });
    })(jQuery);
</script>
@endsection