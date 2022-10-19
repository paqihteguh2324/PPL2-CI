
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>
  <?php foreach ($mahasiswa as $data) { ?>
    <form action="<?php '/Mahasiswa/update/'.$data['nim']?>" method="post">
    <?= csrf_field() ?>
    <table width="25%" border="0" align="center">
 
        <tr>
            <td>NIM</td>
            <td>: <?php echo ($data['nim'])?></td>
        </tr>
   
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo ($data['nama'])?>"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="number" name="umur" value="<?php echo ($data['umur'])?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="submit"></td>
        </tr>
        <tr height="40">
            <td></td>
            <td><a class="btn btn-primary" href="/Mahasiswa">Kembali</a></td>
        </tr>
        
    </table>
</form>
<?php }?>