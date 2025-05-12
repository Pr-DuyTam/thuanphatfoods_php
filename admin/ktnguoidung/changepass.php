<?php include("../inc/top.php"); ?>

<!-- Form cập nhật thông tin ng dùng-->
<div class="row">
  <div class="col-12 col-md-10 m-auto">
    <div class="card p-5">
      <div class="card-header">
        <h4 class="text-info text-center">ĐỔI MẬT KHẨU</h4>
      </div>
      <div class="card-body">

        <!-- Form đổi mật khẩu -->
        <form method="post" name="f" action="../ktnguoidung/index.php">
          <div class="my-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" name="txtemail"
              value="<?php echo $_SESSION["nguoidung"]["email"]; ?>" disabled>
          </div>
          <div class="my-3">
            <label>Mật khẩu mới</label>
            <div style="position: relative;">
              <input class="form-control" type="password" name="txtmatkhaumoi" id="password-input" 
                placeholder="Mật khẩu mới" required>
              <button type="button" id="toggle-password" style="
                position: absolute; 
                right: 10px; 
                top: 50%; 
                transform: translateY(-50%);
                background: none; 
                border: none; 
                cursor: pointer;">
                👁️
              </button>
            </div>
          </div>
          <div class="my-3 text-center">
            <input type="hidden" name="action" value="doimatkhau">
            <input class="btn btn-primary" type="submit" value="Lưu">
            <input class="btn btn-warning" type="reset" value="Hủy">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include("../inc/bottom.php"); ?>

<!-- JavaScript để bật/tắt hiển thị mật khẩu -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password-input");
    const togglePassword = document.getElementById("toggle-password");

    // Mặc định mật khẩu bị ẩn và nút hiển thị biểu tượng 👁️
    passwordInput.type = "password";
    togglePassword.textContent = "🙈";

    togglePassword.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            this.textContent = "👁️"; // Đổi biểu tượng thành ẩn mắt
        } else {
            passwordInput.type = "password";
            this.textContent = "🙈"; // Đổi biểu tượng thành hiện mắt
        }
    });
});
</script>
