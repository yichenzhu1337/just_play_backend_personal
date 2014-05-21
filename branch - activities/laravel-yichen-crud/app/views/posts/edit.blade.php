@extends('layouts.master')


@section('content')

	<h1> Edit Post </h1>

	{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
		<ul>
			<li>
				{{ Form::label('author', 'Author:') }}
				{{ Form::text('author') }}
			</li> 
			<li>
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title') }}
			</li>
			<li>
				{{ Form::label('body', 'Body:') }}
				{{ Form::textarea('body', null, array('30x5')) }}
			</li>
			<li>
				{{ Form::submit('Update') }}
				{{ link_to_route('posts.show', 'Cancel', $post->id) }}
			</li>
		</ul>
	{{ Form::close() }}

	@if($errors->any())
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	@endif
@stop


