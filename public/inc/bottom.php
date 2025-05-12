</div>
</section>
<section>
    <div class="container-fluid reveal">
        <div class="row">
            <!-- Video Section -->
            <!-- <div class="col-md-6">
                <h4 class="fw-bolder text-right" style="color: red;">VIDEO</h4>
                <video id="myVideo" controls>
                    <source src="../images/products/Video/clip3.mp4" type="video/mp4"
                        style="width: 585px; height: 300px;">
                    Video.
                </video>
            </div> -->
            <div class="col-md-6">
                <h4 class="fw-bolder text-right" style="color: red;">VIDEO</h4>
                <iframe id="myVideo" width="585" height="300" src="https://www.youtube.com/embed/BZNAFZcMErM"
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>


            <!-- News Section -->
            <div class="col-md-6 pt-2">
                <h4 class="fw-bolder news" style="color: red;">TIN TỨC</h4>
                <!-- News Items (Images) -->
                <a href="link-to-news-1" class="news-item">
                    <img src="../images/products/danhmuc/anh1.jpg" alt="Image 1" class="news-img">
                    <div class="text-content">
                        <b class="title">Món quà đầy ý nghĩa</b>
                        <p class="description">Thịt bò chất lượng....</p>
                    </div>
                </a>

                <a href="link-to-news-2" class="news-item reveal">
                    <img src="../images/products/danhmuc/anh1.jpg" alt="Image 1" class="news-img">
                    <div class="text-content">
                        <b class="title">Món quà đầy ý nghĩa</b>
                        <p class="description">Thịt bò chất lượng....</p>
                    </div>
                </a>

                <a href="link-to-news-3" class="news-item reveal">
                    <img src="../images/products/danhmuc/anh1.jpg" alt="Image 1" class="news-img">
                    <div class="text-content">
                        <b class="title">Món quà đầy ý nghĩa</b>
                        <p class="description">Thịt bò chất lượng....</p>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <h4 class="fw-bolder partner" style="color: red; text-align: center;">ĐỐI TÁC</h4>
    <div class="logo-container reveal">
        <!-- <button class="arrow arrow-left hidden"></button> -->
        <button class="prev" onclick="moveSlide(-1)" id="prevBtn" disabled>
            <span>&#10094;</span>
        </button>
        <div class="logo-viewport">
            <div class="logo-slider" id="logoSlider">
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 1"></div>
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 2"></div>
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 3"></div>
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 4"></div>
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 5"></div>
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 6"></div>
                <div class="logo-item"><img src="../images/products/logo/logo.png" alt="Logo 7"></div>
            </div>
        </div>
        <button class="next" onclick="moveSlide(1)" id="nextBtn">
            <span>&#10095;</span>
        </button>
        <!-- <button class="arrow arrow-right"></button> -->
    </div>
