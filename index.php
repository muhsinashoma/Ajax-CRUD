<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
	<!-- STUDENT ADD MODAL  here today  -->
	<div id="student_add_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Add new student Test </h2>
					<div class="mess"></div>
					<hr>
<!--<form id="add_student_form" action="" method="POST" enctype="multipart/form-data">-->

                    <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
							<label for="">Name</label>
							<input class="form-control" name="name" type="text">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" name="email" type="text">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" name="cell" type="text">
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control" name="photo" type="file">
						</div>

						<div class="form-group">
							<label for=""></label>
							<input class="btn btn-primary" name="add" type="submit" value="Add student">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- STUDENT ADD MODAL Update -->
	<div id="student_update_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Update student data</h2>
					<div class="mess"></div>
					<hr>
					<form id="update_student_form" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" name="name" type="text">
							<input type="hidden" name="student_id" >
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" name="email" type="text">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" name="cell" type="text">
						</div>
						<div class="form-group">
							<img style="width:200px;" src="" alt="">
							<input type="hidden" name="old_photo">
						</div>
						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control" name="new_photo" type="file">
						</div>

						<div class="form-group">
							<label for=""></label>
							<input class="btn btn-primary" name="add" type="submit" value="Update student">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>




	<!-- SINGLE STUDENT SHOW MODAL  -->
	<div id="single_student_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Single Student Data</h2>
					<hr>
					
					<img id="single_student_img" class="shadow" style="width: 200px; height:200px; display: block;margin: auto; border-radius: 50%; border: 10px solid #FFF;" src="" alt="">
					<h2 id="single_name" class="text-center"></h2>

					<table class="table table-striped">
						<tr>
							<td>Name :</td>
							<td id="single_name"></td>
						</tr>

						<tr>
							<td>Email :</td>
							<td id="single_email"></td>
						</tr>

						<tr>
							<td>Cell :</td>
							<td id="single_cell"></td>
						</tr>

						
					</table>

				</div>
			</div>
		</div>
	</div>

	<div class="wrap-table ">
		<a id="student_show" class="btn btn-primary btn-sm" href="#">Add new student Form</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
				<div class="mess-all"></div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="all_students_data">


                    <tr>
                        <td>1</td>
                        <td>Asraful Haque</td>
                        <td>haq@gmail.com</td>
                        <td>01717700811</td>
                        <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
                        <td>
                            <a id="single_show" class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>






					</tbody>
				</table>
			</div>
		</div>
	</div>
	





	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>