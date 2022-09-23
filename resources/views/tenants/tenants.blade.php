@extends('layouts.master')

@section('title')
Manage Tenants
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-9 offset-0 offset-sm-0 offset-md-0 offset-lg-2">
            <h3 class="text-dark mb-4">Tenants</h3>
            <div class="card shadow">
                <div class="card-body">
                    <table class="table my-0 md5_datatable" id="dataTable">
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
    </div>
</div>
@endsection