<div>
  <section class="pt-100 login-register">
    <div class="container">
      <div class="row login-register-cover">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
          <div class="text-center">
            <h2 class="mt-10 mb-5 text-brand-2">Selamat Datang!</h2>
            <div class="divider-text-center"><span></span></div>
          </div>
          <form class="login-register text-start mt-20" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label class="form-label" for="input-name">Nama lengkap *</label>
              <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="input-name"
                type="text" name="name" placeholder="Joe Steven">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label" for="input-email">Alamat Email *</label>
              <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                id="input-email" type="email" name="email" placeholder="example@gmail.com">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
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
            <div class="login_footer form-group d-flex justify-content-between">
              <label class="cb-container">
                <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span
                  class="checkmark"></span>
              </label><a class='text-muted' href='page-contact.html'>Lean more</a>
            </div>
            <div class="form-group">
              <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Daftar</button>
            </div>
            <div class="text-muted text-center">Sudah mempunyai akun? <a href='{{ route('login') }}'>Masuk</a></div>
          </form>
        </div>
        <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-1.svg"
            alt="JobBox"></div>
        <div class="img-2"><img src="assets/imgs/page/login-register/img-2.svg" alt="JobBox"></div>
      </div>
    </div>
  </section>
</div>
