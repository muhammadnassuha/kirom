<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-3 mt-3 ">
				<div class="img-responsive">
					<div class="card">
						<img src="assets/images/image.png" style="height: 718px;"></div>
					</div>
				</div>
				<div class="col-md-6 mb-3 mt-3">	
				<div class="card" style="margin-left: -30px">
					<h1 class="mt-3" style="font-weight: bold; text-align: center;">Ayo Berdonasi</h1>
					<h5 style=" text-align: center;">Mari Bantu Mereka Yang Membutuhkan Dana Bantuan</h5>
				
					<div class="container mb-3">
						<form method="post" action="index.php?page=ProsessFundaiser" enctype="multipart/form-data">
							<label style="font-weight: bold;">Target</label>
							<input type="text"  name="target" id="target" class="form-control" placeholder="Jumlah Nominal" aria-label="Username" aria-describedby="basic-addon1" required="" oninvalid="this.setCustomValidity('Masukkan Donasi Anda')" oninput="setCustomValidity('')" style="border-radius: 5px;">
							<label class="form-label" style="font-weight: bold; ">Pilih Waktu</label>
							<select class="form-control" aria-label="Default select example" name="waktu">
								<option selected>Open this select menu</option>
								<option value="30">30 hari</option>
								<option value="60">60 hari</option>
								<option value="90">90 hari</option>
							</select>

							<label class="form-label" style="font-weight: bold; ">Judul Kampanye</label>
							<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border-radius: 5px; " placeholder="Masukan Nama Anda" oninvalid="this.setCustomValidity('Masukkan Donasi Anda')" oninput="setCustomValidity('')">

							<label class="form-label" style="font-weight: bold; ">Nama</label>
							<input type="text" name="judul" class="form-control" style="border-radius: 5px; " placeholder="Masukan Nama Anda" oninvalid="this.setCustomValidity('Masukkan Donasi Anda')" oninput="setCustomValidity('')">

							<label class="form-label" style="font-weight: bold;">Alamat</label>
							<textarea class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap Anda" id="floatingTextarea2" oninvalid="this.setCustomValidity('Masukkan Donasi Anda')" oninput="setCustomValidity('')" style="height: 100px border-radius: 5px;"></textarea>

							<label class="form-label" style="font-weight: bold;">Cerita</label>
							<textarea class="form-control" name="cerita" placeholder="Cerita" id="floatingTextarea2" style="height: 100px border-radius: 5px;"></textarea>
							<label for="formFile" class="form-label">Foto Kampanye</label>

							<input class="form-control" type="file" name="file" value="upload" id="formFileMultiple" accept="image/*" multiple required="" oninvalid="this.setCustomValidity('Upload Foto Resi Kak')" oninput="setCustomValidity('')">
							<button type="submit" class="btn btn-primary mt-3">Submit</button>

						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>		
      // rupiah
      var rupiah = document.getElementById('target');
      rupiah.addEventListener('keyup', function (e) {
          // tambahkan 'Rp.' pada saat form di ketik
          // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
          rupiah.value = formatRupiah(this.value, 'Rp. ');
      });
      /* Fungsi formatRupiah */
      function formatRupiah(angka, prefix) {
      	var number_string = angka.replace(/[^,\d]/g, '').toString(),
      	split = number_string.split(','),
      	sisa = split[0].length % 3,
      	rupiah = split[0].substr(0, sisa),
      	ribuan = split[0].substr(sisa).match(/\d{3}/gi);
          // tambahkan titik jika yang di input sudah menjadi angka ribuan
          if (ribuan) {
          	separator = sisa ? '.' : '';
          	rupiah += separator + ribuan.join('.');
          }
          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
      }
  </script>