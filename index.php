<?php
include 'includes/conect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E_Commerce</title>

  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link css -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="container-fluid p-0">
    <!-- navbarContainer -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <img src="./img/lifestyleStore.png" alt="logo" class="logo">
        <!-- <a class="navbar-brand" href="#">Logo</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Домой</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Продукт</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Регистрация</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Общая цена: 100/~</a>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbarContainer -->
    <!-- вторая секция -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Добро пожаловать Гость</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Войти</a>
        </li>
      </ul>
    </nav>
    <!-- вторая секция -->

    <!-- Заголовок -->
    <div class="bg-light">
      <h3 class="text-center">Магазин </h3>
      <p class="text-center">Совершайте покупки у нас</p>
    </div>
    <!-- Заголовок -->

    <!-- секция третья -->
    <div class="row">
      <div class="col-md-10">
        <!-- продукты -->
        <div class="row">
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="img/olympus.jpg" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title">Название</h5>
                <p class="card-text">Описание товара и его приемущества</p>
                <a href="#" class="btn btn-info">В корзину</a>
                <a href="#" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="img/hmt.JPG" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title">Название</h5>
                <p class="card-text">Описание товара и его приемущества</p>
                <a href="#" class="btn btn-info">В корзину</a>
                <a href="#" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="img/HXR.jpg" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title">Название</h5>
                <p class="card-text">Описание товара и его приемущества</p>
                <a href="#" class="btn btn-info">В корзину</a>
                <a href="#" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="img/HXR.jpg" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title">Название</h5>
                <p class="card-text">Описание товара и его приемущества</p>
                <a href="#" class="btn btn-info">В корзину</a>
                <a href="#" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="img/cover.jpg" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title">Название</h5>
                <p class="card-text">Описание товара и его приемущества</p>
                <a href="#" class="btn btn-info">В корзину</a>
                <a href="#" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="img/HXR.jpg" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title">Название</h5>
                <p class="card-text">Описание товара и его приемущества</p>
                <a href="#" class="btn btn-info">В корзину</a>
                <a href="#" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
        </div>
        <!-- продукты -->
      </div>
      <div class="col-md-2 bg-secondary p-0">
        <!-- сайд бар -->
        <!-- Показ бренда -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Бренды и марки</h4>
            </a>
          </li>
          <?php
          $select_brands = "SELECT brand_id,brand_title FROM `brand`";
          $result_brands = mysqli_query($con, $select_brands);
          while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
          ?>
            <li class="nav-item ">
              <a href="index.php?brand=<?=$brand_id?>" class="nav-link text-light"><?= $brand_title ?></a>
            </li>
          <?
          }?>
        </ul>
        <!-- Показ бренда -->
        <!-- Показ категории -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Категория</h4>
            </a>
          </li>
          <?php
          $select_categories = "SELECT category_id,category_title FROM `categories`";
          $result_categories = mysqli_query($con, $select_categories);
          while ($row_data = mysqli_fetch_assoc($result_categories)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
          ?>
            <li class="nav-item ">
              <a href="index.php?category=<?=$category_id?>" class="nav-link text-light"><?= $category_title ?></a>
            </li>
          <?
          }?>
        </ul>
        <!-- Показ категории -->
        <!-- сайд бар -->
      </div>
      <!-- секция третья -->


      <!-- footer content -->
      <div class="container-fluid p-0 bg-info mt-1">
        <div class="text-center">
          © Сделано мною
        </div>
      </div>
      <!-- footer content -->


    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>