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
                                <h3 class="mt-0 mb-15 color-brand-1">Buat Lowongan Baru</h3>
                                <form>
                                    <div class="row form-contact">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="box-skills">
                                                <h5 class="mt-0 color-brand-1">Detail Perusahaan</h5>
                                                <div class="form-group">
                                                    <label class="font-sm mb-10">Nama Perusahaan</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Isi nama perusahaan anda">
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-sm mb-10">Foto Perusahaan</label>
                                                    <input class="form-control" type="file" accept="image/*"
                                                        placeholder="Isi foto perusahaan anda">
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-sm mb-10">Alamat</label>
                                                    <textarea class="form-control" placeholder="Isi alamat perusahaan anda"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="font-sm mb-10">Provinsi</label>
                                                            <select class="form-select"
                                                                wire:model.live="selectedProvince">
                                                                <option value="">Pilih Provinsi</option>
                                                                @foreach ($provinces as $item)
                                                                    <option value="{{ $item->code }}">
                                                                        {{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="font-sm mb-10">Kabupaten/Kota</label>
                                                            <select class="form-select" wire:model.live="selectedCity"
                                                                {{ empty($cities) ? 'disabled' : '' }}>
                                                                <option value="">Pilih Kabupaten/Kota</option>
                                                                @foreach ($cities as $item)
                                                                    <option value="{{ $item->code }}">
                                                                        {{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="font-sm mb-10">Kecamatan</label>
                                                            <select class="form-select"
                                                                wire:model.live="selectedDistrict"
                                                                {{ empty($districts) ? 'disabled' : '' }}>
                                                                <option value="">Pilih Kecamatan</option>
                                                                @foreach ($districts as $item)
                                                                    <option value="{{ $item->code }}">
                                                                        {{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="font-sm mb-10">Kelurahan/Desa</label>
                                                            <select class="form-select"
                                                                wire:model.live="selectedVillage"
                                                                {{ empty($villages) ? 'disabled' : '' }}>
                                                                <option value="">Pilih Kelurahan/Desa</option>
                                                                @foreach ($villages as $item)
                                                                    <option value="{{ $item->code }}">
                                                                        {{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="box-skills">
                                                <h5 class="mt-0 color-brand-1">Kualifikasi Kerja</h5>
                                                <div class="form-group">
                                                    <label class="font-sm mb-10">Nama Pekerjaan</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Isi nama pekerjaan anda">
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-sm mb-10">Deskripsi Pekerjaan</label>
                                                    <textarea class="form-control" placeholder="Isi Deskripsi pekerjaan"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-sm color-text-muted mb-10">Jam Kerja
                                                        Pekerjaan</label>
                                                    <select class="form-select">
                                                        <option value="fulltime">Fulltime
                                                        </option>
                                                        <option value="parttime">Parttime
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mt-40">
                                                    <span class="card-info font-sm color-text-paragraph-2">Anda bisa
                                                        tambahkan hingga 5 skill</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-button mt-15">
                                        <button class="btn btn-apply-big font-md ">Simpan semua
                                            perubahan</button>
                                    </div>
                                </form>
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
                                                        <div class="image-box"><img
                                                                src="assets/imgs/brands/brand-5.png" alt="jobBox">
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
                                                        <div class="image-box"><img
                                                                src="assets/imgs/brands/brand-6.png" alt="jobBox">
                                                        </div>
                                                        <div class="right-info"><a class="name-job"
                                                                href="#">Quora
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
                                                        <div class="image-box"><img
                                                                src="assets/imgs/brands/brand-7.png" alt="jobBox">
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
                                                        <div class="image-box"><img
                                                                src="assets/imgs/brands/brand-8.png" alt="jobBox">
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
</div>
