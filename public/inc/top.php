<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Thêm Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Liên kết tệp CSS của bạn -->
    <link href="./inc/css/styles.css" rel="stylesheet" /> <!-- styles.css -->
    <link href="./inc/css/main.css" rel="stylesheet" /> <!-- main.css -->
    <link href="./inc/css/bash.css" rel="stylesheet" /> <!-- bash.css -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/products/logo/logo.png" sizes="64x64" type="image/png">

    <!-- Liên kết font Montserrat Black từ Google Fonts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Thêm Bootstrap JavaScript (vị trí đúng của file JS) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>

    <title>Thuận Phát Foods</title>

</head>

<body id="top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5 container-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand logo-left d-lg-block logo-right" href="index.php">
                        <img src="../images/products/logo/logo.png" alt="Logo" style="height: 60px;">
                    </a>
                    <!-- Menu -->

                    <div class="hamburger-menu">
                        <input id="menu__toggle" type="checkbox" />
                        <label class="menu__btn" for="menu__toggle">
                            <span></span>
                        </label>
                        <div class="menu__box">
                            <ul class="navbar-nav">
                                <li><a class="menu__item" href="index.php">Trang chủ</a></li>
                                <li><a class="menu__item" href="#">Giới thiệu</a></li>
                                <!-- Trong phần menu__box -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle menu__item" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Danh mục
                                    </a>
                                    <ul class="dropdown-menu submenu">
                                        <?php foreach ($danhmuc as $d): ?>
                                            <li><a class="dropdown-item" href="?action=group&id=<?php echo $d["id"]; ?>">
                                                    <?php echo $d["tendanhmuc"]; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li><a class="menu__item" href="#">Chính sách</a></li>
                                <li><a class="menu__item" href="#">Tin tức</a></li>
                                <li><a class="menu__item" href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
            <form method="post" class="d-flex search-container">
                <input type="hidden" name="action" value="search">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm..." aria-label="Search"
                    name="search">
                <button class="btn btn-outline-dark btn-search" type="submit">
                    <i class="bi-search"></i> <span>Tìm kiếm</span>
                </button>
            </form>


            <!-- giỏ hàng -->
            <a href="index.php?action=giohang" class="header__cart" style="color: black;">
                <div class="header__cart-wrap">
                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                    <span class="header__cart-notice"><?php echo demsoluongtronggio(); ?></span>
                </div>
            </a>
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>
            </div>
        </div>
        </div>
    </nav>

    <!-- Banner-->
    <div id="demo" class="carousel slide shadow" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/products/banner/cover.png" alt="Banner 1" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../images/products/banner/cover.png" alt="Banner 2" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../images/products/banner/cover.png" alt="Banner 3" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Section-->
    <section class="py-5 reveal">
        <div class="container px-4 px-lg-5 mt-5">