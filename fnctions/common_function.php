<?php
// connect DB
include 'includes/conect.php';

//getting Products

function getProducts()
{
  global $con;
  // проверяем выбрана ли  категория или бренд 
  if(!isset($_GET['category'])){
  if(!isset($_GET['brand'])){
    $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` ORDER BY rand() LIMIT 0,9";
    $sql_query = mysqli_query($con, $select_product);
    while ($result = mysqli_fetch_assoc($sql_query)) {
      $product_id = $result["product_id"];
      $product_title = $result["product_title"];
      $product_description = $result["product_description"];
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
            <a href="#" class="btn btn-info">В корзину</a>
            <a href="#" class="btn btn-secondary">Смотреть еще</a>
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
function getUniqueCategory(){
  {
    global $con;
    // проверяем выбрана ли  категория или бренд 
    if(isset($_GET['category'])){
      $category_id = $_GET['category'];
      $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` WHERE category_id=$category_id";
      $sql_query = mysqli_query($con, $select_product);
      $num_rows = mysqli_num_rows($sql_query);
      if($num_rows == 0){
        echo "<h1 class='danger'> Нет такой категории товара в нашем магазине!</h1>";
      }
      while ($result = mysqli_fetch_assoc($sql_query)) {
        $product_id = $result["product_id"];
        $product_title = $result["product_title"];
        $product_description = $result["product_description"];
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
              <a href="#" class="btn btn-info">В корзину</a>
              <a href="#" class="btn btn-secondary">Смотреть еще</a>
            </div>
          </div>
        </div>
      <?
      }
    }
    }
  }


//getting  unique Brand
function getUniqueBrand(){
  {
    global $con;
    // проверяем выбрана ли  категория или бренд 
    if(isset($_GET['brand'])){
      $brand_id = $_GET['brand'];
      $select_product = "SELECT `product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `img_1`, `img_2`, `img_3`, `product_price`, `date`, `product_status` FROM `product` WHERE brand_id=$brand_id";
      $sql_query = mysqli_query($con, $select_product);
      $num_rows = mysqli_num_rows($sql_query);
      if($num_rows == 0){
        echo "<h1 class='danger'> Нет такого бренда в нашем магазине!</h1>";
      }
      while ($result = mysqli_fetch_assoc($sql_query)) {
        $product_id = $result["product_id"];
        $product_title = $result["product_title"];
        $product_description = $result["product_description"];
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
              <a href="#" class="btn btn-info">В корзину</a>
              <a href="#" class="btn btn-secondary">Смотреть еще</a>
            </div>
          </div>
        </div>
      <?
      }
    }
    }
  }

