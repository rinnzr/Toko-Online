<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style_login.css">
    <title>Login</title>
</head>
<body style="background-color:#EEE7EE; margin:100px; margin-bottom:0">
<div class="img"></div>
<div class="text" align="center">
   Welcome <br> TOKO ONLINE
</div>
<div class="row" style="margin-top:250px; margin-right:10px;margin-left:280px">
<div class="col-md"></div>
<div class="col-md" style="box-shadow: 4px 4px 5px -4px;padding:50px; background:#733773; border-radius:40px">
      <form action="proses_login.php" method="post" style="color:white; margin-top:10px; font-weight:600;">
          Username  :
          <input type="text" style="height:50px; border-radius:20px;margin-top:10px"name="username" value="" class="form-control"><br>
          Password  :
          <input type="password" style="height:50px; border-radius:20px;margin-top:10px" name="password" class="form-control"><br>
          <select  name="role" id="role">
            <option value="">pilih role</option>
            <option value="pelanggan">pelanggan</option>
            <option value="admin">admin</option>
            <option value="petugas">petugas</option>
          </select>
          
          <center><input class="btn" style="background-color:#C6ADC6; color:white;
          height:20px;border-radius:20px;height:50px;" type="submit" name="login" value="Sign In"></center>
      </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>