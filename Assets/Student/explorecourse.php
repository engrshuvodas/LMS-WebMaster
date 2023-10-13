			<!doctype html>
			<html lang="en">
			<title>
			O4 LMS - Explore
			</title>
			<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<link rel="stylesheet" href="../../CSS/style.css">
			<link rel="icon" href="/home/arslan/Desktop/LMS/Images/favicon.ico" type="image/x-icon">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			</head>
			<body>
				<div class="container-fluid">
					<div class="row sttopbar pb-2 pt-2"> 
						<div class="col-md-2 logo">
							<center><a href="#"><i class="fas fa-book-reader"></i> &nbsp <b>O4 LMS</b></a></center>
						</div>
						<div class="col-md-8 sttopbartitle">
							<center><h3>Learning Management System</h3></center>
						</div>
						<div class="col-md-2 topuser">
							<a href="#"><i class="fas fa-user-circle"></i> &nbsp
							Hi, Arsi !</a>
						</div>
					</div>
					<div class="row stboard">
						<div class="col-md-3 sidenavigation">
							<div class="navigationlink ml-2">
							<br><br>
							<a href="stdashboard.php" class="navhome"><i class="fas fa-home"></i> &nbsp Home</a><br><br>
							<a href="studentprofile.php" class="navprofile"><i class="fas fa-user-alt"></i> &nbsp My Profile</a><br><br>
							<a href="explorecourse.php" class="navexplore"><i class="fas fa-search"></i> &nbsp Explore Courses</a><br><br>
							<a href="../Logindesign.php" class="navsignout"><i class="fas fa-sign-out-alt"></i> &nbsp Signout</a><br><br>
							</div>
						</div>
						<div class="col-md-9 content mt-4 pl-5">
							<div class="row">
							<div class="card mr-5" style="width: 80rem;">
								<div class="card-body">
                                        <h5 class="card-title">Explore Course</h5>
										<table class="table table-sm">
												<thead class="thead-dark">
												<tr>
													<th>Course Title</th>
													<th>Department</th>
													<th>Semester</th>
													<th>Year</th>
													<th>ID</th>
													<th>Description</th>
												</tr>
												</thead>
												<?php
												include("../Backend/connection.php");
												$sql = "SELECT * from courses"; 
												$result = $con-> query($sql);
												if ($result-> num_rows > 0) {
													while ($row = $result-> fetch_assoc()) {
														echo "<tr><td>". $row["coursetitle"] ."</td><td>". $row["department"] ."</td><td>" . $row["semester"] ."</td><td>" . $row["year"] ."</td><td>" . $row["courseid"] ."</td><td>" . $row["description"] ."</td></tr>";
													}
													echo"</table>";
												}
												$con-> close();
												?>
											</table>
								</div>
							</div>
							</div>
							</div>
					</div>
					<!-- footer -->
					<div class="row stbottombar pb-2 pt-2"> 
					<p>© 2019 O4 LMS</p>
					</div>
			</div>
			</body>
			</html>