<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="asesoris/css/style.css">

<body>
<h3>POJOK INFORMASI</h3>
<a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Home</button></a>
<a href="<?php echo base_url('info_desa')?>" type="button" class="btn btn-Success">Informasi Desa</button></a>
<a href="<?php echo base_url('info_sehat')?>" type="button" class="btn btn-Success">Informasi Kesehatan</button></a>
<a href="<?php echo base_url('CekLogin/Logout')?>" type="button" class="btn btn-Success">Logout</button></a>
<br><br>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Padukuhan', 'Mhl'],
  ['Babadan',35],
  ['Pokoh',15],
  ['Gedongan',20],
  ['Krapyak',30]
]);

var options = {
  title:'Prosentase Jumlah Anak Penerima Bantuan'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>


</body>
</html>
