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
<h2>Detail Data Mahasiswa</h2>
        
        <?php foreach ($mahasiswa as $data) { ?>
            <p><i>Note: Di bawah ini adalah detail informasi mahasiswa berdasarkan NIM </i><b><?php echo $data["nim"];?></b></p>
        <table class="table text-light">
            <tr>
                <td>NIM</td>
                <td>: <?php echo $data["nim"];?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $data["nama"];?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>: <?php echo $data["umur"];?></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>: <?php echo $data["tinggi"];?></td>
            </tr>
            <tr>
                <td></td>
                <td> <a class="btn btn-primary" href="/Mahasiswa">Kembali</a></td>
            </tr>
        </table>
        <?php } ?>