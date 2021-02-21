<div class="section">
  <div class="container">
    <div class="row">
    <?php
       include "config/connection.php";
        $name = base64_decode($_GET['id']);
        
        $sql = "SELECT * FROM bank where id='$name'";

        if ($result = $conn -> query($sql)) {
          while ($row = $result -> fetch_row()) {
        ?>
      <div class="col-12 mt-4 mb-4" style="background-color: transparent;">
        <div class="container mt-4"  class="shadow-sm mt-4" style="">

          <div class="konfirmasi shadow-sm" style="background-color: white; padding: 30px; border-radius: 10px;">
            <h5 class="konfirmasi-donasi" style="font-weight:bold; text-align:center;">KONFIRMASI DONASI ANDA</h5>
            <p style="margin:0; text-align:center;">Mari bantu mempermudah pengecekan data kami dan memeriksa uangnya sudah masuk atau belum kak!</p>

            <form method="post" action="index.php?page=ProsessConfrimation" enctype="multipart/form-data" name="redirect" onsubmit="return validasi_input(this)" >
              <div class="form-konfimasi" style="padding:40px;">
                <input class="form-control form-control-md" type="text" name="nama" placeholder="Nama" aria-label=".form-control-md example" style="margin-bottom:15px;"  require="" value="<?php echo $row[1] ?>">  

                <div class="input-group mb-3" style="margin-bottom:15px;">
                  <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                  <input type="text" name="rupiah" id="rupiah" class="form-control" placeholder="Jumlah Nominal" aria-label="Username" aria-describedby="basic-addon1" required="" value="<?php echo number_format($row[2]);  ?>">
                </div>

                <div class="mb-3" style="margin-bottom:15px;">
                  <input class="form-control" name="file" type="file"   id="formFileMultiple" accept="image/*" multiple required="" oninvalid="this.setCustomValidity('Upload Foto Resi Kak')" oninput="setCustomValidity('')">
                  <label for="formFileMultiple" class="form-label" style="color:red; font-size:12px;">*Ekstensi .jpg, .jpeg</label>
                </div>

                <div class="konfirmasi-sekarang">
                  <input type="submit" class="btn btn-outline-primary" name="konfirmasi" value="upload" style="width: 100%; padding: 11px; margin-bottom: 0; border-radius: 15px 15px  15px; font-size: 16px; text-align: center; font-weight:bold;">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>

      <?php 
      }
        }
      ?>

      ?>
    </div>
  </div>
</div>


<script>
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
