<?php
include('../koneksi.php');
if(isset($_POST['judul'])){
    $title = $_POST['judul'];
    $img = $_POST['img'];
    $body = $_POST['body'];
    $query = mysqli_query($conn, "INSERT INTO artikel (title, img, body) VALUES ('$title', '$img', '$body')");
    header("Location: artikel.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Artikel - Tambahkan</h1>
          </div>

          <div class="row">
        
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate="" method="POST">

            <div class="mb-3">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" name="judul" id="judul" value="" required>
            </div>

            <div class="mb-3">
              <label for="img">Filename Gambar</label>
              <input type="text" class="form-control" name="img" id="img" value="" required>
            </div>
            
            <div class="mb-3">
              <label for="body">Isi</label>
              <input type="text" class="form-control" name="body" id="body" value="" required>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Tambahkan</button>
          </form>
        </div>
      </div>
        </main>
      </div>
    </div>
</body>
</html>