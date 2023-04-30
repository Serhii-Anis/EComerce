<?php
include "../includes/conect.php" ;

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Панель Админа</title>

  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link css -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container-fluid p-0">
    <!-- navbarContainer -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid p-0">
        <img src="../img/lifestyleStore.png" alt="logo" class="logo">
        <nav class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">Добро пожаловать Гость</a>
          </li>
        </nav>

      </div>
    </nav>
    <!-- navbarContainer -->
    <div class="row">
      <div class="bg-light">
        <h1 class="text-center p-2">Детали продажи</h1>
      </div>
      <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">

        <div>
          <a href="#"><img src="../img/avatar.jpg" alt="avatar" class="avatar"></a>
          <p class="text-light text-center">Имя Админа</p>
        </div>
        <div class="button text-center">
          <button class="my-btn"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Добавить товар</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Смотреть товар</a></button>
          <button class="my-btn"><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Добавить категорию</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Смотреть категорию</a></button>
          <button class="my-btn"><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Добавить бренд</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Смотреть бренд</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Все закзы</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Все платежи</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Пользователи</a></button>
          <button class="my-btn"><a href="#" class="nav-link text-light bg-info my-1">Выход</a></button>

        </div>
      </div>
    </div>
    <div class="container">

      <?php
      if(isset($_GET['insert_categories'])){
        include 'insert_categories.php';
      }
      if(isset($_GET['insert_brands'])){
        include 'insert_brands.php';
      }
      ?>
    </div>
    <!-- footer content -->
    <div class="container-fluid p-0 bg-info m-0">
      <p class="text-center">
        © Сделано мною
      </p>
    </div>
    <!-- footer content -->

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>