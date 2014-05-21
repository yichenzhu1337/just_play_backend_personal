@extends('layout.main')

@section('content')
	<form action="{{ URL::route('account-change-password-post')}}" method="post">
		
		<div class="field">
			Old password: <input type="password" name="old_password">
			@if($errors->has('old_password'))           
				{{ $errors->first('old_password') }}
			@endif		
		</div>
		<div class="field">
			new password: <input type="password" name="password">
			@if($errors->has('password'))           
				{{ $errors->first('password') }}
			@endif	
		</div>

		<div class="field">
			new password again: <input type="password" name="password_again">
			@if($errors->has('password_again'))           
				{{ $errors->first('password_again') }}
			@endif	
		</div>

		<input type="submit" value="change password">
		{{Form::token()}}
	</form>
@stop