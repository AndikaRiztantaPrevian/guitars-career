<div>
    <h3 class="mt-0 color-brand-1 mb-50">Lowongan Saya</h3>
    <div class="row display-list">
        @forelse ($careers as $career)
            <div class="col-xl-12 col-12">
                <div class="card-grid-2 hover-up"><span class="flash"></span>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-2-image-left">
                                <div class="image-box" style="width: 100px; object-fit: cover"><img src="{{ Storage::url($career->image) }}" alt="jobBox">
                                </div>
                                <div class="right-info"><a class="name-job"
                                        href="#">{{ $career->job_name }}</a><span
                                        class="location-small">{{ $career->village->name }}, Kec.
                                        {{ $career->district->name }}, {{ $career->city->name }},
                                        {{ $career->province->name }}, Indonesia</span></div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                            <div class="pl-15 mb-15 mt-30">
                                @foreach ($career->skills as $item)
                                    <a class="btn btn-grey-small mr-5" href="#">
                                        {{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-block-info">
                        <h4><a href='job-details.html'>{{ $career->job_name }}</a></h4>
                        <div class="mt-5">
                            <span class="card-briefcase text-capitalize">
                                @if ($career->employment_type == 'fulltime')
                                    Full time
                                @else
                                    Part time
                                @endif
                            </span>
                            <span class="card-time"><span>{{ $career->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="font-sm color-text-paragraph mt-10">
                            {{ $career->description }}
                        </p>
                        <div class="card-2-bottom mt-20">
                            <div class="row">
                                <div class="col-lg-7 col-7">
                                    <span class="card-text-price">Rp. {{ $career->salary }}</span>
                                    {{-- <span class="text-muted">/Hour</span> --}}
                                </div>
                                <div class="col-lg-5 col-5 text-end">
                                    <button class="btn btn-outline-primary">Edit</button>
                                    <button class="btn btn-outline-danger">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pagination --}}
            {{-- {{ $careers->links('pagination::tailwind') }} --}}
            {{-- Pagination --}}
        @empty
            <h1>LU GAPUNYA LOKER</h1>
        @endforelse
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
