@extends('layouts.app')

@section('content')
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
                                <h3 class="mt-0 mb-15 color-brand-1">Buat Lowongan Baru</h3><a class="font-md color-text-paragraph-2"
                                    href="#">Perbarui akun anda</a>
                                <div class="row form-contact">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Nama Lengkap</label>
                                            <input class="form-control" type="text" value="{{ auth()->user()->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Email *</label>
                                            <input class="form-control" type="text" value="{{ auth()->user()->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Nomer Handphone</label>
                                            <input class="form-control" type="text" value="01 - 234 567 89">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Bio</label>
                                            <textarea class="form-control" rows="4">We are AliThemes , a creative and dedicated group of individuals who love web development almost as much as we love our customers. We are passionate team with the mission for achieving the perfection in web design.</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Negara</label>
                                                    <input class="form-control" type="text" value="United States">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Provinsi</label>
                                                    <input class="form-control" type="text" value="New York">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Kota</label>
                                                    <input class="form-control" type="text" value="Mcallen">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Kode Pos</label>
                                                    <input class="form-control" type="text" value="82356">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom pt-10 pb-10 mb-30"></div>
                                        <h6 class="color-orange mb-20">Ubah kata sandi</h6>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Kata sandi
                                                        baru</label>
                                                    <input class="form-control" type="password" value="123456789">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Ulangi kata sandi
                                                        *</label>
                                                    <input class="form-control" type="password" value="123456789">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom pt-10 pb-10"></div>
                                        <div class="box-button mt-15">
                                            <button class="btn btn-apply-big font-md font-bold">Simpan semua
                                                perubahan</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="box-skills">
                                            <h5 class="mt-0 color-brand-1">Keterampilan</h5>
                                            <div class="form-contact">
                                                <div class="form-group">
                                                    <input class="form-control search-icon" type="text" value=""
                                                        placeholder="Menyanyi, Piano, Gitar..">
                                                </div>
                                            </div>
                                            <div class="box-tags mt-30"><a class="btn btn-grey-small mr-10">Figma<span
                                                        class="close-icon"></span></a><a
                                                    class="btn btn-grey-small mr-10">Adobe XD<span
                                                        class="close-icon"></span></a><a
                                                    class="btn btn-grey-small mr-10">NextJS<span
                                                        class="close-icon"></span></a><a
                                                    class="btn btn-grey-small mr-10">React<span
                                                        class="close-icon"></span></a><a
                                                    class="btn btn-grey-small mr-10">App<span
                                                        class="close-icon"></span></a><a
                                                    class="btn btn-grey-small mr-10">Digital<span
                                                        class="close-icon"></span></a><a
                                                    class="btn btn-grey-small mr-10">NodeJS<span
                                                        class="close-icon"></span></a></div>
                                            <div class="mt-40"> <span
                                                    class="card-info font-sm color-text-paragraph-2">You can add up to
                                                    15
                                                    skills</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-lowongan-saya" role="tabpanel"
                                aria-labelledby="tab-lowongan-saya">
                                <h3 class="mt-0 color-brand-1 mb-50">My Jobs</h3>
                                <div class="row display-list">
                                    <div class="col-xl-12 col-12">
                                        <div class="card-grid-2 hover-up"><span class="flash"></span>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card-grid-2-image-left">
                                                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                                alt="jobBox">
                                                        </div>
                                                        <div class="right-info"><a class="name-job"
                                                                href="#">Linkedin</a><span
                                                                class="location-small">New York, US</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                    <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                            href="#">Adobe
                                                            XD</a><a class="btn btn-grey-small mr-5"
                                                            href="#">Figma</a></div>
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h4><a href='job-details.html'>React Native Web Developer</a></h4>
                                                <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                        class="card-time"><span>4</span><span> mins ago</span></span>
                                                </div>
                                                <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit
                                                    amet, consectetur adipisicing
                                                    elit. Recusandae architecto eveniet, dolor quo repellendus pariatur
                                                </p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-7"><span
                                                                class="card-text-price">$500</span><span
                                                                class="text-muted">/Hour</span></div>
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-12">
                                        <div class="card-grid-2 hover-up"><span class="flash"></span>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card-grid-2-image-left">
                                                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                                alt="jobBox">
                                                        </div>
                                                        <div class="right-info"><a class="name-job" href="#">Quora
                                                                JSC</a><span class="location-small">New York, US</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                    <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                            href="#">Adobe
                                                            XD</a><a class="btn btn-grey-small mr-5"
                                                            href="#">Figma</a></div>
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h4><a href='job-details.html'>Senior System Engineer</a></h4>
                                                <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                        class="card-time"><span>5</span><span> mins ago</span></span>
                                                </div>
                                                <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit
                                                    amet, consectetur adipisicing
                                                    elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.
                                                </p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-7"><span
                                                                class="card-text-price">$800</span><span
                                                                class="text-muted">/Hour</span></div>
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-12">
                                        <div class="card-grid-2 hover-up"><span class="flash"></span>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card-grid-2-image-left">
                                                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                                alt="jobBox">
                                                        </div>
                                                        <div class="right-info"><a class="name-job"
                                                                href="#">Nintendo</a><span
                                                                class="location-small">New York, US</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                    <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                            href="#">Adobe
                                                            XD</a><a class="btn btn-grey-small mr-5"
                                                            href="#">Figma</a></div>
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h4><a href='job-details.html'>Products Manager</a></h4>
                                                <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                        class="card-time"><span>6</span><span> mins ago</span></span>
                                                </div>
                                                <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit
                                                    amet, consectetur adipisicing
                                                    elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.
                                                </p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-7"><span
                                                                class="card-text-price">$250</span><span
                                                                class="text-muted">/Hour</span></div>
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-12">
                                        <div class="card-grid-2 hover-up"><span class="flash"></span>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card-grid-2-image-left">
                                                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                                alt="jobBox">
                                                        </div>
                                                        <div class="right-info"><a class="name-job"
                                                                href="#">Periscope</a><span
                                                                class="location-small">New York, US</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                    <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                            href="#">Adobe
                                                            XD</a><a class="btn btn-grey-small mr-5"
                                                            href="#">Figma</a></div>
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h4><a href='job-details.html'>Lead Quality Control QA</a></h4>
                                                <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                        class="card-time"><span>6</span><span> mins ago</span></span>
                                                </div>
                                                <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit
                                                    amet, consectetur adipisicing
                                                    elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.
                                                </p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-7"><span
                                                                class="card-text-price">$250</span><span
                                                                class="text-muted">/Hour</span></div>
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="paginations">
                                    <ul class="pager">
                                        <li><a class="pager-prev" href="#"></a></li>
                                        <li><a class="pager-number" href="#">1</a></li>
                                        <li><a class="pager-number" href="#">2</a></li>
                                        <li><a class="pager-number" href="#">3</a></li>
                                        <li><a class="pager-number" href="#">4</a></li>
                                        <li><a class="pager-number" href="#">5</a></li>
                                        <li><a class="pager-number active" href="#">6</a></li>
                                        <li><a class="pager-number" href="#">7</a></li>
                                        <li><a class="pager-next" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
