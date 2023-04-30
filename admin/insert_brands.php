<?php
if (isset($_POST['insert_brands'])) {
  $brand_title = $_POST['brand_title'];
  if (!$brand_title) {
    echo "<script>alert('Введите название бренда!')</script>";
  } else {
    $select_query = "SELECT brand_title FROM `brand`WHERE brand_title=('$brand_title')";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
      echo "<script>alert('Бренд уже существует!')</script>";
    } else {
      $insert_query = "INSERT INTO `brand`(brand_title)VALUE('$brand_title')";
      $result = mysqli_query($con, $insert_query);
      if ($result) {
        echo "<script>alert('Бренд успешно добавлен')</script>";
      }
    }
  }
}
?>
<h1 class="text-center mb-3">Добавить бренд товара</h1>

<form action="" method="post" class="mb-2">
  <div class="input-group mb-2 align-items-center mt-1">
    <span >
      <i class=" bg-info input-group-text fa-solid fa-receipt "id="basic-addon1"></i>
    </span>
    <input type="text" class="form-control p-0" name="brand_title" placeholder="добавить бренд" aria-label="add_category" aria-describedby="basic-addon1">
  </div>
  <div class="input-grup mb-2 m-auto">
    <input type="submit" class=" bg-info border-0 p-2 my-3" name="insert_brands" value="Добавить бренд"aria-label="add_category" aria-describedby="basic-addon1">
  </div>
</form>