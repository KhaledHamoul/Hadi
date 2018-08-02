{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('TypeID', 'TypeID:') }}
			{{ Form::text('TypeID') }}
		</li>
		<li>
			{{ Form::label('TypeName', 'TypeName:') }}
			{{ Form::text('TypeName') }}
		</li>
		<li>
			{{ Form::label('Price', 'Price:') }}
			{{ Form::text('Price') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}