<div style="height: 85vh">
  <section class="section-box h-100 py-5">
    <div class="container h-100">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="box-nav-tabs nav-tavs-profile mb-5">
            <ul class="nav" role="tablist">
              <li><a class="btn btn-border aboutus-icon mb-20 active" href="#tap-riwayat-transaksi" data-bs-toggle="tab"
                  role="tab" aria-controls="tap-riwayat-transaksi" aria-selected="true">Riwayat Transaksi</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
          <div class="content-single">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tap-riwayat-transaksi" role="tabpanel"
                aria-labelledby="tab-riwayat-transaksi">
                <h3 class="mt-0 mb-15 color-brand-1">Riwayat Transaksi</h3>
                <div>
                  <table class="table text-center">
                    <thead>
                      <tr class="table-active">
                        <th>No</th>
                        <th>Tipe Langganan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($dataHistory as $key => $data)
                        <tr class="border-bottom">
                          <th>{{ $dataHistory->firstItem() + $key }}</th>
                          <td class="text-capitalize">{{ $data->type }}</td>
                          <td>Rp. {{ number_format($data->amount, 0, ',', '.') }}</td>
                          <td class="text-capitalize">{{ $data->status }}</td>
                          <td>{{ $data->created_at }}</td>
                          @if ($data->status == 'pending')
                            <td>
                              <button class="btn btn-primary btn-sm"
                                onclick="snap.pay('{{ $data->snap_token }}')">Selesaikan</button>
                            </td>
                          @endif
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-end">
                    {{ $dataHistory->links('livewire.components.pagination-custome') }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@push('script')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
@endpush
