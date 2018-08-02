{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('HajjID', 'HajjID:') }}
			{{ Form::text('HajjID') }}
		</li>
		<li>
			{{ Form::label('Name', 'Name:') }}
			{{ Form::text('Name') }}
		</li>
		<li>
			{{ Form::label('Email', 'Email:') }}
			{{ Form::text('Email') }}
		</li>
		<li>
			{{ Form::label('Phone', 'Phone:') }}
			{{ Form::text('Phone') }}
		</li>
		<li>
			{{ Form::label('Nationality', 'Nationality:') }}
			{{ Form::text('Nationality') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}