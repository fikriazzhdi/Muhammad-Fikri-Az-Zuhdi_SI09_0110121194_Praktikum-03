<?php
  include_once '../layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					Belanja Online
				</h5>
				<div class="card-body">
                <div class="container-fluid">
	<div class="row mt-3">
		<div class="col-md-8">
        <form action="
        " method="post">
  <div class="form-group row">
    <label for="pelanggan" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="pelanggan" name="pelanggan" placeholder="Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8" name="produk">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="number" class="form-control" min= 0 max= 10>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
    </div>
  </div>
</form>

		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header bg-primary">
					Daftar Harga
				</h5>
				<div class="card-body">
					<p class="card-text">
						TV : Rp. 4.200.000
					</p>
				</div>
                <div class="card-body">
					<p class="card-text">
						Kulkas : Rp. 3.100.000
					</p>
				</div>
                <div class="card-body">
					<p class="card-text">
						Mesin Cuci : Rp. 3.500.000
					</p>
				</div>
				<div class="card-footer bg-primary">
                    Harga dapat berubah setiap saat
				</div>
			</div>
		</div>
	</div>
</div>
				</div>
				<div class="card-footer">
					Develop by @fikriganteng 2022
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">
					Struk Belanja
				</h5>
				<div class="card-body">
        <?php

$proses = $_POST['simpan'];
echo ' ' .$proses;
$nama = $_POST['pelanggan'];
echo '<br/>Nama Customer :' .$nama;
$produk = $_POST['produk'];
echo '<br/>Pilihan Produk :' .$produk;
$jumlah = $_POST['jumlah'];
echo '<br/>Jumlah Produk :' .$jumlah;

if ($produk == "Kulkas") {
  echo "<br/>Total Harga : Rp. " .$jumlah * 3100000;
} elseif ($produk == "TV") {
  echo "<br/>Total Harga : Rp. " .$jumlah * 4200000;
} else {
  echo "<br/>Total Harga : Rp. " .$jumlah * 3500000; 
}



?>    
				</div>
				<div class="card-footer">
                Develop by @fikriganteng 2022
				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>


</body>
</html>
<?php
 require_once '../layout/footer.php';
?>