{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('OrderID', 'OrderID:') }}
			{{ Form::text('OrderID') }}
		</li>
		<li>
			{{ Form::label('SeqNo', 'SeqNo:') }}
			{{ Form::text('SeqNo') }}
		</li>
		<li>
			{{ Form::label('Quantity', 'Quantity:') }}
			{{ Form::text('Quantity') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}