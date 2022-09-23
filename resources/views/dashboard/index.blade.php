@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('styles')
<link rel="stylesheet" href="../assets/css/auth.css">
<link rel="stylesheet" href="../assets/css/styles.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4"><a class="btn btn-primary btn-sm d-none d-sm-inline-block ui-btn" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total REvenue</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span><strong>$215,000</strong></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Expenses</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>$40,000</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Tasks</span></div>
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Pending Requests</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-xl-8">
            <div>
                <h3 class="text-dark heading-container">Revenue</h3>
            </div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                </div>
            </div>
            <div class="heading-container">
                <h3 class="text-dark ">Transactions</h3>
            </div>
            <div class="card shadow">
                <div class="card-body">

                    <table class="table table-hover my-0 md5_datatable" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar2.jpeg">Angelica Ramos</td>
                                <td>Chief Executive Officer(CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09<br></td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar3.jpeg">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12<br></td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar4.jpeg">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13<br></td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar5.jpeg">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07<br></td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar1.jpeg">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02<br></td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar2.jpeg">Bruno Nash<br></td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03<br></td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar3.jpeg">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12<br></td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar4.jpeg">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06<br></td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar5.jpeg">Cedric Kelly</td>
                                <td>Senior JavaScript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29<br></td>
                                <td>$433,060</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Position</strong></td>
                                <td><strong>Office</strong></td>
                                <td><strong>Age</strong></td>
                                <td><strong>Start date</strong></td>
                                <td><strong>Salary</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4">
            <h3 class="text-dark heading-container">Recent Activity</h3>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rent Over Due</h4>
                    <p class="card-text">John Doe is 3 Days overdue for their rent payment.</p><a class="card-link" href="#">Dismiss</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection