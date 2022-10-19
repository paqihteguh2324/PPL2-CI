<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mahasiswa</title>

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
<div class="container-fluid">
<div class="align-item-end" align="right">
    <div class="btn btn-primary">
        <a href="/dashboard">Kembali</a>
    </div>
</div>
    
      <table class="table table-sm text-light">
          <form action="/Mahasiswa/search" method="post">
            Nama
            <input type="text" name="nama" >
            <input type='submit' value='search' class="btn btn-secondary m-2">
          </form>
          <form action='/Mahasiswa/inputDisplay' method="POST">
            <input type='submit' value='input' class="btn btn-secondary m-2">
          </form>
          <form action='/Mahasiswa/grafik' method="get">
            <input type='submit' value='grafik' class="btn btn-secondary m-2">
          </form>
      </table>

      <table class="table table-sm text-light table-bordered table-dark table-hover align-middle">
        <tr align="center">
          <th>Foto</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Tinggi</th>
          <th colspan="3" >Aksi</th>
        </tr>



        <?php
        foreach ($mahasiswa as $field) { ?>
          <tr class="text-light" style="text-align:center ;">
            <td> <img src="<?php echo base_url() ?>/gambar/<?= $field["foto"]?>" style="width:100px ;" class="img-fluid p-2 rounded mx-auto d-block" ></td>
            <td><?= $field["nim"] ?></td>
            <td><?= $field["nama"] ?></td>
            <td><?= $field["umur"] ?></td>
            <td><?= $field["tinggi"] ?></td>
            <td><a class="btn btn-success" href="<?= base_url('/Mahasiswa/detail/' . $field["nim"]) ?> "> View Detail </a></td>
            <td><a class="btn btn-warning" href="<?= base_url('/Mahasiswa/update/' . $field["nim"]) ?> "> edit </a></td>
            <td><a class="btn btn-danger" href="<?= base_url('/Mahasiswa/delete/' . $field["nim"]) ?> "> delete </a></td>
          </tr>
        <?php } ?>
      </table>
      </div>