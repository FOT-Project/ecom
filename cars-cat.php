<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E comm</title>
    <link rel="icon" type="image/png" sizes="64x64" href="assets/img/Screenshot%202023-02-08%20at%2011-33-24%20E%20comm.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="margin-bottom: 36px;">
    <div style="background: url(&quot;assets/img/6426002.jpg&quot;) center / cover no-repeat, var(--bs-red);height: 250px;">
        <div></div>
    </div><!-- Start: Navbar Centered Brand -->
    <nav class="navbar navbar-light navbar-expand-md py-3" style="margin: -5px;margin-right: 20px;margin-left: 21px;margin-top: -36px;margin-bottom: -5px;background: #ffffff;border-color: var(--bs-white);border-radius: 16px;box-shadow: 0px 2px 8px 0px rgba(0,0,0,0.15);">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="index.html"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: var(--bs-red);"><i class="fas fa-car"></i></span><span>SpeedRent</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">All Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.html">Category</a></li>
                </ul>
                <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="d-none d-md-block"><button class="btn btn-light me-2" type="button" style="background: var(--bs-gray-200);">Register</button><a class="btn btn-primary" role="button" href="#" style="background: var(--bs-red);border-style: none;">Login</a></div>
        </div>
    </nav><!-- End: Navbar Centered Brand -->
    <!-- Start: 1 Row 2 Columns -->
    <div class="container" style="width: 95%;max-width: 95%;">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2" style="margin-top: 70px;margin-right: -18px;">
            <!-- Start: <Filter> Item Col -->
            <div class="col-lg-9 col-xl-9 col-xxl-10" style="margin-top: -5px;width: 100%;">
                <div class="container" style="margin-top: 0px;">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 justify-content-between" style="display: flex;margin-right: -12px;margin-top: 8px;margin-bottom: 20px;">
                        <!-- Start: Item Col -->
                      <?php include "php/showCars/showCarCategory.php" ?>
                    </div>
                </div>
            </div><!-- End: <Filter> Item Col -->
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>