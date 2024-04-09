<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mini Finance - Settings</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-mini-finance.css" rel="stylesheet">
        
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <main class="main-wrapper">
                    <div class="row my-4">
                        <div class="col-lg-7 col-12" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; display: flex; align-items: center; justify-content: center;">
                            <div class="custom-block bg-white">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                       
                                    <h5 class="navbar-brand"  style="display: flex; justify-content: center; font-size: 25px;">
                                            <span>Organic</span><span style="color: lightseagreen;">Snacks</span></h5>
                                            <hr><br>
                                        <h6 class="mb-4">User Login</h6>

                                            <?php
                                                include ("db.php");
                                                
                                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                    $username = $_POST["user-name"];
                                                    $password = $_POST["pass"];
                                                    $SQL = "SELECT * FROM os_users WHERE user_name = ? AND password = ?";
                                                    $stmt = $conn->prepare($SQL);
                                                    $stmt->bind_param("ss", $username, $password);
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();

                                                  
                                                    if ($result->num_rows == 1) {
                                                        
                                                        header("Location: index.php");

                                                        exit;
                                                    } else {
                                
                                                        echo '<div class="alert alert-danger" role="alert">
                                                                Invalid username or password.
                                                            </div>';
                                                    }
                                                }
                                            ?>

                                        <form class="custom-form profile-form" action="#" method="post" role="form">
                                            <label for="user-name">Username:</label>
                                            <input class="form-control" type="text" name="user-name" id="user-name" placeholder="John Doe">
                                            <label for="pass">Password:</label>
                                            <input class="form-control" type="password" name="pass" id="pass" placeholder="*******">
                                            <div class="d-flex">
                                                <button type="button" class="form-control me-3">
                                                    Clear
                                                </button>
                                                <button type="submit" class="form-control ms-2">
                                                    Log In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>