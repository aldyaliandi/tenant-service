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
      <li class="nav-item active">
        <a class="nav-link" href="/index"><h6>Home</h6><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/informasi"><h6>Informasi</h6></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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


 <!-- Gedung -->
	<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Kursi',     11],
          ['Meja',      2],
          ['WO',  2],
          ['Piring', 2],
          ['Gelas',    7]
        ]);

        var options = {
          title: 'Data Brang Penyewaan Gedung',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>

<!-- Wisma -->
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Internal', 'External', 'Ekonomi', 'VIP', 'VVIP', 'Average'],
          ['2016/05',  165,      938,         522,             998,           450,      614.6],
          ['2017/06',  135,      1120,        599,             1268,          288,      682],
          ['2018/07',  157,      1167,        587,             807,           397,      623],
          ['2019/08',  139,      1110,        615,             968,           215,      609.4],
          ['2020/09',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          title : 'Data Penyewaan Wisma',
          vAxis: {title: 'Total'},
          hAxis: {title: 'Bulan'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>

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