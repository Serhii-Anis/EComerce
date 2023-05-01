<?php
// connect DB
include 'includes/conect.php';

//getting Products

function getProducts()
{
  // проверяем выбрана ли  категория или бренд 
  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      global $con;
      $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` ORDER BY rand() LIMIT 0,9";
      $sql_query = mysqli_query($con, $select_product);
      while ($result = mysqli_fetch_assoc($sql_query)) {
        $product_id = $result["product_id"];
        $product_title = $result["product_title"];
        $product_description = $result["product_description"];
        $product_price = $result['product_price'];
        $product_keywords = $result["product_keywords"];
        $category_id = $result["category_id"];
        $brand_id = $result["brand_id"];
        $img_1 = $result["img_1"];
        $img_2 = $result["img_2"];
        $img_3 = $result["img_3"];
        $dt = $result["date"];
        $status = $result["product_status"];
?>
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="admin/product_images/<?= $img_1 ?>" class="card-img-top" alt="foto">
            <div class="card-body">
              <h5 class="card-title"><?= $product_title ?></h5>
              <p class="card-text"><?= $product_title ?></p>
              <p class="card-text"><?= $product_description ?></p>
              <p class="card-text">Цена:<?= $product_price ?>/~</p>
              <a href="index.php?add_to_cart=<?= $product_id ?>" class="btn btn-info">В корзину</a>
              <a href="product_detail.php?product_id=<?= $product_id ?>" class="btn btn-secondary">Смотреть еще</a>
            </div>
          </div>
        </div>
    <?
      }
    }
  }
}

//getting Brands
function getBrands()
{

  global $con;
  $select_brands = "SELECT brand_id,brand_title FROM `brand`";
  $result_brands = mysqli_query($con, $select_brands);
  while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    ?>
    <li class="nav-item ">
      <a href="index.php?brand=<?= $brand_id ?>" class="nav-link text-light"><?= $brand_title ?></a>
    </li>
  <?
  }
}




//getting Categories
function getCategories()
{
  global $con;
  $select_categories = "SELECT category_id,category_title FROM `categories`";
  $result_categories = mysqli_query($con, $select_categories);
  while ($row_data = mysqli_fetch_assoc($result_categories)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
  ?>
    <li class="nav-item ">
      <a href="index.php?category=<?= $category_id ?>" class="nav-link text-light"><?= $category_title ?></a>
    </li>
    <?
  }
}

//getting  unique Categories
function getUniqueCategory()
{
  // проверяем выбрана ли  категория или бренд 
  if (isset($_GET['category'])) {
    global $con;
    $category_id = $_GET['category'];
    $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` WHERE category_id=$category_id";
    $sql_query = mysqli_query($con, $select_product);
    $num_rows = mysqli_num_rows($sql_query);
    if ($num_rows == 0) {
      echo "<h1 class='danger'> Нет такой категории товара в нашем магазине!</h1>";
    }
    while ($result = mysqli_fetch_assoc($sql_query)) {
      $product_id = $result["product_id"];
      $product_title = $result["product_title"];
      $product_description = $result["product_description"];
      $product_price = $result['product_price'];
      $product_keywords = $result["product_keywords"];
      $category_id = $result["category_id"];
      $brand_id = $result["brand_id"];
      $img_1 = $result["img_1"];
      $img_2 = $result["img_2"];
      $img_3 = $result["img_3"];
      $dt = $result["date"];
      $status = $result["product_status"];
    ?>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="admin/product_images/<?= $img_1 ?>" class="card-img-top" alt="foto">
          <div class="card-body">
            <h5 class="card-title"><?= $product_title ?></h5>
            <p class="card-text"><?= $product_title ?></p>
            <p class="card-text"><?= $product_description ?></p>
            <p class="card-text">Цена:<?= $product_price ?>/~</p>
            <a href="index.php?add_to_cart=<?= $product_id ?>" class="btn btn-info">В корзину</a>
            <a href="product_detail.php?product_id=<?= $product_id ?>" class="btn btn-secondary">Смотреть еще</a>
          </div>
        </div>
      </div>
    <?
    }
  }
}



