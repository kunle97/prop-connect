@extends('layouts.master')
@section('title') My Account @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 offset-sm-0 offset-md-0 offset-lg-2">
            <h3 class="text-dark mb-4">My Account</h3>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow">
                            <img class="rounded-circle mb-3 mt-4" src="{{URL::to('../assets/img/dogs/image2.jpeg')}}" width="160" height="160" />
                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm" type="button">
                                    Change Photo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket fa-2x"></i>
                                        </div>
                                    </div>
                                    <p class="text-white-50 small m-0">
                                        <i class="fas fa-arrow-up"></i>&nbsp;5% since
                                        last month
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket fa-2x"></i>
                                        </div>
                                    </div>
                                    <p class="text-white-50 small m-0">
                                        <i class="fas fa-arrow-up"></i>&nbsp;5% since
                                        last month
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" placeholder="user.name" name="username" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="Doe" name="last_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit">
                                                Save Settings
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="username"><strong>Account Number</strong></label>
                                                    <p>43748923649010</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="first_name"><strong>Account Type</strong></label>
                                                    <p>Checking</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email"><strong>Routing Number</strong><br /></label>
                                                    <p>09000000990</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="last_name"><strong>Bank Setup</strong></label><button class="btn btn-primary ui-btn d-block" type="button">
                                                        Connect/Manage Account
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection