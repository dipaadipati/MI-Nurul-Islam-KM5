<?php
include('../koneksi.php');
if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $sub = $_POST['sub'];
    $isisub = "";
    if(isset($sub)){
      $isisub = json_encode($sub, true);
    }
    $query = mysqli_query($conn, "INSERT INTO pelajaran (nama_pelajaran, sub_pelajaran) VALUES ('$nama', '$isisub')");
    header("Location: pelajaran.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Pelajaran - Tambahkan</h1>
          </div>

          <div class="row">
        
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate="" method="POST">

            <div class="mb-3">
              <label for="nama">Nama Pelajaran</label>
              <input type="text" class="form-control" name="nama" id="nama" value="" required>
            </div>

            <div class="mb-3">
              <label for="sub">Sub Pelajaran <span class="text-muted">(Optional)</span></label>
              <div class="row">
                <input type="text" class="form-control col-10 ml-3" name="sub[]" id="sub1" value="">
                <button class="btn btn-danger ml-1 mt-auto d-none" id="kurang-sub">-</button>
                <a class="btn btn-primary col-1 mx-auto mt-auto" id="tambah-sub">Tambah</a>
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Tambahkan</button>
          </form>
        </div>
      </div>
        </main>
      </div>
    </div>
    <script>
      $("#tambah-sub").click(function(e) {
          e.preventDefault()
          if($(this).prev().prev()[0].id != "sub1"){
            //$(this).prev().prev().remove();
          }
          $("#kurang-sub").removeClass("d-none");
          $('<input type="text" class="form-control col-10 ml-3 mt-3" name="sub[]" id="sub" value="">').insertBefore("#kurang-sub");
      });
      
      $("#kurang-sub").click(function(e) {
          e.preventDefault()
          //$(this).prev().prev().remove();
          $(this).prev().remove();
          if($(this).prev()[0].id == "sub1"){
            $(this).addClass("d-none");
          }
      });

      // function hapusTerakhir(t){
      //   $(t).prev().prev().remove();
      //   $(t).prev().remove();
      //   if($(this).prev().prev().prev()[0].id == "sub1"){
      //     $(t).remove();
      //     return false
      //   }
      //   return false
      // }
    </script>
</body>
</html>