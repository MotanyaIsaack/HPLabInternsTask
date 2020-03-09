@extends('layouts.nav')

@section('content')

<div class="container">
	{!! Form::open(['action'=> ['StudentsController@update',$student->user_id ],
	'method' => 'POST']) !!}


	<div class="form-group">
		{{ Form::label('name', 'Name :' )  }}
		{{ Form::text('name', $student->name, [ 'class' => 'form-control', 'placeholder' => 'Student\'s name'  ] )  }}

	</div>
	<div class="form-group">
		{{ Form::label('email', 'Email : ')  }}
		{{ Form::email('email', $student->email, [ 'class' => 'form-control', 'placeholder' => 'Student\'s email address'  ] )  }}

	</div>

	<div class="form-group">
		{{ Form::label('Course', 'Course : ')  }}
		{{ Form::select('course', $c, $course, [ 'class' => 'form-control' ] )  }}

	</div>

	<div class="form-group">
		{{ Form::label('address', 'Address : ')  }}
		{{ Form::text('address', $student->address, [ 'class' => 'form-control', 'placeholder' => 'Student\'s address'  ] )  }}

	</div>

	<div class="form-group">
		{{ Form::label('status', 'Status ( Check to suspend ): ')  }}
		{{ Form::checkbox('status', '1') }}

	</div>

	{{ Form::hidden('_method','PUT') }}



	{{ Form::submit('Update',['class' => 'btn btn-primary'])  }}
	{!! Form::close() !!}

</div>
@endsection