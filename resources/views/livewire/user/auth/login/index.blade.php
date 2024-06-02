<div>
  <section class="pt-100 login-register">
    <div class="container">
      <div class="row login-register-cover">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
          <div class="text-center">
            <h2 class="mt-10 mb-4 text-brand-2">Selamat Datang!</h2>
            <a href="{{ route('oauth.redirect') }}" class="btn social-login hover-up mb-20"><img
                src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Masuk dengan Google</strong></a>
            <div class="divider-text-center"><span>Atau masuk dengan</span></div>
          </div>
          <form class="login-register text-start mt-20" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
              <label class="form-label" for="input-email">Alamat Email *</label>
              <input class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" id="input-email" type="email" name="email"
                placeholder="example@gmail.com">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label" for="input-password">Kata sandi *</label>
              <input class="form-control @error('password') is-invalid @enderror" id="input-password" type="password"
                name="password" placeholder="************">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="login_footer form-group d-flex justify-content-between">
              <label class="cb-container">
                <input type="checkbox"><span class="text-small">Ingat saya</span><span class="checkmark"></span>
              </label><a class='text-muted' href='#'>Lupa Password</a>
            </div>
            <div class="form-group">
              <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Masuk</button>
            </div>
            <div class="text-muted text-center">Belum punya akun? <a href='{{ route('register') }}'>Daftar</a></div>
          </form>
        </div>
        <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-4.svg"
            alt="JobBox"></div>
        <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
      </div>
    </div>
  </section>
</div>
