@extends('layouts.admin')
@section('title')
  Dashboard | PEMABEMEMET
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">SELAMAT DATANG DI APLIKASI PEMABEMEMET !</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ilmu Pendidikan</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$fip}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Bahasa dan Seni</h6>
            <h4 class="mb-3">{{$fbs}} </h4>

        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Teknik</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$ft}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">FAKULTAS VOKASI</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$vokasi}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ilmu Olahraga</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$fio}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Matematika dan Ilmu Pengetahuan Alam</h6>
            <h4 class="mb-3">{{$fmipa}} </span></h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ilmu Sosial dan Hukum</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$fish}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Fakultas Ekonomi</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$fe}} </h4>
        </div>
    </div>
    <h4>Total: {{$mahasiswa}} Mahasiswa </h4>
</div>



<!-- end row -->

@endsection
