<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Đăng nhập</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="Username">Tên</label>
									<input id="Username" type="text" class="form-control" name="Username" value=""
										required autofocus>
									<div class="invalid-feedback">
										Tên không chính xác
									</div>
								</div>

								<div class="form-group">
									<label for="Password">Mật khẩu
										<a href="forgot.php" class="float-right">
											Quên mật khẩu?
										</a>
									</label>
									<input id="Password" type="password" class="form-control" name="Password" required
										data-eye>
									<div class="invalid-feedback">
										Bắt buộc có mật khẩu
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember"
											class="custom-control-input">
										<label for="remember" class="custom-control-label">Ghi nhớ tôi</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="button" class="btn btn-primary btn-block" id="loginButton">
										Đăng nhập
									</button>
								</div>
								<div class="mt-4 text-center">
									Không có tài khoản? <a href="register.php">Tạo mới</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; CSE
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(document).ready(() => {
			$("#loginButton").click(() => {
				$('.filter_data').html('<div id="loading" style="" ></div>');
				let Username = document.getElementById("Username").value;
				let Password = document.getElementById("Password").value;
				$.ajax({
					url: "../../admin/user/fetch.php",
					method: "POST",
					data: {
						Username: Username,
						Password: Password
					},
					success: function (data) {
						if (data != "False") {
							let result = data.split(",");
							console.log("Save to local storage")
							window.localStorage.setItem('UserId', result[0])
							window.localStorage.setItem('Username', result[1])
							window.localStorage.setItem('Password', result[2])
							window.localStorage.setItem('FirstName', result[3])
							window.localStorage.setItem('LastName', result[4])
							window.localStorage.setItem('Age', result[5])
							window.localStorage.setItem('Gender', result[6])
							window.localStorage.setItem('Email', result[7])
							window.localStorage.setItem('ImageUrl', result[8])
						}
						window.location.href = "../index.php";
					}
				});
			})
		})
	</script>
	<!-- 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script> -->
</body>

</html>