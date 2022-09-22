@extends('layouts.master')
@section('title')
Add A Unit
@endsection
@section('styles')
<link rel="stylesheet" href="../assets/css/landlord-properties.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-sm-12 col-md-12 col-lg-8 offset-sm-0 offset-md-0 offset-lg-2">
            <h3 class="text-dark mb-4">Add Unit to {{App\Models\Property::findOrFail($property->id)->street_address}}</h3>
            <div class="card shadow mb-3">
                <div class="card-body">
                    <form method="POST" action="/dashboard/post-add-unit">
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
                            <input type="hidden" value="{{App\Models\Property::findOrFail($property->id)->id}}" name="property_id" />
                            <div class="unit-controls">
                                <button type="button" class="btn btn-primary ui-btn remove-unit-btn">-</button>
                                <button type="button" class="btn btn-primary ui-btn add-unit-btn">+</button>
                            </div>
                        </div>
                        <div class="text-end my-3">
                            <button class="btn btn-primary ui-btn" type="submit">Create Unit</button>
                        </div>
                        {{@csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection