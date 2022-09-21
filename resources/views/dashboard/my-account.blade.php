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
                            <img class="rounded-circle mb-3 mt-4" src="{{URL::to('../assets/img/user.png')}}" width="160" height="160" />
                            <div class="mb-3">
                                <button class="btn btn-primary ui-btn" type="button">
                                    Change Photo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-body">
                                    <form action="/dashboard/update-my-account" method="POST">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name"><strong>Name</strong></label>
                                                    <input class="form-control" type="text" id="name" placeholder="John" name="name" value="{{Auth::User()->name}}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email"><strong>Email Address</strong></label>
                                                    <input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" value="{{Auth::User()->email}}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary  ui-btn" type="submit">
                                                Save Settings
                                            </button>
                                        </div>
                                        {{@csrf_field()}}
                                    </form>
                                </div>
                            </div>

                            <div class="card shadow mb-3">
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="current_password"><strong>Current Password</strong></label>
                                                    <input class="form-control" type="password" id="current_password" name="current_password" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="new_password"><strong>New Password</strong></label>
                                                    <input class="form-control" type="password" id="new_password" name="new_password" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="new_password_2"><strong>Re-type New Password</strong></label>
                                                    <input class="form-control" type="password" id="new_password_2" name="new_password_2" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary  ui-btn" type="submit">
                                                Change Password
                                            </button>
                                        </div>
                                        {{@csrf_field()}}
                                    </form>
                                </div>
                            </div>

                            <!-- Add bank info when stripe is integrated-->
                            <!-- <div class="card shadow mb-3">
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
                             -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection