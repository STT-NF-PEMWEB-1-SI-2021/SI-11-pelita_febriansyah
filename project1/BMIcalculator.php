

<form method="POST">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="form-group row">
    <label for="tanggal" class="col-3 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukkan tanggal periksa" type="text" class="form-control" aria-describedby="tanggal"> 
      <span id="tanggal" class="form-text text-muted">yyyy-mm-dd</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-3 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" placeholder="Masukkan Kode anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-3 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan nama anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-3 col-form-label">Gender</label> 
    <div class="col-8">
      <select id="gender" name="gender" class="custom-select">
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-3 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat" placeholder="Masukkan berat badan anda" type="text" class="form-control" aria-describedby="berat"> 
      <span id="berat" class="form-text text-muted">Kg</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-3 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi anda" type="text" class="form-control" aria-describedby="tinggi"> 
      <span id="tinggi" class="form-text text-muted">Cm</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2022-03-03</td>
            <td>C091</td>
            <td>Anugerah</td>
            <td>L</td>
            <td>75</td>
            <td>171</td>
            <td>26.7</td>
            <td>Kelebihan berat badan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2022-03-03</td>
            <td>C043</td>
            <td>Dhifa</td>
            <td>P</td>
            <td>60</td>
            <td>170</td>
            <td>20.3</td>
            <td>Normal(Ideal)</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2022-02-02</td>
            <td>C023</td>
            <td>Gusti</td>
            <td>L</td>
            <td>65,5</td>
            <td>180</td>
            <td>16.4</td>
            <td>Kekurangan berat badan</td>
        </tr>
       
    </tbody>
</table>
              </div></div>
              <?php
              require_once 'BMIPasien.php'
              ?>
  