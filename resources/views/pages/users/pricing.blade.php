@extends('layouts.app')

@section('content')
  <div>
    {{-- <section class="section-box">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Pricing</h2>
                        <p class="font-lg color-text-paragraph-2">Pricing built to suits teams of all sizes.</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="#">Home</a></li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="section-box mt-90">
      <div class="container">
        <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Berlangganan</h2>
        <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">Pilih Paket
          Terbaik yang Cocok untuk Anda</div>
        <div class="max-width-price">
          <div class="block-pricing mt-70">
            <div class="row">
              @livewire('components.transaction-form', ['type' => 'basic', 'amount' => 40000, 'postLimitIncrement' => 15])
              @livewire('components.transaction-form', ['type' => 'standard', 'amount' => 80000, 'postLimitIncrement' => 30])
              @livewire('components.transaction-form', ['type' => 'enterprice', 'amount' => 150000, 'postLimitIncrement' => 60])
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-90 mb-50">
      <div class="container">
        <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Frequently Asked Questions</h2>
        <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">Aliquam a
          augue
          suscipit, luctus neque purus ipsum neque dolor<br class="d-none d-lg-block"> primis a libero tempus,
          blandit and
          cursus varius and magnis sapien</div>
        <div class="row mt-50">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card-grid-border hover-up wow animate__animated animate__fadeIn">
              <h4 class="mb-20">I have promotional or discount code?</h4>
              <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Duis id
                nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam
                venenatis turpis
                euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse
                metus metus,
                laoreet nec arcu vel, venenatis cursus libero.</p><a class="link-arrow" href="#">Keep
                Reading</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card-grid-border hover-up wow animate__animated animate__fadeIn">
              <h4 class="mb-20">Where is my order? Quisque molestie</h4>
              <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Duis id
                nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam
                venenatis turpis
                euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse
                metus metus,
                laoreet nec arcu vel, venenatis cursus libero.</p><a class="link-arrow" href="#">Keep
                Reading</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card-grid-border hover-up wow animate__animated animate__fadeIn">
              <h4 class="mb-20">How can I return an item purchased online?</h4>
              <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Duis id
                nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam
                venenatis turpis
                euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse
                metus metus,
                laoreet nec arcu vel, venenatis cursus libero.</p><a class="link-arrow" href="#">Keep
                Reading</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card-grid-border hover-up wow animate__animated animate__fadeIn">
              <h4 class="mb-20">What are the delivery types you use?</h4>
              <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Duis id
                nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam
                venenatis turpis
                euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse
                metus metus,
                laoreet nec arcu vel, venenatis cursus libero.</p><a class="link-arrow" href="#">Keep
                Reading</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card-grid-border hover-up wow animate__animated animate__fadeIn">
              <h4 class="mb-20">How can I pay for my purchases?</h4>
              <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Duis id
                nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam
                venenatis turpis
                euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse
                metus metus,
                laoreet nec arcu vel, venenatis cursus libero.</p><a class="link-arrow" href="#">Keep
                Reading</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card-grid-border hover-up wow animate__animated animate__fadeIn">
              <h4 class="mb-20">What are the delivery types you use?</h4>
              <p class="font-sm mb-20 color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Duis id
                nibh vitae quam blandit venenatis. Duis vehicula magna ut neque tempus tristique. Nam
                venenatis turpis
                euismod arcu aliquet finibus. Vivamus nec vulputate ex, vitae condimentum ante. Suspendisse
                metus metus,
                laoreet nec arcu vel, venenatis cursus libero.</p><a class="link-arrow" href="#">Keep
                Reading</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-30 mb-40">
      <div class="container">
        <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Pelanggan Kami yang Bahagia</h2>
        <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">When it
          comes to
          choosing the right web hosting provider, we know how easy it<br class="d-none d-lg-block"> is to get
          overwhelmed
          with the number.</div>
        <div class="row mt-50">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-3 swiper">
              <div class="swiper-wrapper pb-70 pt-5">
                <div class="swiper-slide">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed
                        vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at
                        nisl sit amet neque
                        finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam
                        eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user1.png">
                        </figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed
                        vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at
                        nisl sit amet neque
                        finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam
                        eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user2.png">
                        </figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed
                        vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at
                        nisl sit amet neque
                        finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam
                        eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user3.png">
                        </figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination swiper-pagination3"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@push('script')
  <script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      Livewire.on('transactionCompleted', snapToken => {
        if(Array.isArray(snapToken)) {
          snapToken = snapToken[0];
        }
        snap.pay(snapToken, {
          onSuccess: function(result) {
            location.reload();
          },
          onPending: function(result) {
            location.reload();
          },
          onError: function(result) {
            location.reload();
          }
        });
      });
    });
  </script>
@endpush
