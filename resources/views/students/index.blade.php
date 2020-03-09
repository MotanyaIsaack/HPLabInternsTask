@extends('layouts.nav')
@section('styles')
<style>
  body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    padding: 20px;
  }

  .main-container {
    display: flex;
    justify-content: center;

  }
</style>
@endsection

@section('content')
<!-- content -->


<div class="col-md-10 jumbotron side-menu">
   <div class="row justify-content-md-center" >
    <!--<div class="row justify-content-center">-->
        <div class="col-md-10 p-0">
            
    <div class="container">
        <div class="table-responsive"  style="margin-left:14%">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($students) > 0)
                    @foreach($students as $student)
                    <tr>
                        <th scope="row">{{ $student->user_id  }}.</th>
                        <td>{{ $student->name  }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            @if( $student->suspended == 0 )
                            Active
                            @else
                            Suspended
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/students/{{$student->user_id}}/edit"
                                role="button">Edit</a>

                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4">No students yet </>
                    </tr>
                    @endif

                </tbody>
            </table>

            {{ $students->links() }}
        </div>
    </div>

            
        </div>

        <div class="col-md-9 p-2">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-center text-white" id="exampleModalCenterTitle">Edit
                                        Student Details</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
					  	@include('students.create')

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-center text-white" id="exampleModalCenterTitle">Delete
                                        Student's Details</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="students">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Student's name</label>
                                            <select class="form-control" id="exampleFormControlSelect1"
                                                name="user_name">
                                                <!--<?php
									     					//$result = view();
															//while ($row = $result->fetch_assoc())
															//{
											   				// echo "<option value='".$row['user_name']."'>".$row['user_name']."</option>";}
															?>   -->
                                            </select>
                                        </div>

                                        <input type="submit"
                                            class="form-control text-center text-white btn-danger btn-lg" value="Delete"
                                            name="delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 p-2">
                <div class="card" style="margin-left:25%">
                    <div>
                        <button class='btn-outline-info btn-block btn-lg' data-toggle='modal'
                            data-target='#exampleModal2' type='submit'>Add student</button>
                    </div>

                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="row justify-content-md-center">
                            <div class="col-md-12">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-dark">
                                            <h5 class="modal-title text-center text-white" id="exampleModalCenterTitle">
                                                Add Student's Details</h5>
                                            <button type="button" class="close text-white" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
						    @include('students.create')
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
@endsection
