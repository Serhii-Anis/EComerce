<?php

include '../includes/conect.php';
if (isset($_POST['insert_product'])) {
  $product_title = $_POST['product_title'];
  $product_description = $_POST['product_description'];
  $product_keywords = $_POST['product_keywords'];
  $product_category = $_POST['product_category'];
  $product_brand = $_POST['product_brand'];
  $product_price = $_POST['product_price'];
  $status = true;

  $product_img_1 = $_FILES['product_img_1']['name'];
  $product_img_2 = $_FILES['product_img_2']['name'];
  $product_img_3 = $_FILES['product_img_3']['name'];

  $temp_img_1 = $_FILES['product_img_1']['tmp_name'];
  $temp_img_2 = $_FILES['product_img_2']['tmp_name'];
  $temp_img_3 = $_FILES['product_img_3']['tmp_name'];

  // move_uploaded_file($temp_img_1, "product_images/$product_img_1");
  // move_uploaded_file($temp_img_2, "product_images/$product_img_2");
  // move_uploaded_file($temp_img_3, "product_images/$product_img_3");

  // проверка полей ------------------
  if ($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brand=='' or $product_price=='' or $product_img_1=='' or $product_img_2=='' or $product_img_3=='') {
    echo"<script> alert('Заполните все поля')</script>";
  // проверка полей ------------------

  }else{
    $sql = "INSERT INTO `product`( product_title,product_description,product_keywords,category_id,brand_id,img_1,img_2,img_3,product_price,date,product_status) VALUES ('$product_title','$product_description','$product_keywords','$product_category','$product_brand','$product_img_1','$product_img_2','$product_img_3','$product_price',NOW(),$status)";

    move_uploaded_file($temp_img_1, "product_images/$product_img_1");
    move_uploaded_file($temp_img_2, "product_images/$product_img_2");
    move_uploaded_file($temp_img_3, "product_images/$product_img_3");

    $result_query = mysqli_query($con, $sql);
    if($result_query){
    echo"<script> alert('Товар успешно добавлен в базу')</script>";
    }
  }

}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Панель добавления товара</title>

  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link css -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class='bg-info'>
  <div class="container mt-3">
    <h1 class="text-center">Добавить продукт</h1>
    <div class="mb-3">
      <form action="" method="POST" enctype="multipart/form-data" class="bg-light mt-3 pb-3">
        <div class="form-outline mb-4 bg-light w-50 m-auto">
          <!-- Название продукта -->
          <label for="product_title" class="form-label mt-3">Название продукта</label>
          <input type="text" name="product_title" class="form-control" id="product_title" placeholder="название продукта" autocomplete="off">
          <!-- Описание продукта -->

          <label for="product_description" class="form-label mt-3">Описание продукта</label>
          <input type="text" name="product_description" class="form-control" id="product_description" placeholder="описание продукта" autocomplete="off">
          <!-- Ключевые слова -->
          <label for="product_keywords" class="form-label mt-3">Ключевые слова</label>
          <input type="text" name="product_keywords" class="form-control" id="product_keywords" placeholder="описание продукта" autocomplete="off">

          <!-- выбор категорий -->
          <select name="product_category" class="form-select mt-3">
            <option value=''>Выберите категорию</option>
            <?php
            $select_category = "SELECT category_id , category_title FROM `categories`";
            $result_select = mysqli_query($con, $select_category);
            while ($row_data = mysqli_fetch_assoc($result_select)) {
              $category_id = $row_data['category_id'];
              $category_title = $row_data['category_title'];
              echo "<option value=$category_id>$category_title</option>";
            }
            ?>
          </select>
          <!-- выбор бренда -->
          <select name="product_brand" class="form-select mt-3">
            <option value=''>Выберите бренд</option>
            <?php
            $select_brand = "SELECT brand_id , brand_title FROM `brand`";
            $result_select = mysqli_query($con, $select_brand);
            while ($row_data = mysqli_fetch_assoc($result_select)) {
              $brand_id = $row_data['brand_id'];
              $brand_title = $row_data['brand_title'];
              echo "<option value=$brand_id>$brand_title</option>";
            }
            ?>
          </select>
          <!-- загрузка фото -x1 -->
          <label for="product_img_1" class="form-label mt-3">Фото x1 продукта</label>
          <input type="file" name="product_img_1" class="form-control" id="product_image1">
          <!-- загрузка фото -x2 -->
          <label for="product_img_2" class="form-label mt-3">Фото x2 продукта</label>
          <input type="file" name="product_img_2" class="form-control" id="product_img_2">
          <!-- загрузка фото -x3 -->
          <label for="product_img_3" class="form-label mt-3">Фото x3 продукта</label>
          <input type="file" name="product_img_3" class="form-control" id="product_img_3">

          <!-- Цена продукта -->
          <label for="product_price" class="form-label mt-3">Цена продукта</label>
          <input type="text" name="product_price" class="form-control mb-3" id="product_price" placeholder="цена продукта" autocomplete="off">
          <!-- Добавить продукт -->
          <input type="submit" name="insert_product" class="form-control bg-info" id="insert_product" placeholder="цена продукта" autocomplete="off">
        </div>



      </form>
      <a class="btn btn-primary " href="index.php" role="button">В Админку</a>

    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>