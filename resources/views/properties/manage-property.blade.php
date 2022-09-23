@extends('layouts.master')
@section('title')
Manage Property
@endsection
@section('styles')
<link rel="stylesheet" href="../assets/css/landlord-properties.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-sm-12 col-md-12 col-lg-10 offset-sm-0 offset-md-0 offset-lg-1">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form action="/dashboard/update-property/" method="POST">
                                <div class="mb-3">
                                    <label class="form-label" for="name"><strong>Name</strong></label>
                                    <input class="form-control" type="text" id="name" name="name" value="{{$property->name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address"><strong>Address</strong></label>
                                    <input class="form-control" type="text" id="address" name="address" value="{{$property->street_address}}">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="city"><strong>City</strong></label>
                                            <input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city" value="{{$property->city}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="state"><strong>State</strong></label>
                                            <select name="state" class="form-select">
                                                <option value="{{$property->state}}">{{$property->state}}</option>
                                                <option value="">--</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="country"><strong>Country</strong></label>
                                            <input class="form-control" type="text" id="country" name="country" value="{{$property->country}}">
                                        </div>
                                    </div>
                                </div>
                                {{@csrf_field()}}
                                <input name="property_id" value="{{$property->id}}" type="hidden" />
                                <div class="text-end mb-3"><button class="btn btn-primary btn-sm ui-btn" type="submit">Save&nbsp;Settings</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Total Revenue</strong></label>
                                            <p>${{number_format($total_revenue)}}</p>
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Net Operating Income (NOI)</strong></label>
                                            <p>N/A</p>
                                        </div>

                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Property Value</strong></label>
                                            @if(isset($unit->property_value))
                                            <p>{{$unit->property_value}}</p>
                                            @else
                                            <p> N/A</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Total Expenses</strong></label>
                                            <p>N/A</p>
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>MLS #</strong></label>
                                            @if(isset($unit->mls_number))
                                            <p>{{$unit->mls_number}}</p>
                                            @else
                                            <p> N/A</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="heading-container">
                        <h4 class="float-start mb-0">Units</h4><a class="btn btn-primary float-end ui-btn" role="button" href="/dashboard/add-unit/{{$property->id}}">Add New Unit</a>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover my-0 md5_datatable" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Unit #</th>
                                        <th>Occupant</th>
                                        <th>Beds</th>
                                        <th>Baths</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($units as $unit)
                                    <tr>
                                        <td>{{$unit->name}}</td>
                                        <td>
                                            @if(isset($unit->tenant_id))
                                            {{$unit->tenant_id}}
                                            @else
                                            <span>Unoccupied</span>
                                            @endif
                                        </td>
                                        <td>{{$unit->beds}}</td>
                                        <td>{{$unit->baths}}</td>
                                        <td><button class="btn btn-danger delete-unit-button" data-bs-target="#global-modal" data-bs-toggle="modal" data-global-modal-title="Delete {{$unit->name}}?" data-global-modal-message="Are you sure you want to delete this unit?" data-global-modal-confirm="/dashboard/delete_unit/{{$unit->id}}" type="button">Delete</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><strong>Unit #</strong></td>
                                        <td><strong>Occupant</strong></td>
                                        <td><strong>Beds</strong></td>
                                        <td><strong>Baths</strong></td>
                                        <td><strong>Action</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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
        $('.delete-unit-button').click(function(e) {
            $this = $(this);
            $('#global-modal-title').text($this.attr('data-global-modal-title'));
            $('#global-modal-message').text($this.attr('data-global-modal-message'));
            $('#global-modal-confirm').attr("href", $this.attr('data-global-modal-confirm'));
        });
    })(jQuery);
</script>
@endsection