@extends('layouts.app')
@section('content')
    <div id="page-content">
        <!--Body Container-->
        <!--Breadcrumbs-->
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <div class="breadcrumbs"><a href="{{route('root')}}" title="Back to the home page">Home</a> <span
                        aria-hidden="true">|</span> <span>{{ __('Verify Your Email Address') }}</span></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <div class="card shadow-sm">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn mt-3">{{ __('click here to request another') }} <i
                                    class="fa fa-angle-right"></i></button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
