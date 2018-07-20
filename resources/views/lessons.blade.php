{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('type_id', 'Type_id:') !!}
			{!! Form::text('type_id') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('question1', 'Question1:') !!}
			{!! Form::text('question1') !!}
		</li>
		<li>
			{!! Form::label('question2', 'Question2:') !!}
			{!! Form::text('question2') !!}
		</li>
		<li>
			{!! Form::label('question3', 'Question3:') !!}
			{!! Form::text('question3') !!}
		</li>
		<li>
			{!! Form::label('question4', 'Question4:') !!}
			{!! Form::text('question4') !!}
		</li>
		<li>
			{!! Form::label('video_url', 'Video_url:') !!}
			{!! Form::textarea('video_url') !!}
		</li>
		<li>
			{!! Form::label('audio_url', 'Audio_url:') !!}
			{!! Form::textarea('audio_url') !!}
		</li>
		<li>
			{!! Form::label('points', 'Points:') !!}
			{!! Form::text('points') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}