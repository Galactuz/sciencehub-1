{{ Form::open(['url' => '/store']) }}
	<div>
		{{Form::label('first_name', 'First Name: ')}}
		{{Form::text('first_name')}}
	</div>
	<div>
		{{Form::label('last_name', 'Last Name: ')}}
		{{Form::text('last_name')}}
	</div>
	<div>
		{{Form::label('bio', 'About you: ')}}
		{{Form::text('bio')}}
	</div>
	<div>
		{{Form::label('username', 'Username: ')}}
		{{Form::text('username')}}
	</div>			
	<div>
		{{Form::label('email', 'Email: ')}}
		{{Form::text('email')}}
	</div>
	<div>
		{{Form::label('password', 'Password: ')}}
		{{Form::password('password')}}
	</div>
	<div>
		{{Form::submit('Create Author')}}
	</div>
{{ Form::close() }}