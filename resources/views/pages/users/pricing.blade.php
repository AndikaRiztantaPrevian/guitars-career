@extends('layouts.app')

@section('content')
  {{-- Livewire Pricing Components --}}
  @livewire('user.pricing.index')
@endsection

@push('script')
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
  <script>
    function handleFormSubmit(formId, url) {
      $(formId).submit(function(event) {
        event.preventDefault();

        $.ajax({
          url: url,
          type: "POST",
          data: {
            _token: '{{ csrf_token() }}',
          },
          success: function(data) {
            snap.pay(data.snap_token, {
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
          },
          error: function(xhr, status, error) {
            if (xhr.status === 401) {
              window.location.href = '{{ route('login') }}';
            } else {
              console.log(xhr.responseText);
            }
          }
        });
      });
    }

    handleFormSubmit("#form-basic", "/transaction/basic");
    handleFormSubmit("#form-standard", "/transaction/standard");
    handleFormSubmit("#form-enterprice", "/transaction/enterprice");
  </script>
@endpush
