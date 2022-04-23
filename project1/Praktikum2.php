<?php
 include_once 'header.php';
 include_once 'sidebar.php';
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
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
<body >
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
    <div class="container">
    <div class="offset-0 col-8">
    <h2 style="text-align: left;">Belanja Online</h2>
    </div>
    <hr>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="pilih produk_0" type="radio" class="custom-control-input" value="AC"> 
        <label for="pilih produk_0" class="custom-control-label">AC</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="pilih produk_1" type="radio" class="custom-control-input" value="TV"> 
        <label for="pilih produk_1" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="pilih produk_2" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="pilih produk_2" class="custom-control-label">Kulkas</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-0 col-8">
    <button name="proses" type="submit" value="hitung" class="btn btn-primary">Kirim</button>
    </div>
  </div>
  </div>
</form>
		</div>
		<div class="offset-2">
			<table class="table">
				<thead>
						<th>
							Daftar Harga
						</th>
					<tr>
						<td>
							AC : Rp 2.200.000
						</td>
					</tr>
					<tr class="table">
					<tr>
						<td>
							TV : Rp 3.500.000
						</td>
					</tr>
					<tr class="table">
          <tr>
						<td>
							Kulkas : Rp 4.300.000
						</td>
					</tr>
          <table class="table">
					  <tr>
						<th>
							Harga Dapat Berubah Setiap Saat
						</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
<hr>
<div class="offset-0 col-3">
<?php
$proses = $_POST['proses'];
$nama_customer = $_POST['customer'];
$pilih_produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($pilih_produk == 'AC'){
  $harga_total = 2200000;
}
elseif($pilih_produk == 'TV'){
  $harga_total = 3500000;
}
elseif($pilih_produk == 'Kulkas'){
  $harga_total = 4300000;
}
if($pilih_produk == 'AC'){
  $pilihan_produk = 'AC';
}
elseif($pilih_produk == 'TV'){
  $pilihan_produk = 'televisi';
}
elseif($pilih_produk == 'Kulkas'){
  $pilihan_produk = 'kulkas';
}

$harga = $harga_total * $jumlah;
if(!empty($proses)){
  echo "Nama Customer : $nama_customer";
  echo "<br/>Produk Pilihan : $pilih_produk";
  echo "<br/>Jumlah Beli : $jumlah";
  echo "<br/>Total Belanja : $harga";
}
?>
</div>
</body>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>