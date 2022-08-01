@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    @if(Auth::user()->is_admin =='admin')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color: rgb(255, 139, 86)">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total User</h4>
                    </div>

                    <div class="card-body">
                        <h5 style="color: rgb(255, 139, 86)">{{ $user }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color: rgb(255, 139, 86)">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Product</h4>
                    </div>

                    <div class="card-body">
                        <h5 style="color: rgb(255, 139, 86)">{{ $product }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color: rgb(255, 139, 86)">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Categories</h4>
                    </div>

                    <div class="card-body">
                        <h5 style="color: rgb(255, 139, 86)">{{ $categories }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif(Auth::user()->is_admin == 'kasir')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="color: rgb(255, 139, 86)">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Data Transaksi</h4>
                    </div>

                    <div class="card-body">
                        <h5 style="color: rgb(255, 139, 86)">nanti</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="col-12 mb-4">
                <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-color:rgb(247, 174, 174)">
                    <div class="hero-inner">
                        <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
                        <p class="lead">hak akses {{ Auth::user()->is_admin }} telah diberikan kepada akun anda!</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection