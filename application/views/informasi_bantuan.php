<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</style>
</head>
<body>

<div class="main">

<h3>APLIKASI PENDATAAN ANAK DESA WEDOMARTANI</h3>
<hr>


<div id="myBtnContainer">
  <a href="<?php echo base_url('beranda')?>"><button class="btn btn-Success"> HOME</button></a>
  <button class="btn" onclick="filterSelection('nature')"> Info Desa</button>
  <button class="btn" onclick="filterSelection('cars')"> Info Data Anak</button>
  <button class="btn" onclick="filterSelection('people')"> Info Bantuan</button>
</div>


<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="asesoris/img/desa2.jpg" alt="Mountains" style="width:100%">
      <h4>Desa 1</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/desa2.jpg" alt="Lights" style="width:100%">
      <h4>Desa 2</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="asesoris/img/desa2.jpg" alt="Nature" style="width:100%">
      <h4>Desa 3</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="asesoris/img/anak.jpg" alt="Car" style="width:200px">
      <h4>Anak 1</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="asesoris/img/anak 2.jpg" alt="Car" style="width:147px">
      <h4>Anak 2</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="asesoris/img/anak 3.jpg" alt="Car" style="width:145px">
      <h4>Anak 3</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="asesoris/img/bantuan 1.jpg" alt="Car" style="width:300px">
      <h4>Bantuan 1</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="asesoris/img/bantuan 2.jpg" alt="Car" style="width:145px">
      <h4>Bantuan 2</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="asesoris/img/bantuan 3.jpg" alt="Car" style="width:145px">
      <h4>Bantuan 3</h4>
      <p>Lorem ipsum dolor..</p>
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
