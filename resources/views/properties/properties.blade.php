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
            <div class="row">
                <div class="col-12 heading-container"><a class="btn btn-primary float-end new-property-btn ui-btn" role="button" href="/dashboard/add-property">New Property</a>
                    <h3 class="text-dark">Your properties</h3>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 property-col">
                    <a class="manage-propert-link" href="/dashboard/manage-property">
                        <div class="property-inner-container">
                            <div class="property-col-img-container"><img class="property-img" src="{{URL::to('../assets/img/apartment-406901_1280.jpeg')}}"></div>
                            <div class="property-text-container">
                                <h4 class="fw-normal property-name">123 Bleaker St. Englishtown, NJ 02123</h4>
                                <div class="property-tag-container">
                                    <div><span class="property-tag">1 Vacancy</span></div>
                                    <div class="property-tag-outer"><span class="property-tag">2 Units</span></div>
                                </div>
                                <h5 class="total-profit-heading">Total Profit:&nbsp;<span class="property-profit">$32,605</span></h5>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection