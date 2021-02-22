<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<form method="POST" action="pages/ConfirmFundaiser/prosess_donation.php">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-5  " style=" width: 100%; padding: 50px;">
					<h1 style="text-align: center; font-weight: bold;">Ayo berdonasi </h1>
					<label>Nama :*</label>
					<input type="text" name="nama" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
					<label>No Hp :*</label>
					<input type="text" name="wa" id="telp_number" class="form-control" placeholder="Nomor HP" maxlength="13" required="">
					<label>Nominal*</label>
					<input type="text" name="jumlah" id="rupiah" class="form-control" placeholder="Jumlah Nominal" aria-label="Username" aria-describedby="basic-addon1" required="">
					<label>Keterangan</label>
					<textarea class="form-control" name="keterangan" aria-label="With textarea"></textarea>
				</div>
			</div>
			<div class="container">
<!--bank-->
				<div class="accordion" id="accordionExample">
					<div class="card mt-2" style="width: 100%;">
						<div class="card-header mt-1" id="headingOne">
							<label for="bri-bank">
								<div class="row">
									<div class="col-3">
										<div class="radio-bri">
											<input type="radio" name="radios" id="radio-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" value="bri" class="mr-2" id="bri-bank" style="margin-top: 40px">
										</div>
										<img src="assets/images/bri.jpg" style="width: 4em; margin-left: 25px; margin-top: -50px">
									</div>

									<div class="col-9">
										<p class="nama-bank" style="margin-left: 33px; font-size: 14px"><b>0523 0100 0198 302</b><br>
											<span>a/n : Yayasan Alkirom Amanah</span>
											<br> Cabang : Cinere</p>
										</div>
									</div>
								</label>
							</div>
							<div class="card-body" id="bri">
								<input type="hidden" name="norek2" value="8001 6831 2900">
								<input type="submit"  class="btn btn-donasi" data-toggle="modal" name="transfer2" style="width: 100%;" value="DONASI">
							</div>
						</div>
					</div>
					<div class="card mt-2" style="width: 100%;">
						<div class="card-header mt-1" id="headingOne">
							<label for="bni-bank">
								<div class="row">
									<div class="col-3">
										<div class="radio-bri">
											<input type="radio" name="radios" id="radio-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" value="cimb" class="mr-2" id="bni-bank" style="margin-top: 40px">
										</div>
										<img src="assets/images/bni.jpg" style="width: 4em; margin-left: 25px; margin-top: -50px">
									</div>

									<div class="col-9">
										<p class="nama-bank" style="margin-left: 33px; font-size: 14px"><b>0523 0100 0198 302</b><br>
											<span>a/n : Yayasan Alkirom Amanah</span>
											<br> Cabang : Cinere</p>
										</div>
									</div>
								</label>
							</div>
								<div class="card-body" id="bni">
									<input type="hidden" name="norek2" value="8001 6831 2900">
									<input type="submit" class="btn btn-donasi" name="transfer2" style="width: 100%;" value="DONASI"></div>
								</div>
								<div class="card mt-2 mb-4" style="width: 100%;">
						<div class="card-header mt-1" id="headingOne">
							<label for="cimb-bank">
											<div class="row">
												<div class="col-3">
													<div class="radio-bri">
														<input type="radio" name="radios" id="radio-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" value="cimb" class="mr-2" id="bri-bank" style="margin-top: 40px">
													</div>
													<img src="assets/images/cimb.jpg" style="width: 4em; margin-left: 25px; margin-top: -50px">
												</div>

												<div class="col-9">
													<p class="nama-bank" style="margin-left: 33px; font-size: 14px"><b>0523 0100 0198 302</b><br>
														<span>a/n : Yayasan Alkirom Amanah</span>
														<br> Cabang : Cinere</p>
													</div>
												</div>
											</label>
										</div>
									</div>
									<div class="card-body" id="cimb">
										<input type="hidden" name="norek2" value="8001 6831 2900">
										<input type="submit" class="btn btn-donasi" name="transfer2" style="width: 100%;" value="DONASI"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<script>
					$("#bri").css("display", "none");
					$("#bni").css("display", "none");
					$("#cimb").css("display", "none");
					$(document).on("change", "#radio-btn", function() {
						var value = $(this).val();
						if (value == "bri") {
							$("#bri").css("display", "block");
							$("#bni").css("display", "none");
							$("#cimb").css("display", "none");
						} else if (value == "bni") {
							$("#bni").css("display", "block");
							$("#bri").css("display", "none");
							$("#cimb").css("display", "none");
						} else if (value == "cimb") {
							$("#cimb").css("display", "block");
							$("#bri").css("display", "none");
							$("#bni").css("display", "none");
						} else {
							$("#bri").css("display", "none");
							$("#bni").css("display", "none");
							$("#cimb").css("display", "none");
						}
					});
	  // rupiah
	  var rupiah = document.getElementById('rupiah');
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

  <script type="text/javascript">
  	function setInputFilter(textbox, inputFilter) {
	  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
	    textbox.addEventListener(event, function() {
	      if (inputFilter(this.value)) {
	        this.oldValue = this.value;
	        this.oldSelectionStart = this.selectionStart;
	        this.oldSelectionEnd = this.selectionEnd;
	      } else if (this.hasOwnProperty("oldValue")) {
	        this.value = this.oldValue;
	        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
	      } else {
	        this.value = "";
	      }
	    });
	  });
	}

  	setInputFilter(document.getElementById("telp_number"), function(value) {
	  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
	});
  </script>






