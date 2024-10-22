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
<h4>DATA SEKOLAH ANAK DESA WEDOMARTANI</h4>

<a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Home</button></a>
<a href="<?php echo base_url('sekolah/create')?>" type="button" class="btn btn-Success  ">Data Sekolah</button></a>
<a href="<?php echo base_url('CekLogin/Logout')?>" type="button" class="btn btn-Success">Logout</button></a>

  
</body>
</html>
