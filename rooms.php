<?php
include "links.php";
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CareWell Hospital</title>
	<style>
		* {
			font-family: 'Poppins', sans-serif;
		}

		.h-font {
			font-family: 'Merienda', cursive;
		}

		.custom-bg {
			background-color: #2ec1ac;
		}

		.custom-bg:hover {
			background-color: #279ebc;
		}

		.form-available {
			margin-top: -50px;
			z-index: 2;
			position: relative;
		}

		.h-line {
			width: 150px;
			margin: 0 auto;
			height: 1.7px;
		}

		@media screen and (max-width: 575px) {
			.form-available {
				margin-top: 25px;
				padding: 0 35px;
			}
		}
	</style>
</head>

<body class="bg-light">
	<?php
	include "nav.php"
	?>
	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
		<div class="h-line bg-dark"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 mb-4">
				<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
					<div class="container-fluid flex-lg-column align-items-stretch">
						<h4 class="mt-2">FILTERS</h4>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filter">
							<div class="border bg-light p-3 rounded mb-3">
								<h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
								<label class="form-label">Check-In</label>
								<input type="date" class="form-control shadow-none mb-3">
								<label class="form-label">Check-Out</label>
								<input type="date" class="form-control shadow-none">

							</div>
							<div class="border bg-light p-3 rounded mb-3">
								<h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
								<div class="d-flex">
									<div class="me-3">
										<label class="form-label">Adults</label>
										<input type="number" class="form-control shadow-none">
									</div>
									<div>
										<label class="form-label">Children</label>
										<input type="number" class="form-control shadow-none">
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<div class="col-lg-9 col-md-12 px-4">
				<?php
				$query = "SELECT * FROM room_details ";
				$res = mysqli_query($connect, $query);
				while ($row = mysqli_fetch_assoc($res)) {
				?>
					<div class="card mb-3 border-0 shadow">
						<div class="row g-0 p-3 align-items-center">
							<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
								<img src="Admin/assets/<?php echo $row["Picture"]; ?>" class="img-fluid rounded">
							</div>
							<div class="col-md-5 px-lg-3 px-md-3 ">
								<h5 class="mb-2"><?php echo $row["RoomName"];?></h5>
								<div class="d-flex mb-2">
									<div class="me-3">
										<div class="Area">
											<h6 class="mb-1">Area</h6>
											<span class="badge rounded-pill bg-light text-dark text-wrap">
												<?php echo $row["RoomArea"]; ?>
												sq.ft
											</span>
										</div>
									</div>
									<div class="Quantity">
										<h6 class="mb-1">Quantity</h6>
										<span class="badge rounded-pill bg-light text-dark text-wrap">
											<?php echo $row["Quantity"]; ?>
										</span>
									</div>
								</div>
								<div class="guests mb-2">
									<h6 class="mb-1">Guests</h6>
									<span class="badge rounded-pill bg-light text-dark text-wrap">
										<?php echo $row["Adult"]; ?>
										Adults
									</span>
									<span class="badge rounded-pill bg-light text-dark text-wrap">
										<?php echo $row["Child"]; ?>
										Children
									</span>
								</div>
								<div class="description">
									<h6 class="mb-1">Description</h6>
									<p><?php echo $row["Description"]; ?></p>
								</div>
							</div>
							<div class="col-md-2 text-center">
								<h6 class="mb-4">$<?php echo $row["Price"]; ?> Per Night </h6>
								<a href="booknow.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
							</div>
						</div>
					</div>
					<?php
				}
		?>
			</div>
		
		</div>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>