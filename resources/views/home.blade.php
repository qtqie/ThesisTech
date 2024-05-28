@extends('layouts.app')

@section('content')   

<div class="main">
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">

                <div class="card-body">
                    <h5 class="card-title">{{ __('Dashboard') }}</h5>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    @include('calendar')
</div>

@endsection