//getting  unique Brand
function getUniqueBrand()
{
  // проверяем выбрана ли  категория или бренд 
  if (isset($_GET['brand'])) {
    global $con;
    $brand_id = $_GET['brand'];
    $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` WHERE brand_id=$brand_id";
    $sql_query = mysqli_query($con, $select_product);
    $num_rows = mysqli_num_rows($sql_query);
    if ($num_rows == 0) {
      echo "<h1 class='danger'> Нет такого бренда в нашем магазине!</h1>";
    }
    while ($result = mysqli_fetch_assoc($sql_query)) {
      $product_id = $result["product_id"];
      $product_title = $result["product_title"];
      $product_description = $result["product_description"];
      $product_price = $result['product_price'];
      $product_keywords = $result["product_keywords"];
      $category_id = $result["category_id"];
      $brand_id = $result["brand_id"];
      $img_1 = $result["img_1"];
      $img_2 = $result["img_2"];
      $img_3 = $result["img_3"];
      $dt = $result["date"];
      $status = $result["product_status"];
    ?>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="admin/product_images/<?= $img_1 ?>" class="card-img-top" alt="foto">
          <div class="card-body">
            <h5 class="card-title"><?= $product_title ?></h5>
            <p class="card-text"><?= $product_title ?></p>
            <p class="card-text"><?= $product_description ?></p>
            <p class="card-text">Цена:<?= $product_price ?>/~</p>

            <a href="index.php?add_to_cart=<?= $product_id ?>" class="btn btn-info">В корзину</a>
            <a href="product_detail.php?product_id=<?= $product_id ?>" class="btn btn-secondary">Смотреть еще</a>
          </div>
        </div>
      </div>
      <?
    }
  }
}


function getAllProducts()
{
  // проверяем выбрана ли  категория или бренд 
  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      global $con;
      $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` ORDER BY rand()";
      $sql_query = mysqli_query($con, $select_product);
      while ($result = mysqli_fetch_assoc($sql_query)) {
        $product_id = $result["product_id"];
        $product_title = $result["product_title"];
        $product_description = $result["product_description"];
        $product_price = $result['product_price'];
        $product_keywords = $result["product_keywords"];
        $category_id = $result["category_id"];
        $brand_id = $result["brand_id"];
        $img_1 = $result["img_1"];
        $img_2 = $result["img_2"];
        $img_3 = $result["img_3"];
        $dt = $result["date"];
        $status = $result["product_status"];
      ?>
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="admin/product_images/<?= $img_1 ?>" class="card-img-top" alt="foto">
            <div class="card-body">
              <h5 class="card-title"><?= $product_title ?></h5>
              <p class="card-text"><?= $product_title ?></p>
              <p class="card-text"><?= $product_description ?></p>
              <p class="card-text">Цена:<?= $product_price ?>/~</p>

              <a href="index.php?add_to_cart=<?= $product_id ?>" class="btn btn-info">В корзину</a>
              <a href="product_detail.php?product_id=<?= $product_id ?>" class="btn btn-secondary">Смотреть еще</a>
            </div>
          </div>
        </div>
      <?
      }
    }
  }
}

