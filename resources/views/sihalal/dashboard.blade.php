@extends('sihalal.layouts.app', ['title' => 'SIHALAL LPH IPB - Lembaga Pemeriksa Halal (LPH) - Institut Pertanian Bogor'])

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Selamat Datang</h3>
                        {{-- <h6 class="font-weight-normal mb-0"style="max-width:600px;">Anda sudah login sebagai Admin, segera lakukan pengisian data untuk website LPH IPB agar lebih menarik untuk di lihat.</span></h6> --}}
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white " type="button"  aria-haspopup="true" aria-expanded="true">
                                    22 Juni 2022
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('assets/sihalal/images/people.svg') }}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-watch mr-2"></i><small>22:30:14</small></h2>
                                </div>
                                <div class="ml-2">
                                    {{-- <h4 class="location font-weight-normal">Jam</h4>
                                    <h6 class="font-weight-normal">Indonesia</h6> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Auditor</p>
                                <p class="fs-30 mb-2">0</p>
                                {{-- <p>10.00% (30 days)</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Admin</p>
                                <p class="fs-30 mb-2">0</p>
                                {{-- <p>22.00% (30 days)</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection