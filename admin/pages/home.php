<?php session_start();
if (!isset($_SESSION["admin-username"])){
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ogani Admin</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a style="margin-left: 10px;" class="navbar-brand" href="#">Ogani Admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <?php
                echo '<li class="nav-item">
                        <a class="nav-link" href="#">'.$_SESSION["admin-username"].'</a>
                      </li>';
              ?>
              <li class="nav-item">
                <a class="nav-link" href="../php/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      <!-- Navbar End -->
  
      <div class="container">
        <div class="row">

            <!-- New Food -->
            <div class="card" style="width: 25rem;">
              <h4>Add a new Product</h4>
              <form action="../php/product/add-product.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Item Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Description"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-select" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="baby">Baby</option>
                      <option value="beauty">Beauty</option>
                      <option value="hair">Hair</option>
                      <option value="face">Face</option>
                      <option value="body">Body</option>
                      <option value="giftpacks">Gift Packs</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Price"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Availability</label>
                    <select name="availability" class="form-select" aria-label="Default select example">
                      <option selected>Available or Not</option>
                      <option value="available">Available</option>
                      <option value="not_available">Not Available</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input name="image" type="file" class="form-control" id="exampleInputEmail1" placeholder="Upload Image"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- New Food End -->
  
        </div>

        <!-- All Product List -->
        <div style="margin-top: 100px; margin-bottom: 50px;" class="container">
          <div class="table-style">
            <h2 style="margin-bottom: 60px;" class="text-center">List of Food Items we have</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Category</th>
                  <th scope="col">Price</th>
                  <th scope="col">Availability</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../php/db.php';
                $query = "SELECT * FROM product";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                      echo '<tr>
                              <th scope="row">'.$row["id"].'</th>
                              <td><img id="img-preview" src="../../uploads/'.$row["image"].'"/></td>
                              <td>'.$row["title"].'</td>
                              <td>'.$row["category"].'</td>
                              <td>'.$row["price"].'</td>
                              <td>'.$row["availability"].'</td>
                              <td><a href="../php/product/update-product.php?id='.$row["id"].'" class="btn btn-primary">Update</a></td>
                              <td><a href="../php/product/delete-product.php?id='.$row["id"].'" class="btn btn-danger">Delete</a></td>
                            </tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- All Food Item List -->

      </div>
  </body>
</html>