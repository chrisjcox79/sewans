@extends('admin.layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url({{ url('https://picsum.photos/219/452') }})">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">后台管理<span>系统</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
              <form class="forms-sample" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">电子邮件</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">密码</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    记住我
                  </label>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn btn-primary mr-2 mb-2 mb-md-0">
                    {{ __('Login') }}
                </button>
                </div>
            
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection