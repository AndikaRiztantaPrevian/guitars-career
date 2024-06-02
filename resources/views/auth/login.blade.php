@extends('layouts.app')

@push('style')
@endpush

@section('content')
  {{-- Livewire Login Components --}}
  @livewire('user.auth.login.index')
@endsection

@push('script')
@endpush
