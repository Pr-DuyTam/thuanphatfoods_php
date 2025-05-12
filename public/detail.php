<?php include("inc/top.php"); ?>
<style>
    @media (min-width: 1024px) {
        .mota {
            margin-right: 70px;
            margin-top: -273px;
            /* Khoảng cách trên cùng */
            float: right;
            /* Đưa phần mô tả về bên phải */
            max-width: 40%;
            /* Giới hạn độ rộng để không tràn màn hình */
            word-wrap: break-word;
            /* Đảm bảo nội dung không tràn */
            overflow: hidden;
            /* Ngăn nội dung bị tràn */
        }
        .text-danger{
            font-size: 20px !important;
        }
    }
</style>

<div class="container">
    <div class="row" style="margin-top: -70px;">
        <div class="col-sm-9">

            <h3 class="text-danger detail-dm tieudesm" style="font-size: 23px; width: 100%; text-align: center; ">
                <?php echo $mhct["tenmathang"]; ?>
            </h3>
            
            <div>
                <img class="detail-img" style="width:50%" src="../<?php echo $mhct["hinhanh"]; ?>">
            </div>
        </div>

        <div class="col-sm-3"
            style="height: full; width: full; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h3 class="text-danger detail-dm tieudelg" style=" font-size: 22px; width: 100%; text-align: center; ">
                <?php echo $mhct["tenmathang"]; ?>
            </h3>

            <div class="giaban">
                <h4 class="text-primary text-giaban" style="font-size: 20px; margin-top: 10px;">Giá bán:
                    <span class="text-danger">
                        <?php echo number_format($mhct["giaban"]); ?>
                         vnd
                    </span>
                </h4>
                <form method="post" class="form-inline">
                    <input type="hidden" name="action" value="chovaogio">
                    <input type="hidden" name="id" value="<?php echo $mhct["id"]; ?>">
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control text-number" name="soluong" value="0">
                        </div>
                        <div class="col detail-submit">
                            <input type="submit" class="btn btn-success" value="Chọn mua">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <p style="color: red; font-size: 20px;"><b>Mô tả sản phẩm: </b> </p>
        <p class="dec">
            <?php echo $mhct["mota"]; ?>
        </p>
    </div>

</div>


<?php include("inc/bottom.php"); ?>