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

            <div class="navbar-nav me-lg-2">
                <div class="nav-item text-nowrap d-flex align-items-center">
                    
                        

                    <!-- User Profile section-->

                    <div class="dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/account.jpg" class="profile-image img-fluid" alt="">
                        </a>
                        <ul class="dropdown-menu bg-white shadow">
                            <li>
                                <div class="dropdown-menu-profile-thumb d-flex">
                                    <img src="images/account.jpg" class="profile-image img-fluid me-3" alt="">

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
                                <a class="nav-link " href="products.php">
                                    <i class="bi-box-seam me-2"></i>
                                    Products
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="employees.php">
                                    <i class="bi-person me-2"></i>
                                    Employees
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="add_new_employee.php">
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
                        <h1 class="h2 mb-0">Update Employee</h1>
                    </div>


                    <div class="row my-4">
                        <div class="col-lg-7 col-12">
                            <div class="custom-block bg-white">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <h6 class="mb-4"></h6>

                                        <?php

                                        include("db.php");
                                        $empid=$_GET['emp_id'];
                                        $SQL2='SELECT a.EMP_ID, a.NAME, a.EMAIL, a.PHONE, b.USER_NAME 
                                            FROM os_employees a LEFT JOIN os_users b ON a.USER_ID = b.USER_ID WHERE  a.EMP_ID ='.$empid;

                                        $exeSQL2=mysqli_query($conn, $SQL2) or die (mysqli_error($conn));
                                        $row = mysqli_fetch_array($exeSQL2);

                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            $name = $_POST["profile-name"];
                                            $mobile = $_POST["profile-mobile"];
                                            $email = $_POST["profile-email"];
                                            $username = $_POST["profile-username"];
                                            
                                            $SQL3 = "UPDATE os_employees 
                                                     SET NAME = ?, PHONE = ?, email = ?
                                                     WHERE EMP_ID = ?";
                                            
                                            $stmt = $conn->prepare($SQL3);
                                            $stmt->bind_param("sssi", $name, $mobile, $email, $empid);
                                            $stmt->execute();


                                            $SQL5 = "SELECT USER_ID FROM os_employees WHERE emp_id =".$empid ;
                                            $exeSQL5=mysqli_query($conn, $SQL5) or die (mysqli_error($conn));
                                            $row1 = mysqli_fetch_array($exeSQL5);
                                            $userid = $row1["USER_ID"];

                                            $SQL4 = "UPDATE os_users
                                                     SET user_name = ?
                                                     WHERE USER_ID = ?";
                                            
                                            $stmt2 = $conn->prepare($SQL4);
                                            $stmt2->bind_param("si", $username, $userid);
                                            $stmt2->execute();

                                            

                                            echo '<div class="alert alert-success" role="alert">
                                                                Update Succesfully.
                                                            </div>';
                                            exit;
                                            
                                        }
                                        
                                        echo '<form class="custom-form profile-form" action="#" method="post" role="form">';
                                        echo '<label>Employee Name</label>';
                                        echo '<input class="form-control" type="text" name="profile-name" id="profile-name" placeholder="" value='.$row['NAME'].'>';
                                        echo '<label>Mobile NUmber</label>';
                                        echo '<input class="form-control" type="text" name="profile-mobile" id="profile-mobile" placeholder="" value='.$row['PHONE'].'>';
                                        echo '<label>Email Address</label>';
                                        echo '<input class="form-control" type="email" name="profile-email" id="profile-email" placeholder="" value='.$row['EMAIL'].'>';
                                        echo '<hr>';
                                        echo '<label>Username</label>';
                                        echo '<input class="form-control" type="text" name="profile-username" id="profile-username" placeholder=""value='.$row['USER_NAME'].'>';
                                            
                                       
                                            echo '<div class="d-flex">';
                                            echo  '<a href="employees.php" class="d-flex" >';
                                            echo  '<button type="button" class="form-control me-3" >';
                                                     
                                                    echo "Cancel";
                                                echo "</button>";
                                                echo "</a>";

                                                echo '<a href="employees.php" class="d-flex" >';
                                                echo '<button type="submit" class="form-control ms-2">';
                                                    echo 'Update Employee';
                                                echo '</button>';
                                                echo '</a>';
                                            echo '</div>';
                                            ?>
                                        </form>
                                    </div>

                                    
                                </div>
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


    
    </body>
</html>