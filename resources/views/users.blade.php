{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('alias', 'Alias:') !!}
			{!! Form::text('alias') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('city_id', 'City_id:') !!}
			{!! Form::text('city_id') !!}
		</li>
		<li>
			{!! Form::label('whatsapp', 'Whatsapp:') !!}
			{!! Form::text('whatsapp') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('profession', 'Profession:') !!}
			{!! Form::text('profession') !!}
		</li>
		<li>
			{!! Form::label('note', 'Note:') !!}
			{!! Form::textarea('note') !!}
		</li>
		<li>
			{!! Form::label('picture', 'Picture:') !!}
			{!! Form::text('picture') !!}
		</li>
		<li>
			{!! Form::label('active', 'Active:') !!}
			{!! Form::text('active') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}