<div>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="box-nav-tabs nav-tavs-profile mb-5">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="btn btn-border aboutus-icon mb-20 active" href="#tab-buat-lowongan"
                                    data-bs-toggle="tab" role="tab" aria-controls="tab-buat-lowongan"
                                    aria-selected="true">
                                    Buat Lowongan
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-border recruitment-icon mb-20" href="#tab-lowongan-saya"
                                    data-bs-toggle="tab" role="tab" aria-controls="tab-lowongan-saya"
                                    aria-selected="false">
                                    Lowongan Saya
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <div class="content-single">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-buat-lowongan" role="tabpanel"
                                aria-labelledby="tab-buat-lowongan">
                                {{-- Livewire Buat Lowongan Form --}}
                                <livewire:User.JobVacancy.buat-lowongan-form />
                                {{-- Livewire Buat Lowongan Form --}}
                            </div>
                            <div class="tab-pane fade" id="tab-lowongan-saya" role="tabpanel"
                                aria-labelledby="tab-lowongan-saya">
                                {{-- Livewire Lowongan Saya --}}
                                <livewire:User.JobVacancy.lowongan-saya />
                                {{-- Livewire Lowongan Saya --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
