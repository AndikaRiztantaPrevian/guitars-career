@extends('layouts.app')

@section('content')
  <section class="pt-100 login-register">
    <div class="container">
      <div class="row login-register-cover">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
          <div class="text-center">
            <h2 class="mt-10 mb-5 text-brand-2 mb-30" id="step-text">Selamat Datang.</h2>
            <div class="divider-text-center mb-30"><span>Lengkapi data berikut ini.</span></div>
          </div>
          <form class="login-register text-start mt-20" action="{{ route('role-only-post', $id) }}" method="POST">
            @csrf
            <div class="d-flex" style="width: 100%; height: 150px">
              <div class="d-flex flex-column text-center justify-content-center align-items-center" style="width: 50%">
                <input type="radio" class="btn-check @error('role') is-invalid @enderror" name="role"
                  value="user" id="option1" autocomplete="off">
                <label class="btn border border-primary" for="option1">
                  <div>
                    <img src="{{ asset('assets/imgs/role/user.png') }}" width="80" height="80" alt="">
                  </div>
                  <div class="font-bold">
                    Pelamar
                  </div>
                </label>
                @error('role')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="d-flex flex-column text-center justify-content-center align-items-center" style="width: 50%">
                <input type="radio" class="btn-check @error('role') is-invalid @enderror" name="role"
                  value="owner" id="option2" autocomplete="off">
                <label class="btn border border-primary" for="option2">
                  <div>
                    <img src="{{ asset('assets/imgs/role/owner.png') }}" width="80" height="80" alt="">
                  </div>
                  <div class="font-bold">
                    Rekruter
                  </div>
                </label>
                @error('role')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group mt-3">
              <button class="btn btn-sm btn-brand-1 hover-up w-100" type="submit" id="btn-save">Simpan</button>
            </div>
          </form>
        </div>
        <div class="img-1 d-none d-lg-block"><img class="shape-1"
            src="{{ asset('assets/imgs/page/login-register/img-4.svg') }}" alt="JobBox"></div>
        <div class="img-2"><img src="{{ asset('assets/imgs/page/login-register/img-3.svg') }}" alt="JobBox"></div>
      </div>
    </div>
  </section>
@endsection
