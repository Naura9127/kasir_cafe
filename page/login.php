<style type="text/css">
  body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color:rgb(236, 211, 178);
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>





<form action="" method="post" class="form-signin">
        <h2 class="form-signin-heading">Silahkan Log in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        
        <button name="masuk" class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
</form>

<?php 
if(!empty($_SESSION['username'])){
      @$user = $_SESSION['username'];
      @$level = $_SESSION['level'];
  }

if (isset($_POST['masuk'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE username = '$username'";
  $query = mysqli_query($koneksi, $sql);
  $cek = mysqli_num_rows($query);
  
  if($cek > 0){
$data = mysqli_fetch_array($query);
$password = md5($password);
//echo $password;
$pass_db = $data['password'];

if($password == $pass_db){
  
}else {
 ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Gagal!</strong>  password anda salah.
    </div>
    <?php
}

  }else {
    ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Gagal!</strong>  username tidak ditemukan.
    </div>
    <?php
  }
}
?>
