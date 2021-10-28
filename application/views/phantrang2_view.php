<!doctype html>
<html lang="en">
  <head>
    <title>Phan Trang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
  <body>
  <?php
    include_once 'layout/nav.php';
  ?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Danh Sách Khách Hàng Booking</h1>
    </div>
  </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 push-sm-3"></div>
            <div class="col-sm-6 push-sm-3">
                <div class="card">
                <?php foreach ($dulieu as $value): ?>
                    <div class="card-body">
                        <!-- <h2 class="card-title">id:<?= $value['user_id'] ?></h2> -->
                        <h4 class="card-title">Khách Hàng: <?= $value['name'] ?></h4>
                        <p class="card-text">Số Điện Thoại: <?= $value['phone'] ?></p>
                        <p class="card-text">Email: <?= $value['email'] ?></p>
                        <p class="card-text">Ngày Nhận Phòng: <?= $value['datepicker'] ?></p>
                        <p class="card-text">Ngày Trả Phòng: <?= $value['datepicker1'] ?></p>
                        <p class="card-text">Số lượng khách: <?= $value['khach'] ?></p>
                        <a class="btn btn-outline-danger" href="<?php echo base_url(); ?>Dulich/del/<?= $value['user_id'] ?>" onclick="return confirm('ban chac chu')">Del</a>
                    </div>
                <?php endforeach ?>
                <?php  echo $this->pagination->create_links(); ?>
                </div>
            </div>

        </div>
      </div>
      <?php
    include_once 'layout/footer.php';
  ?>