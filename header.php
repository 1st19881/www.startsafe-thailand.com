 <!-- Navbar start -->
 <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-mobile-alt me-2 text-secondary"></i> <a href="#" class="text-white">098-9870198</a></small>
                    <small class="me-3"><i class="fas fa-mobile-alt me-2 text-secondary"></i><a href="#" class="text-white">092-9986161</a></small>
                </div>
                <div class="top-link pe-2">
                   <img src="images/icon/icon2.png" class="me-2" width="25px" alt="">
                   <img src="images/icon/icon3.png" class="me-2" width="25px" alt="">
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.php" class="navbar-brand">
                    <img src="images/logo/logo.svg"  width="150px" alt="">
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link <?php if($menu == "index"){echo "active";}  ?>">หน้าหลัก</a>
                        <a href="about.php" class="nav-item nav-link <?php if($menu == "about"){echo "active";}  ?>">เกี่ยวกับเรา</a>
                        <a href="product.php" class="nav-item nav-link <?php if($menu == "product"){echo "active";}  ?>">สินค้าของเรา</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="cart.html" class="dropdown-item">Cart</a>
                                <a href="chackout.html" class="dropdown-item">Chackout</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="#!" class="nav-item nav-link">ผลงานของเรา</a>
                        <a href="contact.php" class="nav-item nav-link <?php if($menu == "contact"){echo "active";}  ?>">ติดต่อเรา</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-secondary"></i></button>
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->
