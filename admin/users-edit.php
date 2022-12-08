<?php
include('../koneksi.php');
if(isset($_GET['id']) && isset($_POST['uname'])){
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $role = $_POST['role'];
    $hash = password_hash($pwd, PASSWORD_DEFAULT);
    $pwd_in = empty($pwd) ? "" : ", password = '$hash'";
    $query = mysqli_query($conn, "UPDATE users SET username = '$uname' $pwd_in, role = '$role' WHERE id = " . @$_GET['id']);
    header("Location: users.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Pengguna - Edit</h1>
          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM users WHERE id = " . @$_GET['id']);
            $data = mysqli_fetch_array($query);
          ?>
          <div class="row">
        
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate="" method="POST">

            <div class="mb-3">
              <label for="uname">Username</label>
              <input type="text" class="form-control" name="uname" id="uname" value="<?=$data['username']?>" required>
            </div>

            <div class="mb-3">
              <label for="pwd">Password</label>
              <input type="password" class="form-control" name="pwd" id="pwd" value="" required>
            </div>
            
            <div class="mb-3">
              <label for="role">Role</label>
              <select class="custom-select d-block w-100" name="role" id="role" required>
                  <option value="admin">Admin</option>
                </select>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Edit</button>
          </form>
        </div>
      </div>
        </main>
      </div>
    </div>
</body>
</html>