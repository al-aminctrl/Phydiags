@extends('layouts.layout_siswa')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')
<main class="main" >
    <div class="container-fluid" >
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background: #11101c;">
            <strong style="color: white;" >{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


        <div class="alert alert-primary" role="alert">
            <h5 class="alert-heading"><strong>{{$kelas->nama_kelas}}</strong> </h5> <hr class="mb-1 mt-3"> 
            <p class="mb-1"><strong>Deskripsi kelas : </strong> {{$kelas->deskripsi}}</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card " >
                    <div class="card-header" style=" background: #11101c;
  text-align: center;
  color: white;
  font-size: 30px;">Daftar Siswa</div>
                    <div class="card-body">
                        @if($anggotakelas->count() != 0)
                        <table class="table table-striped table-sm">
                            <thead class="thead-dark thead text-center" style="background-color:#11101c; color:white; font-weight:bold">
                                <tr>
                                    <td width="40px">No</td>
                                    <td>Nama Siswa</td>
                                    <td width="30px"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach ($anggotakelas as $item)
                                    <tr>
                                        <td class="text-center"><?php echo $i; $i++?></td>
                                        <td>{{$item->siswa->nama_lengkap}}</td>
                                        <td><a href=""><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                Belum ada siswa yang mengikuti kelas ini
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <a href="{{route('getKelasSiswa')}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Kembali</button></a>       

            </div>
            <div class="col-md-8">
                <div class="card pt-3 pr-3 pl-3 pb-0">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <a class="nav-link" id="hasil-ujian-tab" data-toggle="tab" href="#hasil-ujian" role="tab" aria-controls="hasil-ujian" aria-selected="false"><strong>Hasil Ujian</strong> </a>
                        </li>
                    </ul>

                    <div class="tab-content mr-3 ml-3">   
                        <!-- hasil ujian  -->
                        <div class="tab-pane active" id="hasil-ujian" role="tabpanel" aria-labelledby="hasil-ujian-tab">
                            <div class="row table-inside">
                            @if($hasil_ujian->count() != 0)
                                <table class="table table-striped table-sm" >
                                    <thead class="thead text-center" style="background-color:#11101c; color:white; font-weight:bold">
                                        <tr>
                                            <th scope="col" style="width:50px">No</th>
                                            <th scope="col" >Nama Ujian </th>
                                            <th scope="col" >Keterangan </th>
                                            <th scope="col" >Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; ?>
                                        <?php $j=1; ?>
                                        @foreach ($hasil_ujian as $item)
                                        <tr>
                                            <td scope="row" class="text-center"><?php echo $i; $i++; ?></td>
                                            <td >{{$item->ujian->nama_ujian}}</td>
                                            <td scope="row" class="text-center">Ujian Ke- <?php echo $j; $j++; ?></td>
                                           
                                            
                                            <td class="text-center">
                                                <a href="{{route('hasilUjian',$item->id)}}">
                                                    <button type="button" class="btn btn-info btn-sm" style="background: #11101c;">
                                                        <i class="fa fa-eye fa-sm"></i> Detail Hasil
                                                    </button>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <div class="col-md-12">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background: #11101c;," >
                                        <strong style="font-size: 16px;"> Belum ada hasil ujian </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    </div>
                                @endif
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
</main>



<script>
  $(function () {
    $('#myTab li:first-child a').tab('show')
  })
  $("#start").hide();



</script>
@endsection


