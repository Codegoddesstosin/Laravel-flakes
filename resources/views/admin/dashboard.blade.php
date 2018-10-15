@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                     You have all the rights do whatever you want, Manage Users, Assign roles, Permission, Create Posts! All of it.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
