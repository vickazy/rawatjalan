@extends('master')

@section('content')
<div class="container-fluid" style="margin-top:1%;">
   <div class="row">
       
    <div class="boxx">
      <h1 style="text-align:center;">Dashboard</h1>
    </div>

       @if (Auth::check())
       <p style="text-align: center; font-size:20px;margin-top:1%;">Logged in as
       <strong>{{Auth::user()->email}}</strong></p>
       @endif

       @role('admin')
       <p style="text-align:center; font-size:14px;">Selamat bekerja, <strong> Admin!</strong></p>
       @endrole

       @role('dokter')
       <p style="text-align:center; font-size:14px;">Selamat bekerja, <strong> Dokter!</strong></p>
       @endrole

       @role('super.user')
       <p style="text-align:center; font-size:14px;">Selamat bekerja, <strong> Super User!</strong></p>
       <div class="container-fluid" style="width:80%;margin:auto; margin-top:3%;margin-bottom:3%;">
         
         <h5 style="text-align:center;">Pendaftaran pasien ke poli (Cek BPJS)</h5>
         
         <form class="form-horizontal" role="form" method="GET">
             <div class="splitt" style="margin-left:2%;">
                <div class="splitpt input-field">
                  <input id="id_pasien" type="text" class="validate" name="id_pasien">
                  <label for="id_pasien">Masukkan Id Pasien</label>
                </div>
                <div class="splitpt input-field" style="margin-left:6%;">
                  <input id="id_bpjs" class="validate" type="text" name="id_bpjs">
                  <label for="id_bpjs">Masukkan Id BPJS</label>
                </div>
             </div>
           <div class="form-group">
            <div class="col-md-6 col-md-offset-5" style="margin-top:1%;">
              <button type="submit" class="btn btn-primary">
                Cek pasien
              </button>
            </div>
           </div>
           </form> 
       </div>
       @if (isset($bpjs) and isset($pasien))
       <div class="boxcek" style="border-bottom:1px solid;">
        <h3>Hasil</h3>
       </div>
       @endif
       <div class="boxcek" style="margin-bottom:3%;">
        @if (isset($bpjs) and isset($pasien))
          {{$info}}
        @endif
       </div>
       

        
       

       @endrole

               

   </div>
</div>
@endsection
