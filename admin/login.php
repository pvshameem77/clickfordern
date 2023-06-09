<?php
include('config/dbconfig.php');
include('includes/header.php');
session_start();

if ($dbconfig) {
    //echo "Database Connected";
} else {
    header("Location: database/dbconfig.php");
}

if (isset($_SESSION['username'])) {
    header('Location: index-admin.php');
    exit(0);
}


?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-5">

                                <!-- <?php // include('messages.php');
                                ?>  -->

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Admin Login Here</h1>
                                    <?php
                                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                                        echo '<h4 class="bg-danger text-white"> ' . $_SESSION['status'] . ' </h4>';
                                        unset($_SESSION['status']);
                                    }
                                    ?>
                                </div>

                                <form class="user" action="login-action.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="username" class="form-control form-control-user" placeholder="User Name or Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                    </div>
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                                    <hr>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>





<?php
include('includes/scripts.php');
?>