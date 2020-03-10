<!DOCTYPE html>
<html>
	<head>
		<title>HP_Students</title>
		<link rel="icon" href="{{ URL::asset('php.png') }}" type="image/x-icon"/>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<script src="{{asset('js/jquery.js')}}"></script>
		<script src="{{asset('js/app.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="{{asset('js/style.js')}}"></script>
		<script src="{{asset('js/slim.js')}}"></script>
		<script src="{{asset('js/popper.js')}}"></script>
	</head>
	<body class="p-0 container-fluid">
		<!--for the navigation pane-->
		<nav class="navbar navbar-dark bg-dark">
			<a href="#" class="navbar-brand">
				 <img width="30%" height="30%" src="php.png">
          		<script>{{ asset('img/php.png') }}</script>
			</a>
			<div class=" justify-content-end">
				<a href="logout"><button class="btn btn-light" style="background-color:white; color:black" >Log Out</button></a>
			</div>
		</nav>
		<!--end of nav pane-->
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-2 bg-secondary side-menu">
					<div class="hover">
						<a href="statistics" id="active-menu" style="color:white"><b>Statistics</b></a>
					</div>
					<div class="hover">
						<a href="students" style="color:white">Students</a>
					</div>
				</div>

				<div class="col-md-10 jumbotron side-menu">
					<div class="row justify-content-center">
						<div class="col-md-10 p-0">
							<table class="table table-hover table-responsive-sm">
						  		<thead class="thead-dark">
							    	<tr>
								      <th scope="col">No.</th>
								      <th scope="col">UserID</th>
								      <th scope="col">Name</th>
								      <th scope="col">Email</th>
								      <th scope="col">Address</th>
								      <th scope="col">Role</th>
								      <th scope="col">Course</th>
								    </tr>
						  		</thead>
						  		<tbody class="bg-light">
									<!--<?php
									//$result = view();
									//if($result->num_rows>0){
									//while ($row = $result->fetch_assoc()) {
									//echo "<tr>";
									//echo "<td>".$row["no"]."</td>"; /*the row for NO???*/
									//echo "<td>".$row["user_id"]."</td>";
									//echo "<td>".$row["user_name"]."</td>";
									//echo "<td>".$row["user_email"]."</td>";
									//echo "<td>".$row["user_address"]."</td>";
									//echo "<td>".$row["user_role"]."</td>";
									//echo "<td>".$row["course_name"]."</td>";
									//echo "</tr>";
											//}
										//}
									 ?>-->
						  		</tbody>
							</table>

							<div class="row justify-content-md-center">
								<div class="col-md-5">
									<button class='btn-secondary text-white btn-block btn-lg' type='button' data-toggle='modal' data-target='#exampleModal'>EDIT</button>
								</div>

								<div class="col-md-5">
									<button class='btn-danger btn-block btn-lg' data-toggle='modal' data-target='#exampleModal1' type='submit'>DELETE</button>
								</div>
							</div>
						</div>

						<div class="col-md-9 p-2">
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="row justify-content-md-center">
									<div class="col-md-12">
			 							<div class="modal-dialog" role="document">
   											<div class="modal-content">
      											<div class="modal-header bg-dark">
       												<h5 class="modal-title text-center text-white" id="exampleModalCenterTitle">Edit Student Details</h5>
        											<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
											         <span aria-hidden="true">&times;</span>
											        </button>
     											</div>
	      										<div class="modal-body">
	       											<form method="post" action="students">
	       												<div class="form-group">
											    			<label for="exampleFormControlSelect1">Student's Name</label>
															    <select class="form-control" id="exampleFormControlSelect1" name="user_name">
															     <!--<?php
															     	//$result = view();
																	//while ($row = $result->fetch_assoc())
																	//{echo "<option value='".$row['user_name']."'>".$row['user_name']."</option>";
																	//}
																	?>-->
															   </select>
	 													</div>
											 			<div class="form-group">
														    <label for="exampleFormControlInput1">Email</label>
														    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Student's email.." name="user_email">
														</div>
														<div class="form-group">
														    <label for="exampleFormControlInput1">Address</label>
														    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student's adrress.." name="user_address">
														</div>
														<div class="form-group"><!--Should role be there really???-->
														    <label for="exampleFormControlInput1">Role</label>
														    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="User's role.." name="user_role">
														</div>
														<div class="form-group">
														    <label for="exampleFormControlInput1">Course</label><!--be drop-down from table??-->
														    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student's course.." name="course">
														</div>
														  	<input type="submit" class="form-control text-center text-white btn-secondary btn-lg" value="Update" name="edit">
	       											</form>
	      										</div>
    										</div>
  										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="row justify-content-md-center">
									<div class="col-md-12">
										 <div class="modal-dialog" role="document">
							    			<div class="modal-content">
										      	<div class="modal-header bg-dark">
											        <h5 class="modal-title text-center text-white" id="exampleModalCenterTitle">Delete Student's Details</h5>
											        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
											          	<span aria-hidden="true">&times;</span>
											        </button>
										      	</div>
							      				<div class="modal-body">
								       				<form method="post" action="students">
								       					<div class="form-group">
								    						<label for="exampleFormControlSelect1">Student's name</label>
												    		<select class="form-control" id="exampleFormControlSelect1" name="user_name">
															<!--<?php
									     					//$result = view();
															//while ($row = $result->fetch_assoc())
															//{
											   				// echo "<option value='".$row['user_name']."'>".$row['user_name']."</option>";}
															?>   -->
						   									</select>
		 			 									</div>

					  									<input type="submit" class="form-control text-center text-white btn-danger btn-lg" value="Delete" name="delete">
		       										</form>
										      	</div>
										    </div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 p-2">
								<div class="card">
									<div>
										<button class='btn-outline-info btn-block btn-lg' data-toggle='modal' data-target='#exampleModal2' type='submit'>Add student</button>
									</div>

									<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="row justify-content-md-center">
											<div class="col-md-12">
												<div class="modal-dialog" role="document">
								   					<div class="modal-content">
								      					<div class="modal-header bg-dark">
								        					<h5 class="modal-title text-center text-white" id="exampleModalCenterTitle">Add Student's Details</h5>
													        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
													          <span aria-hidden="true">&times;</span>
													        </button>
								      					</div>

      													<div class="modal-body">
       														<form method="post" action="students">
															  	<div class="form-group row">
									    							<label class="col-sm-2 col-form-label">UserID</label>
									    							<div class="col-sm-10">
									      								<input type="text" class="form-control" placeholder="ID.." name="user_id">
														    		</div>
																</div>

														 		<div class="form-group row">
										    						<label class="col-sm-2 col-form-label">Name</label>
										    						<div class="col-sm-10">
										      							<input type="number" class="form-control" placeholder="Student's name.." name="user_name">
															     	</div>
														 		</div>

																<div class="form-group row">
										    						<label class="col-sm-2 col-form-label">Email</label>
										    						<div class="col-sm-10">
										      							<input type="number" class="form-control" placeholder="Student's email.." name="user_email">
														     		</div>
														 		</div>
																<div class="form-group row">
											    					<label class="col-sm-2 col-form-label">Address:</label>
											    					<div class="col-sm-10">
											      						<input type="number" class="form-control" placeholder="Student's adrress.." name="user_address">
																    </div>
																</div>

																 <div class="form-group row">
											    						<label class="col-sm-2 col-form-label">Role:</label>
											    						<div class="col-sm-10">
											      						<input type="number" class="form-control" placeholder="User's role.." name="user_role">
																     </div>
																 </div>

																 <div class="form-group row">
											    					<label class="col-sm-2 col-form-label">Course</label>
											    					<div class="col-sm-10">
											      						<input type="number" class="form-control" placeholder="Student's course.." name="course_name">
																    </div>
																 </div>

																 <input type="submit" class="form-control text-center text-white btn-success btn-lg" value="Save" name="save">
															</form>
											  			</div>
      												</div>
    											</div>
  											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
