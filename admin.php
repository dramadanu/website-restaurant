<?php

@include 'config.php';

if (isset($_POST['add_product'])) {
   $p_name = $_POST['name'];
   $description = $_POST['description'];
   $category = $_POST['category'];
   $p_price = $_POST['price'];
   $p_image = $_FILES['image']['name'];
   $p_image_tmp_name = $_FILES['image']['tmp_name'];
   $p_image_folder = 'img/' . $p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `products` VALUES('', '$p_image','$p_name', '$p_price', '$description', '$category', 0)") or die('query failed');

   if ($insert_query) {
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   } else {
      $message[] = 'could not add the product';
   }
};

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if ($delete_query) {
      header('location:admin.php');
      $message[] = 'product has been deleted';
   } else {
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   };
};

if (isset($_POST['update_product'])) {
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/' . $update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if ($update_query) {
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   } else {
      $message[] = 'product could not be updated';
      header('location:admin.php');
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      };
   };

   ?>



   <div class="container">

      <div class="container my-5 row">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header">
                     Tambah Menu
                  </div>
                  <div class="card-body">
                     <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                           <label for="formFile" class="form-label">Gambar Menu</label>
                           <input class="form-control" type="file" name="image" id="formFile">
                        </div>
                        <div class="mb-3">
                           <label for="nama" class="form-label">Name Product</label>
                           <input type="text" required name="name" class="form-control" id="nama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                           <label for="price" class="form-label">Price</label>
                           <input type="number" required name="price" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                           <label for="price" class="form-label">Description</label>
                           <textarea name="description" required id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="price" class="form-label">Category</label>
                           <select required class="form-select" name="category" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <?php
                              $sql = mysqli_query($conn, "SELECT * FROM category");
                              while ($fetch = mysqli_fetch_array($sql)) {
                              ?>
                                 <option value="<?= $fetch['id_category'] ?>"><?= $fetch['category'] ?></option>
                              <?php
                              }
                              ?>
                           </select>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary" name="add_product">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="display-product-table">

         <div class="container row justify-content-center">
            <div class="col-md-8">
               <table class="table">

                  <thead>
                     <th>product image</th>
                     <th>product name</th>
                     <th>product price</th>
                     <th>action</th>
                  </thead>

                  <tbody>
                     <?php

                     $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                     if (mysqli_num_rows($select_products) > 0) {
                        while ($row = mysqli_fetch_assoc($select_products)) {
                     ?>

                           <tr>
                              <td><img src="img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                              <td><?php echo $row['name']; ?></td>
                              <td>Rp<?php echo $row['price']; ?></td>
                              <td>
                                 <a href="admin.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>  </a>
                                 <a href="admin.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i>  </a>
                              </td>
                           </tr>

                     <?php
                        };
                     } else {
                        echo "<div class='empty'>no product added</div>";
                     };
                     ?>
                  </tbody>
               </table>
            </div>
         </div>

      </section>

      <section class="edit-form-container">

         <?php

         if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
            if (mysqli_num_rows($edit_query) > 0) {
               while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
         ?>

                  <form action="" method="post" enctype="multipart/form-data">
                     <img src="img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
                     <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
                     <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
                     <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
                     <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
                     <input type="submit" value="update the prodcut" name="update_product" class="btn">
                     <input type="reset" value="cancel" id="close-edit" class="option-btn">
                  </form>

         <?php
               };
            };
            echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
         };
         ?>

      </section>

   </div>














   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>