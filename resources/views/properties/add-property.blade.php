@extends('layouts.master')
@section('title')
Add A Property
@endsection
@section('styles')
<link rel="stylesheet" href="../assets/css/landlord-properties.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-sm-12 col-md-12 col-lg-8 offset-sm-0 offset-md-0 offset-lg-2">
            <h3 class="text-dark mb-4">Add Property</h3>
            <div class="card shadow mb-3">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="/dashboard/post-add-property">
                        <div class="mb-3">
                            <label class="form-label" for="name"><strong>Nickname (Optional)</strong></label>
                            <input class="form-control" type="text" id="name" placeholder="" name="name" required="" value="Home 2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address"><strong>Address</strong></label>
                            <input class="form-control" type="text" id="address" placeholder="" name="address" required="" value="38 Sunset Blvd">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="city"><strong>City</strong></label>
                                    <input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city" required="" value="Los Angeles">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="state"><strong>State</strong></label>
                                    <select class="form-select" name="state">
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
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="zip">
                                        <strong>Zip</strong></label>
                                    <input class="form-control" type="text" id="zip" name="zip" required="" value="90210">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mt-3">
                                    <label class="form-label">Property Value (Optional)</label>
                                    <input class="form-control form-control" type="text" value="324783">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">MLS# (Optional)</label>
                                    <input class="form-control form-control" type="text" name="mls_number" value="76F13RG6328F32WCDS32">
                                </div>
                            </div>
                        </div>

                        <div class="unit-section">

                            <div class="unit-rows">
                                <h4>Units</h4>
                                <div class="row unit-row">
                                    <div class="col-md-4 col-sm-12 col-lg-4 unit-form-group">
                                        <label>Room Number</label>
                                        <input type="text" class="form-control unit-input" name="unit_names[]" required />
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-lg-4 unit-form-group">
                                        <label>Beds</label>
                                        <input type="number" value="1" min="1" class="form-control unit-input" name="unit_beds[]" required />
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-lg-4 unit-form-group">
                                        <label>Baths</label>
                                        <input type="number" value="1" min="1" class="form-control unit-input" name="unit_baths[]" required />
                                    </div>
                                </div>
                            </div>

                            <div class="unit-controls">
                                <button type="button" class="btn btn-primary ui-btn remove-unit-btn">-</button>
                                <button type="button" class="btn btn-primary ui-btn add-unit-btn">+</button>
                            </div>
                        </div>
                        <div class="text-end my-3">
                            <button class="btn btn-primary ui-btn" type="submit">Create Property</button>
                        </div>
                        @if($errors->any())
                        <p  class="error" >{{$errors->first()}}</p>
                        @endif
                        {{@csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection