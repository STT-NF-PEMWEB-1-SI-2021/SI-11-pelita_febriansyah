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
              <?php
class persegipanjang {
    private $panjang;
    private $lebar;
    function __construct ($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
    function getLuas() {
        return $this->panjang * $this->lebar;
    }
}
echo "Menghitung Luas dan keliling persegi panjang";
$satu = new persegiPanjang(4,5);
    $dua = new persegiPanjang(3,2);
    echo "<br/>";
    
    echo "<br>Luas persegi panjang 1 = " .$satu->getLuas();
    echo "<br>Luas persegi panjang 2 = " .$dua->getLuas();
    echo "<br/>";
    
    echo "<br>Keliling persegi panjang 1 = " .$satu->getKeliling();
    echo "<br>Keliling persegi panjang 2 = " .$dua->getKeliling();
?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
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