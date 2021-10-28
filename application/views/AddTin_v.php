<!doctype html>
<html lang="en">
  <head>
    <title>Thêm Tin Tức</title>
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
      <div class="container">
        <div class="jumbotron">
              <h1 class="display-3">Thêm tin tức</h1>
        
          </div>
          <form action="<?php echo base_url(); ?>AddTin/add" method = "post">
              <fieldset class="form-group">
                <label for="title">Thêm tiêu đề</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelpId" placeholder="">
              </fieldset>
              <fieldset class="form-group">
                <label for="subtitle">Thêm tiêu đề con</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" aria-describedby="emailHelpId" placeholder="">
              </fieldset>
              <fieldset class="form-group">
                <label for="img">Thêm hình ảnh</label>
                <input type="text" class="form-control" name="img" id="img" aria-describedby="emailHelpId" placeholder="">
              </fieldset>
              <fieldset class="form-group">
                <label for="link">Link tiêu đề</label>
                <input type="text" class="form-control" name="link" id="link" aria-describedby="emailHelpId" placeholder="">
              </fieldset>
              <fieldset class="form-group">
                <input type="submit" value="nhap du lieu" class="form-control">
              </fieldset>
          </form>
          </div>
      </div>
      <?php
    include_once 'layout/footer.php';
  ?>