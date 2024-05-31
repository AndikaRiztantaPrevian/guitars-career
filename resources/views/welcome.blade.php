@extends('layouts.app')

@section('content')
{{-- Livewire Beranda Component --}}
@livewire('user.beranda.index')
@endsection

@push('script')
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
@endpush
