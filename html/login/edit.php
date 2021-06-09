<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Cập nhật thông tin cá nhân</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="Username">Tên tài khoản<noscript></noscript></label>
									<input id="Username" type="text" class="form-control" name="Username" required autofocus>
									<div class="invalid-feedback">
										Tên tài khoản là gì?
									</div>
								</div>

								<div class="form-group">
									<label for="Firstname">Tên<noscript></noscript></label>
									<input id="Firstname" type="text" class="form-control" name="Firstname" required autofocus>
									<div class="invalid-feedback">
										Tên?
									</div>
								</div>

								<div class="form-group">
									<label for="Lastname">Họ<noscript></noscript></label>
									<input id="Lastname" type="text" class="form-control" name="Lastname" required autofocus>
									<div class="invalid-feedback">
										Họ?
									</div>
								</div>

								<div class="form-group">
									<label for="Age">Tuổi<noscript></noscript></label>
									<input id="Age" type="text" class="form-control" name="Age" required autofocus>
									<div class="invalid-feedback">
										Tuổi?
									</div>
								</div>

								<div class="form-group">
									<label for="Gender">Giới tính<noscript></noscript></label>
									<input id="Gender" type="text" class="form-control" name="Gender" required autofocus>
									<div class="invalid-feedback">
										Giới tính?
									</div>
								</div>

								<div class="form-group">
									<label for="Email">Địa chỉ email</label>
									<input id="Email" type="email" class="form-control" name="Email">
									<div class="invalid-feedback">
										Email nhập không chính xác
									</div>
								</div>

								<div class="form-group">
									<label for="Password">Mật khẩu</label>
									<input id="Password" type="password" class="form-control" name="Password" required data-eye>
									<div class="invalid-feedback">
										Bắt buộc có mật khẩu
									</div>
								</div>

								<div class="form-group m-0">
									<button type="button" id="editButton" class="btn btn-primary btn-block">
										Thay đổi
									</button>
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
			document.getElementById("Username").value = localStorage.getItem("Username");
			document.getElementById("Firstname").value = localStorage.getItem("FirstName");
			document.getElementById("Lastname").value = localStorage.getItem("LastName");
			document.getElementById("Age").value = localStorage.getItem("Age");
			document.getElementById("Gender").value = localStorage.getItem("Gender");
			document.getElementById("Email").value = localStorage.getItem("Email");
			document.getElementById("Password").value = localStorage.getItem("Password");
			$("#editButton").click(() => {
				let UserId = localStorage.getItem("UserId");
				let Username = document.getElementById("Username").value;
				let Password = document.getElementById("Password").value;
				let FirstName = document.getElementById("Firstname").value
				let LastName = document.getElementById("Lastname").value;
				let Age = document.getElementById("Age").value;
				let Gender = document.getElementById("Gender").value;
				let Email;
				if (document.getElementById("Email").value){
					FirstName = document.getElementById("Email")
				} else {
					Email = "";
				};
				let ImageUrl;
				if (document.getElementById("ImageUrl")){
					ImageUrl = document.getElementById("ImageUrl").value
				} else {
					ImageUrl = "../images/male.jpg";
				};

				$.ajax({
					url: "../../admin/user/edit.php",
					method: "POST",
					data: {
						UserId: UserId,
						Username: Username,
						Password: Password,
						FirstName: FirstName,
						LastName: LastName,
						Age: Age,
						Gender: Gender,
						Email: Email,
						ImageUrl: ImageUrl
					},
					success: function (data) {
						if (data){
							localStorage.setItem("UserId", UserId)
							localStorage.setItem("Username", Username)
							localStorage.setItem("Password", Password)
							localStorage.setItem("FirstName", FirstName)
							localStorage.setItem("LastName", LastName)
							localStorage.setItem("Age", Age)
							localStorage.setItem("Email", Email)
							localStorage.setItem("ImageUrl", ImageUrl)
						}
						window.location.reload()
					}
				});
			})
		});
	</script>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="js/my-login.js"></script>
</body>
</html>