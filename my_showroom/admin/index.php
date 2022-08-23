<?php include('partials/menu.php'); ?>

<!-- Main Content Start -->
<div class="main">
    <div class="wrapper">

        <h1>DASHBOARD</h1>
        <br />
        <br />
        <br />
        <?php

        if (isset($_SESSION['login_success'])) {

            if ($_SESSION['logun_success'] = "true") {
                echo "<div class='alert alert-success alert-dismissible fade show' id='success-alert'role='alert'>
                            <strong>Login Successfull! </strong> Welcome!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            </div>";
            }
            unset($_SESSION['login_success']);
        }
        ?>
        <br />
        <br />

        <div class="row">

            <div class="box col-2 text-center">
                <h1>5</h1> <br />
                Cars
            </div>

            <div class="box col-2 text-center">
                <h1>5</h1> <br />
                Different Variants
            </div>

            <div class="box col-2 text-center">
                <h1>5</h1> <br />
                Different Colors
            </div>

            <div class="box col-2 text-center">
                <h1>5</h1> <br />
                New Orders
            </div>

            <div class="box col-2 text-center">
                <h1>5</h1> <br />
                Completed Orders
            </div>


        </div>

        <div class="clearfix">

        </div>
    </div>
</div>

<!-- Main Content End -->
<?php include('partials/footer.php'); ?>