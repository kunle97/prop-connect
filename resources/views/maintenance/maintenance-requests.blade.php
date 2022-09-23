@extends('layouts.master')

@section('title') Maintenance Requests @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 offset-sm-0 offset-md-0 offset-lg-2">
            <div class="col-12 heading-container">
                <a class="btn btn-primary float-end new-property-btn ui-btn" role="button" href="/dashboard/create-maintenance-request">New Maintenance Request</a>
                <h3 class="text-dark">Maintenance Requests</h3>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <table class="table my-0 md5_datatable" id="dataTable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Created By</th>
                                <th>Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($maintenance_requests as $mr)
                            <tr>
                                <td>{{$mr->created_at->diffForHumans()}} </td>
                                <td>{{$mr->description}}</td>
                                <td>{{App\Models\User::findOrFail($mr->user_id)->name}}</td>
                                <td>{{App\Models\Unit::findOrFail($mr->unit_id)->name}}</td>
                                <td>
                                    @if($mr->resolved)
                                    <a href="/dashboard/resolve-maintenance-request/{{$mr->id}}"><button class="btn btn-danger">Unresolve</button></a>
                                    @else
                                    <a href="/dashboard/resolve-maintenance-request/{{$mr->id}}"><button class="btn btn-primary ui-btn">Resolve</button></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Date</strong></td>
                                <td><strong>Description</strong></td>
                                <td><strong>Created By</strong></td>
                                <td><strong>Unit</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection