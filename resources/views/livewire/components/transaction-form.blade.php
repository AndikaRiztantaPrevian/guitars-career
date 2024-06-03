<div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
  <form wire:submit.prevent="submitForm">
    @csrf
    <div class="box-pricing-item">
      <h3 class="text-capitalize">{{ $type }}</h3>
      <div class="box-info-price"><span class="text-price color-brand-2">Rp. {{ number_format($amount, 0, ',', '.') }}</span></div>
      <div class="border-bottom mb-30">
        <p class="text-desc-package font-sm color-text-paragraph mb-30">
          @if ($type == 'Basic')
            Cocok untuk usaha anda yang belum memiliki cabang.
          @elseif($type == 'Standard')
            Cocok untuk usaha anda yang memiliki 2 - 4 cabang.
          @elseif($type == 'Enterprise')
            Cocok untuk anda yang memiliki banyak cabang.
          @endif
        </p>
      </div>
      <ul class="list-package-feature">
        <li>{{ $postLimitIncrement }}x Menayangkan Iklan Lowongan</li>
      </ul>
      <div><button class="btn btn-border" type="submit">Pesan Sekarang</button></div>
    </div>
  </form>
</div>