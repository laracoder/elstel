@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if (session('status'))
            <div class="col-md-12 col-sm-12 mb-4">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
            </div>
        @endif
        <div class="col-lg-8 col-sm-12 mb-2">
            <div class="card">
                <div class="card-header bg-info text-white">{{__('dashboard.dashboard')}}</div>
                <div class="card-body">
                     {{__('dashboard.you_are_logged_in')}}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">{{__('dashboard.activities')}}</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