</section>
<!-- Footer-->
<footer>
    <div class="footer-container">
        <!-- Cột 1: Công ty và chi nhánh -->
        <div class="footer-left">
            <h4>CÔNG TY TNHH ĐẦU TƯ TM SX THUẬN PHÁT</h4>
            <p class="address">
                <i class="bi bi-geo-alt-fill icon-circle"></i>
                <span class="text">
                    534 QL51, KP Lam Sơn, P. Phước Hòa, TP. Phú Mỹ, BRVT
                </span>
            </p>
            <p class="address">
                <!-- <i class="bi bi-telephone icon-circle"></i> -->
                <i class="bi bi-telephone-fill icon-circle"></i>
                <span class="text">0852.939.799</span>
            </p>

            <p class="address">
                <i class="bi bi-envelope-fill icon-circle"></i>
                <span class="text">thuanphatfoodsb@gmail.com</span>
            </p>

            <p class="address">
                <span class="icon-circle text-mst">MST</span>
                <span class="text">3502.516.643</span>
            </p>



            <br>
            <h4 class="text-sub-title">Trụ sở chính</h4>
            <div class="branch">
                <p class="address">
                    <i class="bi bi-geo-alt-fill icon-circle"></i>
                    <span class="text">
                        534 QL51, KP Lam Sơn, P. Phước Hòa, TP. Phú Mỹ, BRVT
                    </span>
                </p>
                <p class="address">
                    <!-- <i class="bi bi-telephone icon-circle"></i> -->
                    <i class="bi bi-telephone-fill icon-circle"></i>
                    <span class="text">0852.939.799</span>
                </p>


            </div>

            <h4 class="text-sub-title">Chi nhánh Đồng Nai</h4>
            <div class="branch">

                <p class="address">
                    <i class="bi bi-geo-alt-fill icon-circle"></i>
                    <span class="text">
                        214 Huỳnh Văn Nghệ, P. Bửu Long, TP. Biên Hòa, Tỉnh Đồng Nai
                    </span>
                </p>
                <p class="address">
                    <!-- <i class="bi bi-telephone icon-circle"></i> -->
                    <i class="bi bi-telephone-fill icon-circle"></i>
                    <span class="text">0852.939.799</span>
                </p>
            </div>
        </div>

        <!-- Cột 2: Chính sách -->
        <div class="footer-center">
            <h4 class="text-sub-list">CHÍNH SÁCH</h4>
            <ul>
                <li><a href="#">Chính sách vận chuyển</a></li>
                <li><a href="#">Chính sách sản phẩm</a></li>
                <li><a href="#">Chính sách hoàn tiền</a></li>
                <li><a href="#">Chính sách bảo hành</a></li>
            </ul>

            <div class="footer-center-cd">
                <h4 class="text-sub-title">Chi nhánh TP.HCM</h4>
                <div class="branch">
                    <p class="address">
                        <i class="bi bi-geo-alt-fill icon-circle"></i>
                        <span class="text">
                            214 Huỳnh Văn Nghệ, P. Bửu Long, TP. Biên Hòa, Tỉnh Đồng Nai
                        </span>
                    </p>
                    <p class="address">
                        <!-- <i class="bi bi-telephone icon-circle"></i> -->
                        <i class="bi bi-telephone-fill icon-circle"></i>
                        <span class="text">0852.939.799</span>
                    </p>
                </div>

                <h4 class="text-sub-title">Chi nhánh Bình Dương</h4>
                <div class="branch">
                    <p class="address">
                        <i class="bi bi-geo-alt-fill icon-circle"></i>
                        <span class="text">
                            214 Huỳnh Văn Nghệ, P. Bửu Long, TP. Biên Hòa, Tỉnh Đồng Nai
                        </span>
                    </p>
                    <p class="address">
                        <!-- <i class="bi bi-telephone icon-circle"></i> -->
                        <i class="bi bi-telephone-fill icon-circle"></i>
                        <span class="text">0852.939.799</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Cột 3: Bản đồ -->
        <div class="footer-map">
            <div style="position: relative;" class="footer-facebook">
                <a href="https://www.facebook.com/phanphoithucphamdonglanhthuanphat/" target="_blank">
                    <img src="../images/users/imagefacebook.png" class="footer-facebook-img" alt="Facebook Page Image"
                        style="width: 100%; height: 100%; display: block; margin: auto;">
                </a>
            </div>


            <div class="footer-map-cd">
                <h4 class="text-sub-title">Chi nhánh Tây Ninh</h4>
                <div class="branch">
                    <p class="address">
                        <i class="bi bi-geo-alt-fill icon-circle"></i>
                        <span class="text">
                            214 Huỳnh Văn Nghệ, P. Bửu Long, TP. Biên Hòa, Tỉnh Đồng Nai
                        </span>
                    </p>
                    <p class="address">
                        <!-- <i class="bi bi-telephone icon-circle"></i> -->
                        <i class="bi bi-telephone-fill icon-circle"></i>
                        <span class="text">0852.939.799</span>
                    </p>
                </div>
                <h4 style="margin-bottom: 20px;" class="text-sub-title">Chi nhánh Đồng Tháp</h4>
                <div class="branch">
                    <p class="address">
                        <i class="bi bi-geo-alt-fill icon-circle"></i>
                        <span class="text">
                            214 Huỳnh Văn Nghệ, P. Bửu Long, TP. Biên Hòa, Tỉnh Đồng Nai
                        </span>
                    </p>
                    <p class="address">
                        <!-- <i class="bi bi-telephone icon-circle"></i> -->
                        <i class="bi bi-telephone-fill icon-circle"></i>
                        <span class="text">0852.939.799</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer dưới cùng -->
    <div class="copyright-section" style="background-color: #c8c8c8;">
        <p class="m-0 text-center text-dark fw-bolder" style="font-size: 14px;">&copy; Copyright Designed by ASU
            Marketing</p>
    </div>
</footer>

<!-- Nút Zalo, Facebook, Gọi điện, và Back to Top -->
<div class="fixed-contact-buttons">
    <a href="https://zalo.me/" title="Chat với chúng tôi qua Zalo" target="_blank" class="fl-google-zalo">
        <img src="../images/products/logo/zalo.png" alt="icon-zalo">
    </a>
    <a href="https://www.facebook.com/phanphoithucphamdonglanhthuanphat/" target="_blank" class="contact-btn facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="tel:0852939799" class="contact-btn phone">
        <i class="fas fa-phone-alt"></i>
    </a>

    <br><br>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<script src="./inc/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Thêm vào cuối thẻ <body> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->
</body>

</html>