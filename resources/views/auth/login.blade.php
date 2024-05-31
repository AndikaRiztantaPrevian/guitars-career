@extends('layouts.app')

@section('content')
  <section class="pt-100 login-register">
    <div class="container">
      <div class="row login-register-cover">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
          <div class="text-center">
            <p class="font-sm text-brand-2 mb-30">Selamat Datang!</p>
            <a href="{{ route('oauth.redirect') }}" class="btn social-login hover-up mb-20"><img src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign in with Google</strong></a>
            <div class="divider-text-center"><span>Or continue with</span></div>
          </div>
          <form class="login-register text-start mt-20" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
              <label class="form-label" for="input-1">Email address *</label>
              <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                id="input-1" type="email" name="email" placeholder="example@gmail.com">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label" for="input-4">Password *</label>
              <input class="form-control @error('password') is-invalid @enderror" id="input-4" type="password"
                name="password" placeholder="************">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="login_footer form-group d-flex justify-content-between">
              <label class="cb-container">
                <input type="checkbox"><span class="text-small">Remenber me</span><span class="checkmark"></span>
              </label><a class='text-muted' href='page-contact.html'>Forgot Password</a>
            </div>
            <div class="form-group">
              <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
            </div>
          </form>
        </div>
        <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-4.svg"
            alt="JobBox"></div>
        <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
      </div>
    </div>
  </section>
@endsection
