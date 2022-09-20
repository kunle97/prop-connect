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
            <h3 class="text-dark mb-4">Add Unit to [Property Name]</h3>
            <div class="card shadow mb-3">
                <div class="card-body">
                    <form>
                        <div class="mb-3"><label class="form-label" for="address"><strong>Unit #/Name</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address" required=""></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div><label class="form-label">Beds</label><input class="form-control form-control" type="number" name="beds" value="1" required=""></div>
                            </div>
                            <div class="col-md-12">
                                <div><label class="form-label">Baths</label><input class="form-control form-control" type="number" name="baths" value="1" required=""></div>
                            </div>
                        </div>
                        <div class="text-end my-3"><button class="btn btn-primary ui-btn" type="submit">Create Unit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection