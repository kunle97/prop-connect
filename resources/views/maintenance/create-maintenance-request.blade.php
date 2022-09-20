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
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3"><label class="form-label" for="city"><strong>Property</strong><br></label><select class="form-select" name="property_id">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3"><label class="form-label" for="city"><strong>Unit</strong></label><select class="form-select" name="unit_id">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form>
                            <div class="mb-3"><label class="form-label" for="signature"><strong>Issue</strong><br></label><textarea class="form-control" id="signature-1" rows="4" name="signature"></textarea></div>
                            <div class="mb-3"></div>
                            <div class="mb-3"><button class="btn btn-primary btn-sm ui-btn" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
                
