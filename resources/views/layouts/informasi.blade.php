<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title></title>


	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/logotekmira2.png" width="75px" height="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="" style="text-shadow: #e3f2fd;"><h2>Puslitbang tekMIRA</h2><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index"><h6>Home</h6></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/informasi"><h6>Informasi</h6><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Penyewaan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Gedung</a>
          <a class="dropdown-item" href="#">Wisma</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Laporan</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><h6>"Selamat Datang di Website Penyewaan Gedung dan Wisma"</h6></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</head>
<body>
	@yield('content')

<!-- Gambar -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/gedung1.png" width="50px" height="500px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/gedung2.png" width="50px" height="500px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/gedung3.png" width="50px" height="500px" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Penjelasan Ketentuan -->
	<div class="card">
  <div class="card-body">
  	<center>
    <h1 class="text-warning">KETENTUAN</h1>
    <h1>PENGGUNAAN DAN PEMANFAATAN GEDUNG SM. SAIR</h1>
    <h1>PUSLITBANG TEKNOLOGI MINERAL DAN BATUBARA</h1>
    </center>
  </div>
	</div>

<p>
  <a class="btn btn-warning" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Klik penjelasan ke 1</a>
  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Klik penjelasan ke 2</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Klik Penjelasan Ke 2 nya</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Berdasarkan Keputusan Kepala Badan Layanan Umum Puslitbang Teknologi Mineral dan Batubara Nomor 192 K/73/BLT/2019 tanggal 26 Maret 2019. tentang Tarif Layanan dan Tata Cara Pengenaan, Pemungutan, dan Penyetoran Penerimaan Negara Bukan Pajak Yang Berlaku Pada Badan Layanan Umum Pusat Penelitian dan Pengembangan Teknologi Mineral dan Batubara,
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Kementrian Energi dan Sumber Daya Mineral, dengan ini ditetapkan beberapa ketentuan dalam penggunaan/pemanfaatan Gedung SM. Sair Puslitbang Teknologi Mineral dan Batubara (Puslitbang tekMIRA) yang dipinjam sewa oleh karyawan dan umum untuk resepsi pernikahan, sebagai berikut :
      </div>
    </div>
  </div>
</div>

<!-- FAsilitas -->
	<h3>FASILITAS DAN TARIF STANDAR GEDUNG SM. SAIR</h3>
	<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Fasilitas</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Luas Ruangan</td>
      <td>20m x 30m</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Podium Pelaminan</td>
      <td>12.4m x 5.9m</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ruang ganti/rias</td>
      <td>2 Ruangan</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Lobby</td>
      <td>15m x 20m</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>AC Cassete 15 PK</td>
      <td>2 Unit</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Kapasitas Listrik</td>
      <td>16 Kw (16000 Watt) dan Backup Genset</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Kursi</td>
      <td>50 Buah</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Tarif</td>
      <td>Rp. 13.000.000,- (Sudah termasuk biaya kebersihan)</td>
      <td>Paket</td>
    </tr>
    
  </tbody>
</table>

<h3>TARIF FASILITAS TAMBAHAN</h3>
	<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Fasilitas</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kursi</td>
      <td>RP 10.000,-/buah</td>
      <td>Tersedia</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>AC Standing 5 PK</td>
      <td>Rp. 850.000,-/unit</td>
      <td>Tersedia</td>
    </tr>
   
  </tbody>

  jumlh kmr,
  fasiltas,
  lt 1 brpa kmr
  lt 2 brpa kmr
  kmr mndi (wisma 1) 1 berddua
  				  3 & 4, 1 kamar 1
  itungn jam masuk & keluar (cek in & cekout)

  output nya Excel

</table>

<center><h1>
<div class="shadow-sm p-3 mb-5 bg-white rounded">KETENTUAN</div>
</h1></center>
<!-- Modal untuk ketentuan -->
<!-- Button trigger modal -->
<center>
<tbody>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Ketentuan 1
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ketentuan 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Gedung SM. Sair hanya diperbolehkan dipinjam sewa untuk resepsi pernikahan pada hari Sabtu atau Minggu.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</tbody>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
  Ketentuan 2
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ketentuan 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Setiap karyawan/umum yang akan memanfaatkan Gedung SM. Sair harus memesan terlebih dahulu melalui PUSAT PELAYANAN BLU tekMIRA dengan membayar minimal 25% dari tarif sewa gedung.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
  Ketentuan 3
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ketentuan 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Pelunasan sewa Gedung dan fasilitas tambahan lainnya dibayarkan paling lambat 3 (tiga) bulan sebelum pelaksanaan resepsi pernikahan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Ketentuan 4
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Ketentuan 4</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Pembayaran sewa Gedung dan fasilitas dan tambahan lainnya disetor melalui Bendahara Penerima BLU tekMIRA atau ditransfer melalui:
        <table class="table table-hover table-blue">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="table-success">1</th>
      <td class="table-success">Nomor Rekening</td>
      <td class="table-success">: 0668093156</td>
    </tr>
   </tbody>
   <tbody>
    <tr>
      <th scope="row" class="table-active">2</th>
      <td class="table-active">Nama Rekening</td>
      <td class="table-active">: RPL 022 BLU TEKMIRA 412596 UTK OPS</td>
    </tr>
   </tbody>
   <tbody>
    <tr>
      <th scope="row" class="table-success">3</th>
      <td class="table-success">Nama Bank</td>
      <td class="table-success">: PT. BNI (Persero) KCP Jalan Jenderal Sudirman No. 331, Bandung</td>
    </tr>
   </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>

<!-- Copyright -->
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Website Penyewaan Gedung dan Wisma</h4>
  <p>Hubungi Pusat Pelayanan :</p>
  <hr>
  <p class="mb-0">Telp. : 022-6030483 Ext. 133</p>
  <p class="mb-0">Hp.	: +62 81222278623</p>
  <a href="https://wa.me/6281222278623?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Order via WhatsApp</a>
</div>
<div class="alert alert-info" role="alert">
  <p>&copy; 2020 Penyewaangedung&wismatekMIRA.com<p>
</div>

</body>
</html>

