
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Event Magnet</a>
		<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link me-2" href="#">Venues</a>
				</li>
				<li class="nav-item">
					<a class="nav-link me-2" href="facilities.php">Facility</a>
				</li>
				<li class="nav-item">
					<a class="nav-link me-2" href="#">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Get in Touch</a>
				</li>
			</ul>
			<fdiv class="d-flex">
				<button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginmodal">
					Login
				</button>
				<button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registermodal">
					Register
				</button>
		</div>
	</div>
	</div>
</nav>
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="">
				<div class="modal-header">
					<h5 class="modal-title">
						<i class="bi bi-person fs-3 me-2"></i>User Login
					</h5>
					<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Email address</label>
						<input type="email" class="form-control shadow-none">
					</div>
					<div class="mb-4">
						<label class="form-label">Password</label>
						<input type="password" class="form-control shadow-none">
					</div>
					<div class="d-flex align-items-center justify-content-between">
						<Button type="submit" class="btn btn-dark shadow-none">
							LOGIN
						</Button>
						<a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>


<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="">
				<div class="modal-header">
					<h5 class="modal-title">
						<i class="bi bi-person fs-3 me-2"></i>User Registration
					</h5>
					<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<span class="badge bg-light text-dark mb-3 text-wrap lh-base">You Details Must Be Valid</span>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Email address</label>
								<input type="email" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Number</label>
								<input type="email" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Picture</label>
								<input type="file" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Address</label>
								<input type="text" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Age</label>
								<input type="number" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Date of Birth</label>
								<input type="date" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Password</label>
								<input type="password" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Confirm Password</label>
								<input type="password" class="form-control shadow-none">
							</div>

						</div>
						<div class="text-center my-1">
							<button type="submit" class="btn btn-dark shadow-none">
								REGISTER
							</button>

						</div>
						<!-- <div class="mb-3">
						<label class="form-label">Email address</label>
						<input type="email" class="form-control shadow-none">
					</div>
					<div class="mb-4">
						<label class="form-label">Password</label>
						<input type="password" class="form-control shadow-none">
					</div>
					<div class="d-flex align-items-center justify-content-between">
						<Button type="submit" class="btn btn-dark shadow-none">
							LOGIN
						</Button>
						<a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
					</div> -->
					</div>

			</form>

		</div>
	</div>
</div>