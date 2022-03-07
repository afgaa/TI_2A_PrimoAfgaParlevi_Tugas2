@extends('footer')

@section('link_rel')
        <link rel="stylesheet" href="css/css.css"></link>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
@endsection

@section('content')
<header>
            <div>
                <center>
                <h1><b>Masukkan Kesan, Pesan dan Saran</h1></b>
                </center>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li>
                            <h3>
                            <a href="/Profile">Biodata</a>
                            <a href="/Pendidikan">Riwayat Pendidikan</a>
                            <a href="/commen">Commen</a> 
                            </h3>
                        </li>
                    </ul>
                </nav>
            </div>
</header>
<div class="container mt-5">
                <div class="bg-light p-2">
                    <div ><a >Isi Disini</a><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                    <div class="mt-3 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="button">Kirim</button>
                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Hapus</button></div>
                </div>
</div>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br>
<br><br>
@endsection