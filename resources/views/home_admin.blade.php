@extends('layouts.layout_admin')

@section('title')
    <title>PhyDiags | Education</title>
@endsection
        <?php
                $kelas	= \DB::select("SELECT * FROM kelas ");
                $siswa	= \DB::select("SELECT * FROM siswa");
                $guru	= \DB::select("SELECT * FROM guru");
            ?>
@section('content')


<main class="main">
  
    
<div class="container-fluid"> 
    <div class="alert alert-success" role="alert" style="background: #11101c;
  text-align: center;">
        <center><h4 class="alert-heading"><b style="color: white;">Selamat Datang, {{auth()->user()->name}} !</b></h4>
        <p style="color: white;">Selamat datang di aplikasi PhyDiags (Physics Diagnostic).  <br>
        PhyDiags merupakan aplikasi yang digunakan untuk mengembangkan tes diagnostik dalam bentuk four-tier yang berguna dalam mengidentifikasi profil konsepsi Mahasiswa pada materi Usaha dan Energi. Mengidentifikasi profil konsepsi Mahasiswa tentang Usaha Dan Energi penting dilakukan untuk mendukung siswa dalam proses pembelajaran di dalam kelas, agar nantinya guru dapat memberikan treatment dalam proses pembelajaran kepada Mahasiswa yang berbeda dengan hasil yang telah di peroleh dari website ini.
        </p>
        <hr>
        
        <p class="mb-0" style="color: white;">Anda telah mendaftar sebagai <b style="color: white;">Admin</b> </p></center>
    </div>
    @if(auth()->user()->profil != null)
        <div class="row">
            <div class="col-md-12 ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Silahkan Lengkapi Profil Anda!</strong> Klik pada bagian profil
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        </div>
        @else
        @endif
        <!-- <div class="divider mt-0" style="margin-bottom: 10px; #456bd8;">&nbsp;</div>
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-heavy-rain" >
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading" style="color: #456bd8;">Jumlah Kelas</div>
                                <div class="widget-subheading" style="color: #456bd8;">Jumlah kelas yang ada</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers " style="color: #456bd8;"><span>{{count($kelas)}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-heavy-rain ">
                        <div class="widget-content-wrapper ">
                            <div class="widget-content-left">
                                <div class="widget-heading" style="color: #456bd8;">Jumlah Mahasiswa</div>
                                <div class="widget-subheading" style="color: #456bd8;">Total Mahasiswa yang ada</div>
                            </div>
                            <!-- jumlah siswa masih salah -->
                         <!--    <div class="widget-content-right">
                                <div class="widget-numbers " style="color: #456bd8;"><span>{{count($siswa)}}</span></div>
                            </div>
                            <!-- jumlah siswa masih salah
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-heavy-rain ">
                        <div class="widget-content-wrapper ">
                            <div class="widget-content-left">
                                <div class="widget-heading" style="color: #456bd8;">Jumlah Dosen</div>
                                <div class="widget-subheading" style="color: #456bd8;">Total Dosen yang ada</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers " style="color: #456bd8;"><span>{{count($guru)}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        
  
</div>

</main>

@endsection