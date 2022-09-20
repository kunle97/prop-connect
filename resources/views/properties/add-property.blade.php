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
                    <form>
                        <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address" required=""></div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city" required=""></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="country"><strong>State</strong></label><select class="form-select">
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
                                    </select></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country-1" placeholder="USA" name="country" required=""></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div><label class="form-label">Beds</label><input class="form-control form-control" type="number" name="beds" value="1" required=""></div>
                            </div>
                            <div class="col">
                                <div><label class="form-label">Baths</label><input class="form-control form-control" type="number" name="baths" value="1" required=""></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mt-3"><label class="form-label">Property Value</label><input class="form-control form-control" type="text" required=""></div>
                                <div class="mt-3"><label class="form-label">MLS# (Optional)</label><input class="form-control form-control" type="text" required=""></div>
                            </div>
                        </div>
                        <div class="text-end my-3"><button class="btn btn-primary ui-btn" type="submit">Create Property</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection