@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <h1></h1>
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Você entrou!!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
