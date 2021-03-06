@extends('layouts.layout_ujian')
@section('title')
<title>PhyDiags | Education</title>
@stop

@section('content')
<div id=fullscreenExam style=" background: white;
  ">
  <div class="container">
  <br> <br>

    <div class="row">
      <div class="col-md-12">
        <div class="card pt-3 pl-5 pr-5 pb-3 head_exam" style="background: #11101c;" >
          <div class="text-center"> <h4 style="color:white;"> <strong \
          
          >{{ $ujian->nama_ujian }}</strong></h4> </div>
        </div>
      </div>
    </div>

    <div id="table_data"  >
      @include('ujian.siswa.pagination_data')
    </div>

  </div>
</div>


<script>
$(document).ready(function(){
  $(document).on('click', '.pagination a',function(event){
      event.preventDefault(); //stop refresh webpage
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
  });
  function fetch_data(page)
  {
      const peserta_ujian_id = $('#peserta_ujian_id').val();
      $.ajax({
          url:"/pagination/fetch_data?page="+page,
          type: "GET",
          data: {
            peserta_ujian_id: peserta_ujian_id
          },
          success: function(soal_satuan)
          {
            //   alert(soal_satuan);
              $('#table_data').html(soal_satuan);
          }
      });
  }
});
</script>
@endsection
