<?php
  include_once '../layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					Sistem Penilaian
				</h5>
				<div class="card-body">
        <form action="
        " method="post">
  <div class="form-group row mt-5">
    <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Matematika Komputer">Matematika Komputer</option>
        <option value="Sistem Operasi">Sistem Operasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="Nilai Tugas / Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="submit" type="submit" class="btn btn-primary">
    </div>
  </div>
</form>
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
					Laporan Penilaian
				</h5>
				<div class="card-body">
                <?php
    $proses = $_POST['submit'];
      echo ' ' .$proses;
    $siswa = $_POST['nama'];
      echo '<br/>Nama : ' .$siswa;
    $matkul = $_POST['matkul'];
      echo '<br/>Mata Kuliah : ' .$matkul;
    $uts = $_POST['uts'];
     if ($uts >= 0 and $uts <= 35) {
       echo "<br/>Nilai UTS : $uts <br/>";
       echo "Grade : E <br/>";
     } elseif ($uts >= 36 and $uts <= 55) {
       echo "<br/>Nilai UTS : $uts <br/>";
       echo "Grade : D <br/>";
     } elseif ($uts >= 56 and $uts <= 69) {
      echo "<br/>Nilai UTS : $uts <br/>";
      echo "Grade : C <br/>";
     } elseif ($uts >= 70 and $uts <= 84) {
      echo "<br/>Nilai UTS : $uts <br/>";
      echo "Grade : B <br/>";
     } elseif ($uts >= 85 and $uts <= 100) {
      echo "<br/>Nilai UTS : $uts <br/>";
      echo "Grade : A <br/>";
     } else {
        echo "<br/>Nilai UTS : $uts <br/>";
        echo "Grade : I <br/>";
     }
    $uas = $_POST['uas'];
    if ($uas >= 0 and $uas <= 35) {
      echo "<br/>Nilai UAS : $uas <br/>";
      echo "Grade : E <br/>";
    } elseif ($uas >= 36 and $uas <= 55) {
      echo "<br/>Nilai UAS : $uas <br/>";
      echo "Grade : D <br/>";
    } elseif ($uas >= 56 and $uas <= 69) {
     echo "<br/>Nilai UAS : $uas <br/>";
     echo "Grade : C <br/>";
    } elseif ($uas >= 70 and $uas <= 84) {
     echo "<br/>Nilai UAS : $uas <br/>";
     echo "Grade : B <br/>";
    } elseif ($uas >= 85 and $uas <= 100) {
     echo "<br/>Nilai UAS : $uas <br/>";
     echo "Grade : A <br/>";
    } else {
       echo "<br/>Nilai UAS : $uas <br/>";
       echo "Grade : I <br/>";
    }
    $tugas = $_POST['tugas'];
    if ($tugas >= 0 and $tugas <= 35) {
      echo "<br/>Nilai Tugas / Praktikum : $tugas <br/>";
      echo "Grade : E <br/>";
    } elseif ($tugas >= 36 and $tugas <= 55) {
      echo "<br/>Nilai Tugas / Praktikum : $tugas <br/>";
      echo "Grade : D <br/>";
    } elseif ($tugas >= 56 and $tugas <= 69) {
     echo "<br/>Nilai Tugas / Praktikum : $tugas <br/>";
     echo "Grade : C <br/>";
    } elseif ($tugas >= 70 and $tugas <= 84) {
     echo "<br/>Nilai Tugas / Praktikum : $tugas <br/>";
     echo "Grade : B <br/>";
    } elseif ($tugas >= 85 and $tugas <= 100) {
     echo "<br/>Nilai Tugas / Praktikum : $tugas <br/>";
     echo "Grade : A <br/>";
    } else {
       echo "<br/>Nilai Tugas / Praktikum : $tugas <br/>";
       echo "Grade : I <br/>";
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