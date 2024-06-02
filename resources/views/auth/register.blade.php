@extends('layouts.app')

@push('style')
@endpush

@section('content')
  {{-- Livewire Register Components --}}
  @livewire('user.auth.register.index')
@endsection

