{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('module_id', 'Module_id:') !!}
			{!! Form::text('module_id') !!}
		</li>
		<li>
			{!! Form::label('lesson_id', 'Lesson_id:') !!}
			{!! Form::text('lesson_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}