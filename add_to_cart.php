<?php
echo"<pre>";
var_dump($_SERVER);
echo"</pre>";

?>
<?php
include 'fnctions/common_function.php';
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
              <a class="nav-link active" aria-current="page" href="
              index.php">Домой</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="display_all.php">Продукт</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Регистрация</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_to_cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Общая цена: 100/~</a>
            </li>

          </ul>
          <form action="search_product.php" method="GET"class="d-flex">
            <input name="search_data"class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
            <input name="search_data_product"class="btn btn-outline-light" type="submit"value="Search">
          </form>
        </div>
      </div>
    </nav>
    <!-- navbarContainer -->
    <?cart();?>
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
      <h3 class="text-center">Ваша Корзина</h3>
      <p class="text-center">Мы благодарим Вас за Ваши покупки</p>
    </div>
    <!-- Заголовок -->

    <!-- секция третья -->
    <div class="row">
  
      <!-- footer content -->
      <?include 'footer.php'?>
      <!-- footer content -->
      
      
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>