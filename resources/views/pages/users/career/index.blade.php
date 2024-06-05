@extends('layouts.app')

@push('style')
@endpush

@section('content')
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-50">
                    {{-- Livewire Lowongan Saya --}}
                    <livewire:User.JobVacancy.lowongan-saya />
                    {{-- Livewire Lowongan Saya --}}
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
@endpush
