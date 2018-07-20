{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('lesson_id', 'Lesson_id:') !!}
			{!! Form::text('lesson_id') !!}
		</li>
		<li>
			{!! Form::label('hits', 'Hits:') !!}
			{!! Form::text('hits') !!}
		</li>
		<li>
			{!! Form::label('mistakes', 'Mistakes:') !!}
			{!! Form::text('mistakes') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}