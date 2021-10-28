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
      <h1 class="display-3">Thêm Xóa Các Danh Mục Tin</h1>
    </div>
  </div>
      <div class="container">
        <div class="row">
        <div class="col-sm-3 push-sm-3"></div>
            <div class="col-sm-6 push-sm-3">
            <div class="main-duoi">
            <div style="display:inherit;padding-right:10px;height:100%;margin-left:-5px;padding-left:10px">
              <ul class="list-group">
        <?php foreach ($dulieu as $value): ?>
                  <li class="justify-content-between list-group-item">
                      <div style="display: flex; margin-bottom: 5px; justify-content: space-between;">
                          <div><a class="title"
                                  href=" <?php echo $value['link']; ?>"
                                  style="color: #000"> <?php echo $value['title']; ?></a>
                              </div><img
                                      src=" <?php echo $value['img']; ?>"
                                      style="width: 70px; border-radius: 2px; max-height: 50px; margin-left: 5px;">
                          </div><small class="description" style="color: rgb(145, 150, 154);"> <?php echo $value['subtitle']; ?>
                          </small><br><small
                              class="fav" style="float: left; margin-top: 10px; color: rgb(145, 150, 154);"><img
                                  src="https://www.google.com/s2/favicons?domain=vnexpress.net"
                                  alt="vnexpress.net" class="mx-q" style="border-radius: 2px; width: 12px;">
                                  vnexpress.net</small><small class="fav"
                              style="float: right; margin-top: 10px; color: rgb(145, 150, 154);"> <?php echo $value['created_at']; ?></small>
                  </li>
                  <br>
                  <li style="list-style-type: none;"><a class="btn btn-outline-danger" role="button" href="<?php echo base_url(); ?>Dulich/del_Tin/<?= $value['id'] ?>" onclick="return confirm('ban chac chu')">Xoa</a></li>
                  <br>
        <?php endforeach ?>
              </ul>
          </div>
          </div>
                <?php  echo $this->pagination->create_links(); ?>          
                <a name="" id="" class="btn btn-primary" href="<?php echo base_url(); ?>AddTin" role="button">Thêm Tin</a>
        </div>
        </div>
      </div>
      <?php
    include_once 'layout/footer.php';
  ?>