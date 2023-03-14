@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengalaman Kuliah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengalaman Kuliah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                <center>
                    <h4 style="font-weight: bold">Pengalaman Kuliah</h4><br><br>
                    <img src="dist/img/didin.png" alt="foto didin" style="width:200px"> <br><br> 
                    @foreach ($kuliah2 as $item)
                        
                    {{-- <h4 style="font-weight: bold">IEMADUDDIN | 2141720055</h4> --}}
                    <h4 style="font-weight: bold">{{$item->full_name}} | {{$item->nim}}</h4>
                    <p>{{$item->story}}</p>
                    @endforeach   
                    
                    {{-- <p" >Hallo, aku didin dari bangkalan madura. Seorang anak muda yang ingin mencari ilmu di luar pulaunya sendiri.
                        Beberapa hal yang menjadi alasanku untuk kuliah di Polinema ini, yakni dikarenakan Jurusannya dan juga karena
                        ada di Kota Malang. Kota ini juga merupakan kota yang banyak ingin disinggahi dengan berbagai macam wisata
                        dan lokasi yang indah tentunya. Kuliah di Polinema ini pada awalnya sedikit kaget dan beda dikarenakan dahulunya
                        aku adalah seorang siswa SMA, sedangkan basic dari polinema sendiri ialah 60% Praktek dan 40% Teori. Tetapi, dengan
                        berjalannya waktu semuanya mulai terbiasa dan sudah beradaptasi dengan keaadan dan lingkungan juga. Semester 1
                        sudah mulai bergabung di dalam organisasi, yaitu di HMTI. Dengan mengikuti organisasi, maka tentunya waktu kuliah terbagi dengan
                        organisasi. Namun, hal tersebut menjadi tantangan tersendiri untuk bisa membagi waktu antara kuliah yang merupakan tujuan utama
                        dengan organisasi yang hanya menjadi sarana pengembangan diri saja. Setelah hampir 2 tahun di Polinema ini, aku mendapatkan 
                        banyak pembelajaran, diantaranya cara membagi waktu dengan baik, bersikap professional, dsb. Kuliah di Politeknik merupakan sebuah
                        kesibukann yang cukup sibuk, apalagi juga ikut organisasi, tentunya sedikit sekali waktu kosong selama ini. Namun, hal tersebut cukup
                        seru dan menantang. Kurang lebih 2 tahun ini, softskill dan hardskill ku, lumayan meningkat dari pada sebelumnya. Jadi, hal ini merupakan
                        dampak positif dari itu semua. 
                    </p> --}}
                </center>
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>
  <!-- /.content-wrapper -->
@endsection