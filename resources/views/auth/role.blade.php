@extends('layouts.app')

@push('style')
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/wizard.css') }}">
@endpush

@section('content')
  <section class="pt-100 login-register">
    <div class="container">
      <div class="row login-register-cover">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
          <div class="text-center">
            <h2 class="mt-10 mb-5 text-brand-2 mb-30" id="step-text"></h2>
            <div class="divider-text-center mb-30"><span>Lengkapi data berikut ini.</span></div>
          </div>
          <form class="login-register text-start mt-20" action="{{ route('role-post', $id) }}" method="POST">
            @csrf
            <div id="content-1" style="width: 100%; height: 150px">
              <div class="d-flex" style="width: 100%; height: 150px">
                <div class="d-flex flex-column text-center justify-content-center align-items-center" style="width: 50%">
                  <input type="radio" class="btn-check @error('role') is-invalid @enderror" name="role" value="user" id="option1" autocomplete="off">
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
                  <input type="radio" class="btn-check @error('role') is-invalid @enderror" name="role" value="owner" id="option2" autocomplete="off">
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
            </div>
            <div id="content-2">
              <div class="form-group">
                <label class="form-label" for="input-password">Kata sandi *</label>
                <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                  id="input-password" type="password" name="password" placeholder="************">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label class="form-label" for="input-konfirmasi">Konfirmasi kata sandi *</label>
                <input class="form-control @error('password_confirmation') is-invalid @enderror" id="input-konfirmasi"
                  type="password" name="password_confirmation" placeholder="************">
                @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group mt-3 w-100 d-flex justify-content-end" id="all-button">
              <button class="btn btn-sm btn-brand-1 hover-up me-2" type="button" onclick="togglePrevious()"
                id="btn-previous">Kembali</button>
              <button class="btn btn-sm btn-brand-1 hover-up" type="button" onclick="toggleNext()"
                id="btn-next">Simpan</button>
              <button class="btn btn-sm btn-brand-1 hover-up" type="submit" id="btn-save">Simpan</button>
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

@push('script')
  <script>
    let stepOne = document.getElementById('content-1');
    let stepTwo = document.getElementById('content-2');
    let buttonSave = document.getElementById('btn-save');
    let buttonNext = document.getElementById('btn-next');
    let buttonBack = document.getElementById('btn-previous');
    let textStep = document.getElementById('step-text');

    textStep.innerHTML = "Step 1";

    stepOne.style.display = 'block';
    stepTwo.style.display = 'none';
    buttonSave.style.display = 'none';
    buttonBack.style.display = 'none';

    function toggleNext(event) {
      textStep.innerHTML = "Step 2";
      stepOne.style.display = 'none';
      stepTwo.style.display = 'block';
      buttonSave.style.display = 'block';
      buttonNext.style.display = 'none';
      buttonBack.style.display = 'block';
    }

    function togglePrevious(event) {
      textStep.innerHTML = "Step 1";
      stepOne.style.display = 'block';
      stepTwo.style.display = 'none';
      buttonSave.style.display = 'none';
      buttonNext.style.display = 'block';
      buttonBack.style.display = 'none';
    }
  </script>
@endpush
