{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('StageID', 'StageID:') }}
			{{ Form::text('StageID') }}
		</li>
		<li>
			{{ Form::label('StageSeqNo', 'StageSeqNo:') }}
			{{ Form::text('StageSeqNo') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}