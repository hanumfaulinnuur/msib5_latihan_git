<?php
$namaLengkap        = 'Hanum Faulinnuur';
$namaPanggil        = 'Hanum';
$perguruanTinggi    = 'Politeknik Negeri Banyuwangi';
$jurusan            = 'Bisnis dan Informatika';
$prodi              = 'Teknologi Rekayasa Perangkat Lunak';
$semester           = '5 (lima)';
$hobi               = 'mengambar asal';

?>



<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Biodata Diri</title>
</head>

<style>
    body {
        font-family:'Times New Roman', Times, serif;
        background-color: #D9EEE1; 
    }

    .container {
        margin-top : 50px;
        padding : 40px
    }

    i {
        font-size: 19px;
    }

    td{
        padding-right: 30px;
        padding-bottom: 10px;
    }
</style>

<body>
    <div class="container text-center  border shadow  mb-5 bg-body-tertiary rounded">
        <h1>BIODATA DIRI</h1><hr>
        <div class="row">
            <div class="col-4">
            <img src="asset/123.JPG" class="img-thumbnail" alt="..." style="width: 20rem;">
            </div>
            <div class="col-8">
                <table style="font-size: 22px; ">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $namaLengkap ?></td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>:</td>
                    <td><?php echo $namaPanggil ?></td>
                </tr>
                <tr>
                    <td>Asal Perguruan Tinggi</td>
                    <td>:</td>
                    <td><?php echo $perguruanTinggi ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?php echo $jurusan ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?php echo $prodi ?></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td><?php echo $semester ?></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><?php echo $hobi ?></td>
                </tr>
                </table>
                
                <center><br><br>
                <i>Ketika muda kita habisi dengan bermalas-malasan maka tua juga akan malas-malasan lalu tak terasa besok mati, namun kalau kita banyak belajar dan banyak analisis maka saat dia tua dia menang</i><br><br>
                <i>-- Prof. Dr. Ir. H. Bacharuddin Jusuf Habibie --</i>
                </center>
            </div>
            

        </div>
    </div>
</body>
</html>