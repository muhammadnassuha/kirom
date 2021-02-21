<div class="section">
	<div class="container">
		<form action="index.php?page=ProsessFundaiserVerification" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="card mb-3 mt-3" style="padding: 20px;">
							<h5 style="font-weight:bold; text-align:center;">KONFIRMASI DATA DIRI ANDA</h5>
							<p style=" text-align:center;">Mari bantu mempermudah pengecekan data kami dan memeriksa Data  anda sudah masuk atau belum kak!</p>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama"aria-label="Username" aria-describedby="basic-addon1" required=""placeholder="Masukan Nama Lengkap" oninvalid="this.setCustomValidity('Nama Lengkap Anda')" oninput="setCustomValidity('')" style="border-radius: 5px;">
							</div>

							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Tanggal Verifikasi</label>
								<input type="date" class="form-control" id="exampleInputEmail1" name="date" aria-describedby="emailHelp" placeholder="Masukan Tanggal Verifikasi">
							</div>

							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">No Identitas KTP</label>
								<input type="number" class="form-control" id="exampleInputEmail1" name="ktp" aria-label="Username" aria-describedby="basic-addon1" placeholder="Masukan No Identitas" oninvalid="this.setCustomValidity('Masukan No KTP')" oninput="setCustomValidity('')" style="border-radius: 5px;">
							</div>

							<div class="mb-3">
								<label for="formFile" class="form-label">Foto Bersama KTP</label>
								<input class="form-control" id="exampleInputEmail1" type="file" name="file" value="upload" id="formFile">
							</div>
							<button type="submit" class="btn btn-outline-primary" style="width: 100%; padding: 11px;  border-radius: 15px 15px  15px; font-size: 16px; text-align: center; font-weight:bold;">Kirim</button>
						</div>
					</div>
				</div>	
			</div>
		</form>
	</div>
</div>
