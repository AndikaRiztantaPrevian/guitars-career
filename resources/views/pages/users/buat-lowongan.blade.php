@extends('layouts.app')

@push('style')
@endpush

@section('content')
    {{-- Livewire buat-lowongan Component --}}
    @livewire('user.job-vacancy.index')
@endsection

@push('script')
@endpush
