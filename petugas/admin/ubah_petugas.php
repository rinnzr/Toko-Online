<?php
include '../header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../edit.css">
    <title>Ubah_Petugas</title>
</head>
<body>
    <?php 
    include "../koneksi.php";
    $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>
    <div class="container col-15">
        <div class="col-md- py-5">
            <h3 align  ="center">Ubah Petugas</h3>
            <form action="proses_ubah_petugas.php" method="post">
                <input type="hidden" name="id_petugas" value= "<?=$dt_petugas['id_petugas']?>">
                Nama petugas :
                <input type="text" name="nama_petugas" value= "<?=$dt_petugas['nama_petugas']?>" class="form-control">
                Email : 
                <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control">
                Password : 
                <input type="password" name="password" value="<?=$dt_petugas['password']?>" class="form-control">
                Level :
                <?php 
                $arr_role=array('petugas'=>'petugas','admin'=>'admin');
                ?>
                <select name="role" class="form-control">
                    <option></option>
                    <?php foreach ($arr_role as $key_role => $val_role):
                        if($key_role==$dt_user['role']){
                            $selek="selected";
                        } else {
                            $selek="";
                        }
                    ?>
                    <option value="<?=$key_role?>" <?=$selek?>><?=$val_role?></option>
                    <?php endforeach ?>
                    </select>

                <div class="col-md- py-5">
                <input type="submit" name="simpan" value="SUBMIT" class="btn" style="background-color:#251B37;color:white">
                </div>
                
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

