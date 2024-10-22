<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Beranda</title>
  <link rel="stylesheet" href="asesoris/css/style.css">

</head>
<body>
<div class="main">
<h3>INFORMASI WEBSITE KESEHATAN</h3>
<a href="<?php echo base_url('informasi')?>" type="button" class="btn btn-Success">Home</button></a>
<a href="https://covid19.go.id/" type="button" class="btn btn-Success">SEPUTAR COVID19</button></a>
<a href="https://www.unicef.org/" type="button" class="btn btn-Success">UNICEF</button></a>
<a href="https://www.biofarma.co.id/" type="button" class="btn btn-Success">IMUNISASI ANAK</button></a>
<a href="<?php echo base_url('CekLogin/Logout')?>" type="button" class="btn btn-danger">Logout</button></a>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="asesoris/img/covid_2.jpeg" alt="avatar" class="avatar" style="width:100%">
      <p><a href="https://covid19.go.id/">COVID-19</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="asesoris/img/imun1.png" alt="avatar" class="avatar" style="width:100%">
      <p><a href="https://www.biofarma.co.id/">IMUNISASI ANAK</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="asesoris/img/covid.jpg" alt="avatar" class="avatar" style="width:100%">
      <p><a href="https://www.unicef.org/">UNICEF</p>
    </div>
  </div>
</div>
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
