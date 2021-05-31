<html>
<header>
  <h1>Toko Pakaian JR</h1>
  <h2>Welcome Honey</h2>
  <h3>Masukkan Nama Anda<h3>
  <h3>Pilih Pakaian yang Anda Beli:</h3>
  <link rel="stylesheet" href="style.css">
</header>

<body>
    <form action="Akhirrr.php" method="POST">
        <label for="nama">Nama:</label>
        <input name="nama">
        </br></br>
        <p>Pilih Kaos :</p>
      <div class="container1">
        <div class="kblack">
            <input type="checkbox"name="kaos[]" value="Kaos Black">Kaos Black @Rp 45000<br>
            <input type="number" step="1" name="jkaos1"/><br><br><img src="gambar/kblack.jpg">
        </div>

        <div class="kwhite">
            <input type="checkbox"name="kaos[]" value="Kaos White">Kaos White @Rp 45000<br/>
            <input type="number" step="1" name="jkaos2"/><br><br><img src="gambar/kwhite.jpg"></br>
        </div>

        <div class="kgrey">
            <input type="checkbox"name="kaos[]" value="Kaos Grey">Kaos Grey @Rp 45000<br/>
            <input type="number" step="1" name="jkaos3"/><br><br><img src="gambar/kgrey.jpg"></br>
        </div>

        <div class="kbrown">
            <input type="checkbox"name="kaos[]"value="Kaos Brown">Kaos Brown @Rp 45000<br/>
            <input type="number" step="1" name="jkaos4"/><br><br><img src="gambar/kbrown.jpg"></br>
        </div>

        <div class="ksilver">
            <input type="checkbox"name="kaos[]"value="Kaos Silver">Kaos Silver @Rp 45000<br/>
            <input type="number" step="1" name="jkaos5"/><br><br><img src="gambar/ksilver.jpg"></br>
        </div>
      </div>

      <p>Pilih Celana :</p>

      <div class="container2">
        <div class="cblack">
            <input type="checkbox"name="celana[]"value="Celana Chino Black">Celana Chino Black @Rp 140000<br/>
            <input type="number" step="1" name="jcelana1"/><br><br><img src="gambar/cblack.jpg"></br>
        </div>

        <div class="ccream">
            <input type="checkbox"name="celana[]"value="Celana Chino Cream">Celana Chino Cream @Rp 140000<br/>
            <input type="number" step="1" name="jcelana2"/><br><br><img src="gambar/ccream.jpg"></br>
        </div>

        <div class="cgrey">
            <input type="checkbox"name="celana[]"value="Celana Chino Grey">Celana Chino Grey @Rp 140000<br/>
            <input type="number" step="1" name="jcelana3"/><br><br><img src="gambar/cgrey.jpg"></br>
        </div>

        <div class="cbrown">
            <input type="checkbox"name="celana[]"value="Celana Chino Brown">Celana Chino Brown @Rp 140000<br/>
            <input type="number" step="1" name="jcelana4"/><br><br><img src="gambar/cbrown.jpg"></br>
        </div>

        <div class="cnavy">
            <input type="checkbox"name="celana[]"value="Celana Chino Navy">Celana Chino Navy @Rp 140000<br/>
            <input type="number" step="1" name="jcelana5"/><br><br><img src="gambar/cnavy.jpg"></br>
        </div>
      </div>

        <div>
            <input type="submit" value="Submit" style="color:red"/>
            <input type="submit" value="Clear" style="color:red"/>
        </div>
    </form>
</body>
</html>