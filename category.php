<?php
if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
}else{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <?php
include ("conn.php");
$sql_category = "SELECT * FROM category";
$result_category = mysqli_query($conn, $sql_category);

while($row_category = mysqli_fetch_assoc($result_category)):
                    ?>
                    <a href="category.php?cat_id=<?php echo $row_category['id'] ?>" class="list-group-item"><?php echo $row_category['name'] ?></a>
                    <?php
                        endwhile;
                    ?>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <br>
                <div class="row">
                    <?php
                        include ("conn.php");
                        $sql = "SELECT * FROM products WHERE cat_id='$cat_id'";
                        $result = mysqli_query($conn, $sql);
                        
                        while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img style="height:150px" class="card-img-top" src="images/<?php echo $row['picture']; ?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#"><?php echo $row['title']; ?></a>
                                </h4>
                                <h5>$<?php echo $row['price']; ?></h5>
                                <p class="card-text"><?php echo $row['description']; ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Add to card</a>
                                <a href="single.php?id=<?php echo $row['id']; ?>" class="btn btn-success">More info</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                    

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <br>
       <div class="row">
           <div class="col-md-12">
                <ul class="pagination pull-left pagination-lg paging-me">
        <li class="btn btn-primary active"><a href="#">1</a></li>
        <li class="btn btn-primary active"><a href="#">2</a></li>
        <li class="btn btn-primary active"><a href="#">3</a></li>
    </ul>
           </div>
       </div>
    <br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
