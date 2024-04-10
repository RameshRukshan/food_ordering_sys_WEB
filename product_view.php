<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="OrganicSnacks Management System index page">
        <meta name="author" content="Devoloped and Designed by Thilina Pathirana 20212129">

        <title>OrganicSnacks</title>
   
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/apexcharts.css" rel="stylesheet">
        <link href="css/tooplate-mini-finance.css" rel="stylesheet">

    </head>
    
    <body>
        <header class="navbar sticky-top flex-md-nowrap">
            <div class="col-md-3 col-lg-3 me-0 px-3 fs-6">
                <a class="navbar-brand" href="index.html">
                    <span>Organic</span><span style="color: lightseagreen;">Snacks</span>
                </a>
            </div>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="custom-form header-form ms-lg-3 ms-md-3 me-lg-auto me-md-auto order-2 order-lg-0 order-md-0" action="#" method="get" role="form">
                <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
            </form>

            <div class="navbar-nav me-lg-2">
                <div class="nav-item text-nowrap d-flex align-items-center">
                    <div class="dropdown ps-3">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarLightDropdownMenuLink">
                            <i class="bi-bell"></i>
                            <span class="position-absolute start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </a>
                        <!--Notifications section start-->
                        <ul class="dropdown-menu dropdown-menu-lg-end notifications-block-wrap bg-white shadow" aria-labelledby="navbarLightDropdownMenuLink">
                            <small>Notifications</small>

                            <!--Notifi 1-->

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex  align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-success">
                                        <i class="notifications-icon bi-check-circle-fill"></i>
                                    </div>

                                    <div>
                                        <span>Your account has been created successfuly.</span>

                                        <p>12 days ago</p>
                                    </div>
                                </a>
                            </li>
                            <!--Notifi 2-->
                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-info">
                                        <i class="notifications-icon bi-folder"></i>
                                    </div>

                                    <div>
                                        <span>Please check. We have sent a Daily report.</span>

                                        <p>10 days ago</p>
                                    </div>
                                </a>
                            </li>
                            <!--Notifi 3-->
                            <li class="notifications-block">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-danger">
                                        <i class="notifications-icon bi-question-circle"></i>
                                    </div>

                                    <div>
                                        <span>Account verification failed.</span>

                                        <p>1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--End Notifications section-->
                    <!-- 3 dot section-->
                    <div class="dropdown ps-1">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-social bg-white shadow">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/search.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Google</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/spotify.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Spotify</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/telegram.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Telegram</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/snapchat.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Snapchat</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/tiktok.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Tiktok</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/youtube.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Youtube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 dot section end-->

                    <!-- User Profile section-->

                    <div class="dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/medium-shot-happy-man-smiling.jpg" class="profile-image img-fluid" alt="">
                        </a>
                        <ul class="dropdown-menu bg-white shadow">
                            <li>
                                <div class="dropdown-menu-profile-thumb d-flex">
                                    <img src="images/medium-shot-happy-man-smiling.jpg" class="profile-image img-fluid me-3" alt="">

                                    <div class="d-flex flex-column">
                                        <small>Thomas</small>
                                        <a href="#">thomas@site.com</a>
                                    </div>
                                </div>
                            </li>

                            <li class="border-top mt-3 pt-2 mx-4">
                                <a class="dropdown-item ms-0 me-0" href="login.php">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User Profile -->
                </div>
            </div>
        </header>

        <!-- Side Navigation menu section-->
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                    <div class="position-sticky py-4 px-3 sidebar-sticky">
                        <ul class="nav flex-column h-100">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php">
                                    <i class="bi-house me-2"></i>
                                    Home
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active" href="products.php">
                                    <i class="bi-box-seam me-2"></i>
                                    Products
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="employees.php">
                                    <i class="bi-person me-2"></i>
                                    Employees
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="add_new_employee.php">
                                    <i class="bi-person-plus me-2"></i>
                                    Add New Employee
                                </a>
                            </li>

                            <li class="nav-item border-top mt-auto pt-2">
                                <a class="nav-link" href="login.php?logout=true">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            <!-- Side Navigation menu section-->

                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        
                    </div>

                    <?php
                    include ("db.php");

                    if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $sql = "SELECT * FROM products WHERE id=$id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        } else {
                            echo "No products found.";
                        }
                    } else {
                        echo "No ID provided.";
                    }

                    if(isset($_GET["delete_id"])) {
                        $delete_id = $_GET["delete_id"];
                        $sql = "DELETE FROM products WHERE id=$delete_id";
                        $conn->query($sql);
                        header("Location: products.php");
                        exit();
                    }

                    $conn->close();
                    ?>

                    <div class="row" style="padding: 20px;">
                        <div class="col-lg-6 col-6 d-flex align-items-center">
                            <div>
                                <h5 class="mb-4"><?php echo $row["name"];?></h5>
                                <img src="<?php echo $row["image"];?>" alt="" style="width: 80%; height: 80%; object-fit: contain;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-6 d-flex align-items-center">
                            <div>
                                <h5 class="mb-4"><?php echo $row["price"];?> LKR</h5>
                                <p><?php echo $row["description"];?></p>
                                <br>
                                <div class="d-flex">
                                    <button class="form-control me-3 btn btn-success"><a href="edit_product.php?id=<?php echo $row["id"];?>" style="color:white; font-size: 12px;">Edit Product</a></button>
                                    <button class="form-control ms-2 btn btn-danger" id="del-p" name="del-p" onclick="return confirm('Are you sure you want to delete this product?')"><a href="?delete_id=<?php echo $row["id"];?>" style="color:white; font-size: 12px;">Delete Product</a></button>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    

                    <footer class="site-footer" style="position: fixed; bottom: 0; width: 100%;">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-12 col-12">
                                    <p class="copyright-text">Copyright © OrganicSnacks 2024
                                    - Design: Thilina Lakshan</a></p>
                                </div>
                    
                            </div>
                        </div>
                    </footer>
                </main>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/apexcharts.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>