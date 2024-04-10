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
                        <h1 class="h2 mb-0">Employees</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-12 col-12">
                            <div class="custom-block bg-white">
                                <h5 class="mb-4">All Employees</h5>

                                <div class="table-responsive">
                                    <table class="account-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Employee Number</th>

                                                <th scope="col">Employee Name</th>


                                            </tr>
                                        </thead>
                                        <?php include ("db.php");
                                         $SQL1="select emp_id, name from os_employees";
                                         $exeSQL1=mysqli_query($conn, $SQL1) or die (mysqli_error($conn));
                                         
                                        echo "<tbody>";
                                        while ($arrayp=mysqli_fetch_array($exeSQL1)){
                                           echo "<tr>";
                                                echo "<td scope='row'>".$arrayp['emp_id']."</td>";

                                                echo "<td scope='row'><div class='d-flex'>";
                                                        echo "<a href='view_employee.php?emp_id=".$arrayp['emp_id']."'><span>".$arrayp['name']."</span></a>&nbsp";
                                                echo "</div></td>";

                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                         
                                        ?>
                                    </table>
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

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/apexcharts.min.js"></script>
        <script src="js/custom.js"></script>

        <script type="text/javascript">
            var options = {
              series: [13, 43, 22],
              chart: {
              width: 380,
              type: 'pie',
            },
            labels: ['Balance', 'Expense', 'Credit Loan',],
            responsive: [{
              breakpoint: 480,
              options: {
                chart: {
                  width: 200
                },
                legend: {
                  position: 'bottom'
                }
              }
            }]
            };

            var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
            chart.render();
        </script>

        <script type="text/javascript">
            var options = {
              series: [{
              name: 'Income',
              data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
              name: 'Expense',
              data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
              name: 'Transfer',
              data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
              chart: {
              type: 'bar',
              height: 350
            },
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
              },
            },
            dataLabels: {
              enabled: false
            },
            stroke: {
              show: true,
              width: 2,
              colors: ['transparent']
            },
            xaxis: {
              categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
              title: {
                text: '$ (thousands)'
              }
            },
            fill: {
              opacity: 1
            },
            tooltip: {
              y: {
                formatter: function (val) {
                  return "$ " + val + " thousands"
                }
              }
            }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>

    </body>
</html>