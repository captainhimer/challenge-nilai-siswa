<head>
    <title>Form Nilai Siswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
<style>
body{
    background-color: cyan;
}
    div.card{
        margin-left: 275px;
        margin-top: 0px;
        border-radius: 20px;
    }
img{
    width: 100px;
}
input{
    width: 400px;
    border-radius: 5px;
    border-color: darkslategray;
}
option{
    border-radius: 5px;
}
button{
    width: 300px;
}
</style>
</head>
<body>
<div class="container">
<div class="card col-sm-6">
<div class="card-header bg-none text-black">
    <center>
    <font face = "DejaVu Sans Mono"><h2>Form Nilai</h2></font>
    </center>
</div>
<div class="card-body bg-none text-black">
<form action="proses.php" method="post">
    <div class="form group">
    <font face = "DejaVu Sans Mono"><h5>NIS</h5></font>
    <input type="text" name="nis" id="nis" placeholder="Masukan Nis" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Nama</h5></font>
    <input type="text" name="nama" id="nama" placeholder="Masukan Nama" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Kelas</h5></font>
    <select name="kelas" id="kelas">
        <option value="">Pilih Kelas</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select>
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Jurusan</h5></font>
    <select name="jurusan" id="jurusan">
        <option value="">Pilih Jurusan</option>
        <option value="RPL">R P L</option>
        <option value="TKJ">T K J</option>
    </select>
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Alamat</h5></font>
    <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Nilai WEB</h5></font>
    <input type="text" name="web" id="web" placeholder="Masukan Nilai" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Nilai PBO</h5></font>
    <input type="text" name="pbo" id="pbo" placeholder="Masukan Nilai" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Nilai Basdat</h5></font>
    <input type="text" name="basdat" id="basdat" placeholder="Masukan Nilai" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Nilai Desain</h5></font>
    <input type="text" name="desain" id="desain" placeholder="Masukan Nilai" autocomplete="off">
    </div>
    <div class="form-group">
    <font face = "DejaVu Sans Mono"><h5>Nilai Progdas</h5></font>
    <input type="text" name="progdas" id="progdas" placeholder="Masukan Nilai" autocomplete="off">
    </div>
</div>
<div class="card-footer bg-dark text-white">
    <div class="form-group">
    <center>
    <button class="btn btn-warning" type="submit" name="simpan">Simpan</button>
    <br>
    &copy;<h6>YOMRAN</h6>
    </center>
</div>
</div>
</form>
</div>
</div>
</body>
