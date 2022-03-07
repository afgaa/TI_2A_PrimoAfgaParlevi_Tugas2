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
                <h1><b>Riwayat Pendidikan</h1></b>
                <h2>Primo Afga Parlevi</h2>
                <p>Selama 20 tahun</p>
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
    <br>
    <center>
    <h1 align="center">Riwayat Pendidikan</h1>
    <br>
    <table border="1" cellspacing="0" cellpadding="5" align="center" width="800">
        <tr align="center" bgcolor=#a9a9a9>
            <td width="50">No</td>
            <td width="300">Tahun</td>
            <td width="300">Tempat Belajar</td>
        </tr>
            <tr>
                <th>1.</th><th>2006-2008</th><th>TK PGRI 02 Tirtoyudho</th>
            </tr>
            <tr>
                <th>2.</th><th>2008-2014</th><th>SDN 01 Sumbertangkil</th>
            </tr>
            <tr>
                <th>3.</th><th>2014-2017</th><th>SMP PGRI 04 Tirtoyudho</th>
            </tr>
            <tr>
                <th>4.</th><th>2017-2020</th><th>SMKN4 Malang</th>
            </tr>
            <tr>
                <th>5.</th><th>2020-Sekarang</th><th>Politeknik Negeri Malang</th>
            </tr>
    </table>
    <br><br><br><br><br>
    <br><br><br><br> 
@endsection