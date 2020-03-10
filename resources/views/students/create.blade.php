<div class="container">
	{!! Form::open(['action'=> 'StudentsController@store','method' => 'POST']) !!}


	<div class="form-group">
		{{ Form::label('name', 'Name :' )  }}
		{{ Form::text('name', '', [ 'class' => 'form-control', 'placeholder' => 'Student\'s name'  ] )  }}

	</div>
	<div class="form-group">
		{{ Form::label('email', 'Email : ')  }}
		{{ Form::email('email', '', [ 'class' => 'form-control', 'placeholder' => 'Student\'s email address'  ] )  }}

	</div>

	<div class="form-group">
		{{ Form::label('Course', 'Course : ')  }}
		{{ Form::select('course', $courses  , '', [ 'class' => 'form-control', 'placeholder' => 'Student\'s course'  ] )  }}

	</div>

	<div class="form-group">
		{{ Form::label('address', 'Address : ')  }}
		{{ Form::text('address', '', [ 'class' => 'form-control', 'placeholder' => 'Student\'s address'  ] )  }}

	</div>




	{{ Form::submit('Create',['class' => 'btn btn-primary'])  }}
	{!! Form::close() !!}

</div>