// search products
function searchProduct()
{
  if (isset($_GET['search_data_product'])) {
    global $con;
    $search_data_value = $_GET['search_data'];

    $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` WHERE `product_keywords` LIKE '%$search_data_value%'";

    $sql_query = mysqli_query($con, $select_product);
    $num_rows = mysqli_num_rows($sql_query);
    if ($num_rows == 0) {
      echo "<h1 class='danger'> Нет такого товара в нашем магазине!</h1>";
    }
    while ($result = mysqli_fetch_assoc($sql_query)) {
      $product_id = $result["product_id"];
      $product_title = $result["product_title"];
      $product_description = $result["product_description"];
      $product_price = $result['product_price'];
      $product_keywords = $result["product_keywords"];
      $category_id = $result["category_id"];
      $brand_id = $result["brand_id"];
      $img_1 = $result["img_1"];
      $img_2 = $result["img_2"];
      $img_3 = $result["img_3"];
      $dt = $result["date"];
      $status = $result["product_status"];
      ?>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="admin/product_images/<?= $img_1 ?>" class="card-img-top" alt="foto">
          <div class="card-body">
            <h5 class="card-title"><?= $product_title ?></h5>
            <p class="card-text"><?= $product_title ?></p>
            <p class="card-text"><?= $product_description ?></p>
            <p class="card-text">Цена:<?= $product_price ?>/~</p>

            <a href="index.php?add_to_cart=<?= $product_id ?>" class="btn btn-info">В корзину</a>
            <a href="product_detail.php?product_id=<?= $product_id ?>" class="btn btn-secondary">Смотреть еще</a>
          </div>
        </div>
      </div>
      <?
    }
  }
}
function viewDelail()
{
  if (isset($_GET['product_id'])) {
    if (!isset($_GET['category'])) {
      if (!isset($_GET['brand'])) {
        global $con;
        $id_product = $_GET['product_id'];

        $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` WHERE `product_id` = '$id_product'";

        $sql_query = mysqli_query($con, $select_product);
        $num_rows = mysqli_num_rows($sql_query);
        if ($num_rows == 0) {
          echo "<h1 class='danger'> Нет такого товара в нашем магазине!</h1>";
        }
        while ($result = mysqli_fetch_assoc($sql_query)) {
          $product_id = $result["product_id"];
          $product_title = $result["product_title"];
          $product_description = $result["product_description"];
          $product_price = $result['product_price'];
          $product_keywords = $result["product_keywords"];
          $category_id = $result["category_id"];
          $brand_id = $result["brand_id"];
          $img_1 = $result["img_1"];
          $img_2 = $result["img_2"];
          $img_3 = $result["img_3"];
          $dt = $result["date"];
          $status = $result["product_status"];
      ?>
          <div class="col-md-4">
            <div class="card">
              <img src="admin/product_images/<?= $img_1 ?>" class="card-img-top" alt="foto">
              <div class="card-body">
                <h5 class="card-title"><?= $product_title ?></h5>
                <p class="card-text"><?= $product_title ?></p>
                <p class="card-text"><?= $product_description ?></p>
                <p class="card-text">Цена:<?= $product_price ?>/~</p>

                <a href="index.php?add_to_cart=<?= $product_id ?>" class="btn btn-info">В корзину</a>
                <a href="product_detail.php?product_id=<?= $product_id ?>" class="btn btn-secondary">Смотреть еще</a>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-center text-info mb-5">Related Products</h4>
              </div>

              <div class="col-md-6">
                <img src="admin/product_images/<?= $img_2 ?>" class="card-img-top" alt="foto">

              </div>

              <div class="col-md-6">
                <img src="admin/product_images/<?= $img_3 ?>" class="card-img-top" alt="foto">

              </div>
            </div>

          </div>
<?
        }
      }
    }
  }
}
//начало------ получение IP пользователя----------------------------------
//============================================================
function getUserIP()
{

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

    $userIP = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

    $userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {

    $userIP = $_SERVER['REMOTE_ADDR'];
  }

  return $userIP;
}

// конец-------получение IP пользователя----------------------------------
//============================================================

// данные из корзины добавленные в базу данных
function cart()
{
  if (isset($_GET['add_to_cart'])) {
    global $con;
    $id_product = $_GET['add_to_cart'];
    $user_IP = getUserIP();

    $select_cart = "SELECT `product_id`, `ip_adress`, `quantity` FROM `cart_detail` WHERE product_id='$id_product' AND ip_adress='$user_IP'";
    $sql_query = mysqli_query($con, $select_cart);
    $num_rows = mysqli_num_rows($sql_query);
    if ($num_rows > 0) {
      echo "<script>alert('Такой товар уже есть в Вашей корзине')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    } else {
      $insert_query = "INSERT INTO `cart_detail`(`product_id`, `ip_adress`, `quantity`) VALUES ('$id_product','$user_IP','0')";
      mysqli_query($con, $insert_query);
      echo "<script>alert(' Товар добавлен в Вашу корзину')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
}
// отображение корзины
function num_item_cart()
{
  if (isset($_GET['add_to_cart'])) {
    global $con;
    $userIP = getUserIP();
    $select_cart = "SELECT `ip_adress` FROM `cart_detail` WHERE ip_adress='$userIP'";
    $sql_query = mysqli_query($con, $select_cart);
    $count_cart_items = mysqli_num_rows($sql_query);
  } else {
    global $con;
    $userIP = getUserIP();
    $select_cart = "SELECT `ip_adress` FROM `cart_detail` WHERE ip_adress='$userIP'";
    $sql_query = mysqli_query($con, $select_cart);
    $count_cart_items = mysqli_num_rows($sql_query);
  }
  echo $count_cart_items;
}

// вывод общей цены товара
function getTotal_price()
{
  global $con;
  $get_ip = getUserIP();
  $total = 0;
  $cart_query="SELECT * FROM `cart_detail` WHERE `ip_adress`='$get_ip'";
 
  $result = mysqli_query($con,$cart_query);

  while($row = mysqli_fetch_array($result)){
    $product_id = $row['product_id'];
    $select_product = "SELECT * FROM `product` where `product_id`='$product_id'";
    $result_product = mysqli_query($con,$select_product);
    while($row_product_price =mysqli_fetch_array($result_product)){
$product_price =array($row_product_price['product_price']);
$product_value=array_sum($product_price);
$total+=$product_value;
    }
  }
echo $total;
}
