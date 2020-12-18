@extends('home.layouts.app')
@section('title', '注册')
@section('content')
<div id="page-content">
        <!--Body Container-->
        <!--Breadcrumbs-->
        <div class="breadcrumbs-wrapper">
        	<div class="container">
            	<div class="breadcrumbs"><a href="{{route('home')}}" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>{{ __('Register') }}</span></div>
            </div>
        </div>
        <!--End Breadcrumbs-->
        <!--Page Title with Image-->
        <div class="page-title"><h1>Create An Account</h1></div>
        <!--End Page Title with Image-->
        <div class="container">
        	<!--Main Content-->
            <div class="row justify-content-center">
				<div class="col-sm-5 col-12 box">
                	<div class="mb-4">
                    	<h3>Personal Information</h3>
                       <form method="post"  action="{{ route('register') }}" accept-charset="UTF-8" class="contact-form">
                          @csrf

                          	<div class="row">
                                <div class="col-12 col-sm-12 ">
                                    <div class="form-group">
                                        <label for="Name">{{ __('Name') }} <span class="required">*</span></label>
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 ">
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}<span class="required">*</span></label>
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                          	</div>
                            {{-- <div class="row">
                                <div class="form-group form-check col-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="form-check-label padding-15px-left">
                                        <input type="checkbox" class="form-check-box" value=""> &nbsp;Sign Up for Newsletter
                                    </label>
                                </div>
                            </div> --}}
                            {{-- <h3>Login Information</h3> --}}
                            <div class="row">
                                <div class="col-12 col-sm-12 ">
                                    <div class="form-group">
                                        <label for="CustomerPassword">{{ __('Password') }} <span class="required">*</span></label>
                                        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 ">
                                    <div class="form-group">
                                        <label for="CustomerConfirmPassword">{{ __('Confirm Password') }}<span class="required">*</span></label>
                                       <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                          	</div>
							<div class="row">
                                <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary mb-3">
                                    {{ __('Register') }}
                                </button>
                                </div>
                                <div class="text-right col-12 col-sm-12 col-md-6 col-lg-6">
                                <a href="{{route('login')}}">« Back To Login</a>
                                </div>
                         	</div>
                     </form>
                    </div>
               	</div>
			</div>
        	<!--End Main Content-->
        </div><!--End Body Container-->

    </div>
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
