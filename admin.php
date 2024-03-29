<?php
include "php/showmsg.php";
?>

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

<body>
    <!-- Start: Navbar Centered Brand -->
    <nav class="navbar navbar-light navbar-expand-md py-3" style="margin: 10px;margin-right: 10px;margin-left: 10px;margin-top: 16px;margin-bottom: 20px;background: #ffffff;border-color: var(--bs-white);border-radius: 16px;box-shadow: 0px 2px 8px 0px rgba(0,0,0,0.15);">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="index.html"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: var(--bs-red);"><i class="fas fa-car"></i></span><span>SpeedRent</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">All Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Category</a></li>
                </ul>
                <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="d-none d-md-block"><button class="btn btn-light me-2" type="button" style="background: var(--bs-gray-200);">Register</button><a class="btn btn-primary" role="button" href="#" style="background: var(--bs-red);border-style: none;">Login</a></div>
        </div>
    </nav><!-- End: Navbar Centered Brand -->
    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;">
        <div class="row gy-2 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4">
            <div class="col">
                <div class="card" style="border-radius: 15px;box-shadow: 0px 0px 3px rgba(13,110,253,0.4), inset 0px 0px 4px rgba(13,110,253,0.4);border: 1px solid var(--bs-blue);">
                    <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                        <div class="row">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2">Total our</h6>
                                <h4>Cars</h4>
                            </div>
                            <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                                <h4 style="font-size: 35px;">100</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border-radius: 15px;border: 1px solid var(--bs-red);box-shadow: 0px 0px 3px rgba(220,53,69,0.39), inset 0px 0px 4px #dc354564;">
                    <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                        <div class="row">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2">Total other</h6>
                                <h4>Cars</h4>
                            </div>
                            <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                                <h4 style="font-size: 35px;">100</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border-radius: 15px;box-shadow: 0px 0px 3px rgba(255,193,7,0.4), inset 0px 0px 4px rgba(255,193,7,0.4);border: 1px solid var(--bs-yellow);">
                    <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                        <div class="row">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2">Total</h6>
                                <h4>Orders</h4>
                            </div>
                            <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                                <h4 style="font-size: 35px;">100</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border-radius: 15px;box-shadow: 0px 0px 3px rgba(32,201,151,0.4), inset 0px 0px 4px rgba(32,201,151,0.4);border: 1px solid var(--bs-teal);">
                    <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                        <div class="row">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2">Total</h6>
                                <h4>Users</h4>
                            </div>
                            <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                                <h4 style="font-size: 35px;">100</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <h1 style="text-align: center;color: var(--bs-red);">All Orders</h1>
        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.16);">
            <div class="col">
                <div class="row row-cols-xl-2 row-cols-xxl-2">
                    <div class="col-lg-5 col-xl-4 col-xxl-4 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center" style="border-right-style: solid;border-right-color: rgba(33,37,41,0.3);"><img class="d-flex justify-content-center" src="assets/img/0502da25d3a9640ad861574a516a4611.png" style="width: 100%;min-width: auto;" width="auto" height="auto"></div>
                    <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center">
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Order No</h6>
                                <h4 style="font-size: 25px;">10283</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car No</h6>
                                <h4 style="font-size: 25px;">10283</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User No</h6>
                                <h4 style="font-size: 25px;">10283</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Cost</h6>
                                <h4 style="font-size: 25px;">$136.00</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Payment</h6>
                                <h4 style="font-size: 25px;">Online</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Pick Up</h6>
                                <h4 style="font-size: 25px;">Yes</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col-lg-5 col-xl-4 col-xxl-5 d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Date</h6>
                                <h4 style="font-size: 25px;">23-03-2023</h4>
                            </div>
                            <div class="col d-flex d-xl-flex flex-column align-items-center justify-content-xl-end align-items-xl-start align-items-xxl-center" style="padding-bottom: -1px;">
                                <div class="row d-xl-flex d-xxl-flex justify-content-xl-end align-items-xxl-center" style="width: 100%;">
                                    <div class="col-lg-12 col-xl-8 col-xxl-8">
                                        <div class="input-group"><select id="inputGroupSelect04" class="form-select">
                                                <option value="accept" selected="">Accept</option>
                                                <option value="reject">Reject</option>
                                                <option value="ntc">Need To Contact</option>
                                            </select><button class="btn btn-primary" type="button" style="background: var(--bs-red);">Save Data</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex d-xl-flex justify-content-end align-items-center justify-content-xl-end align-items-xxl-center" style="padding-top: 20px;"><a class="btn btn-success" role="button" href="admin-orders.html">See More</a></div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Cars..</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4"><img src="assets/img/7fc587dbea757b6ff5ecdaf4aecfce04.png" style="width: 100%;"></div>
                    <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car</h6>
                            <h4 style="font-size: 25px;">TOYOTA</h4>
                            <h4 style="font-size: 25px;">V8</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-4 d-xl-flex d-xxl-flex justify-content-xl-end justify-content-xxl-end align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Cost per hour</h6>
                            <h4 style="font-size: 25px;">$150.00</h4><button class="btn btn-success d-lg-flex d-xxl-flex align-items-lg-center align-items-xxl-center" type="button" style="height: 31px;">See More</button>
                        </div>
                    </div>
                </div>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);"><a class="btn btn-success" role="button" href="admin-cars.html">See All Cars</a></div><!-- End: See More Button -->
        </div><!-- End: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Messages..</h1><!-- Start: User Massege -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php
                show_msg();
                ?>
            </div>
            <!-- End: User Massege -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);">
                <button class="btn btn-success" type="button" onclick="window.location.href='/admin-msg.html'">See All Messages</button>
            </div><!-- End: See More Button -->
        </div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - No Cars -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;height: 225.5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Cars..</h1>
            <div class="container d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-end" style="height: 98px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-192 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 56px;color: var(--bs-gray-500);">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M64 352c17.69 0 32-14.32 32-31.1V64.01c0-17.67-14.31-32.01-32-32.01S32 46.34 32 64.01v255.1C32 337.7 46.31 352 64 352zM64 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S86.09 400 64 400z"></path>
                </svg></div>
            <div class="container d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center"><small style="color: var(--bs-gray-500);">No Cars</small></div>
        </div><!-- End: Our Cars - No Cars -->
        <!-- Start: Our Cars - No Cars -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;height: 225.5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Messages..</h1>
            <?php
            // show_msg();
            ?>
        </div><!-- End: Our Cars - No Cars -->
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Users..</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4 col-xxl-2 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                            <h4 style="font-size: 25px;">10234</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-6 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Name</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">&nbsp;Dineth Siriwardhana</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Income</h6>
                            <h4 style="font-size: 25px;">$150.00</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-1 col-xxl-1 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center align-items-xxl-center" style="padding-left: 1px;margin-bottom: -12px;">
                        <div class="d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" style="font-size: 38px;color: var(--bs-red);">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                            </svg></div>
                    </div>
                </div>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);"><a class="btn btn-success" role="button" href="admin-cars.html">See All Cars</a></div><!-- End: See More Button -->
        </div><!-- End: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Send Message..</h1>
            <div class="row">
                <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <!-- Start: Search Input (responsive) -->
                    <div class="float-start float-md-end d-xxl-flex justify-content-xxl-start mt-5 mt-md-0 search-area" style="margin-top: 7px;"><i class="fas fa-search float-start search-icon"></i><input class="float-start float-sm-end custom-search-input" type="search" placeholder="Type to filter by Username"></div><!-- End: Search Input (responsive) -->
                </div>
            </div><textarea style="margin-top: 15px;width: 100%;height: 136px;border-radius: 5px;border-style: solid;border-color: rgba(0,0,0,0.22);"></textarea><!-- Start: See More Button -->
            <div class="container d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);padding-right: 0px;"><button class="btn btn-success" type="button">Send Message</button></div><!-- End: See More Button -->
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>