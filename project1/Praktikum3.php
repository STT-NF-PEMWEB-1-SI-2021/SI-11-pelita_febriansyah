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
  <title>Form Nilai</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="text-align: center;">Form Nilai</h2>
<form method="POST" action="nilai_siswa.php">
      <div class="container">
      <div class="fix-widht">
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-4">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Statistika">Statistika</option>
        <option value="Basis Data">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-4">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-4">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas</label> 
    <div class="col-4">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</form>
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