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
                <a class="center"><h1><b>Bio Saya</b></h1></a>
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
        <br>
        <center> 
            <a><img src="img/12.jpeg" width="300" height="400"></a>
            <br><br>
            <div>
              <p>Primo Afga Parlevi<br>
                  2041720021<br>
                  Mahasiswa Semester 4 Berusia 20 Tahun<br>
                  D4 Teknik Informatika<br>
                  Teknologi Informasi<br>
                  Politeknik Negeri Malang<br>
                  Asal Malang</p>
          </div>
        </center>
@endsection