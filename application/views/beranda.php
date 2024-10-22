<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Beranda</title>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #808000;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style  buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #BDB76B;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #556B2F;
  color: black;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

</style>
</head>
<body>
<div class="main">
<h4>APLIKASI PENDATAAN ANAK DESA WEDOMARTANI</h4>
<?php echo $this->session->flashdata('pesan');?>

<?php
	foreach ($menu as $m){
		?>
	<a href="<?php echo $m->link; ?>" type="button" class="btn btn-Success"><?php echo $m->menu; ?></a>
	<?php
	}
	?>

<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="asesoris/img/anak 4.jpg" alt="Mountains" style="width:100%">
      <h4>Kesehatan Anak</h4>
      <p>Imunisasi Dukuh Pokoh</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/anak 5.jpg" alt="Lights" style="width:100%">
      <h4>Belajar Anak</h4>
      <p>Belajar Bersama Anak Wedomartani</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/anak 6.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>
  
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/masy1.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/desa 2.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/dukuh.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>

  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/anak 6.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/anak 6.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/masy1.jpg" alt="Nature" style="width:100%;">
      <h4>Kegiatan Desa</h4>
      <p>Kegiatan Desa Wedomartani</p>
    </div>
  </div>
  
  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

  
</body>
</html>
