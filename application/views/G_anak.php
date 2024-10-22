<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style>
    body {
  background-color: #BDB76B;
  padding: 20px;
  font-family: Arial;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #808000;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #B8860B;
  color: black;
}
</style>
<body>
<a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Home</button></a>
<a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Informasi Bantuan</button></a>
<a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Informasi Umum</button></a>
<a href="<?php echo base_url('CekLogin/Logout')?>" type="button" class="btn btn-Success">Logout</button></a>
<br><br>
 <h4>GRAFIK DATA ANAK BEDASARKAN USIA</h4>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Usia 16-20", "Usia 11-15", "Usia 10-14", "Usia Balita"];
var yValues = [40, 60, 33, 45];
var barColors = ["red", "green","blue","orange"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Data Anak Desa Wedomartani 2021"
    }
  }
});
</script>

</body>
</html>
