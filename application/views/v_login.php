<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('asesoris/img/anak_login.png');
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 85%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background-color: #BDB76B;
}


/* Set a style for the submit button */
.btn {
  background-color: #808000;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}


/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 350px;
  padding: 16px;
  background-color: transparent;
}

</style>
</head>
<body>

<div class="bg-img">
    <div class="container">
	<form action="<?php echo base_url('Ceklogin')?>" method="POST">
	<h3><center><font color="#FFEBCD">SILAHKAN LOGIN</font></center></h3>
	<?php echo $this->session->flashdata('pesan');?>
	<div class="form-group">
	<input type="text" name="username" class="form-control" placeholder="Isikan Username">
	</div>

	<div class="form-group">
	<input type="password" name="password" class="form-control" placeholder="Isikan Password">
	</div>

	<div class="form-group">
	<input type="submit" name="logs" value="Login" class="btn btn-primary btn-block">
	</div>
	</form>
	</div>
</div>
</body>
</html>