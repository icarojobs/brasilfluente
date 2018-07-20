{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('module_id', 'Module_id:') !!}
			{!! Form::text('module_id') !!}
		</li>
		<li>
			{!! Form::label('is_finished', 'Is_finished:') !!}
			{!! Form::text('is_finished') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}