<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<title>Đăng nhập - Thuận Phát Foods</title>

	<link href="../inc/css/app.css" rel="stylesheet">
	<script src="../inc/js/app.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Xin chào!</h1>
							<p class="lead">
								Vui lòng đăng nhập để tiếp tục
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="index.php" method="post">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="txtemail"
												placeholder="Nhập email" />
										</div>
										<!-- <div class="mb-3">
											<label class="form-label">Mật khẩu</label>
											<input class="form-control form-control-lg" type="password"
												name="txtmatkhau" placeholder="Nhập mật khẩu" />
										</div> -->
										<div class="mb-3">
											<label class="form-label">Mật khẩu</label>
											<div style="position: relative;">
												<input class="form-control form-control-lg" type="password"
													name="txtmatkhau" id="password-input" placeholder="Nhập mật khẩu" />
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

										<div class="d-grid gap-2 my-3">
											<input type="hidden" name="action" value="xldangnhap">
											<input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Chưa có tài khoản? <a href="#" id="btn-register">Đăng ký</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- JavaScript đặt ở cuối để đảm bảo chạy đúng -->
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const registerBtn = document.getElementById("btn-register");
			if (registerBtn) {
				registerBtn.addEventListener("click", function (event) {
					event.preventDefault(); // Ngăn chặn hành vi mặc định
					alert("Liên hệ với Admin để được đăng ký tài khoản. Xin cảm ơn!");
				});
			}
		});

		document.addEventListener("DOMContentLoaded", function () {
			const passwordInput = document.getElementById("password-input");
			const togglePassword = document.getElementById("toggle-password");

			// Đảm bảo mặc định mật khẩu bị ẩn và nút hiển thị 👁️
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
</body>

</html>