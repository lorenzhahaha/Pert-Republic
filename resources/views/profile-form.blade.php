@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-4.0.0/dist/css/bootstrap.css') }}">
<style type="text/css" media="screen">
	.container {
		margin-top: 200px;
	}

	.panel {
		background-color: #232b2b !important;
	}

	.panel-heading {
		color: #fff !important;
		background-color: #5cb85c !important;
		border-color: #4cae4c !important;
	}
</style>

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">User Profile Customization</div>
	                	<div class="panel-body">

			                @if (Session::has('success'))
			                    <div class="alert alert-success">{!! Session::get('success') !!}</div>
			                @endif
			                @if (Session::has('failure'))
			                    <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
			                @endif

			                @if (Auth::user() -> is_social_connected_only == 1)
			                <img src="{{ $user -> avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;" alt="">
			                <h2 style="color: black; text-align: center;"> Account connected to different media. No Information available to change.</h2>
		                    @else
		                    <img src="/uploads/avatars/{{ $user -> avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;" alt="">
		                    @endif
			                
			                <h2> {{ $user -> name }}'s Profile </h2>

			                @if (Auth::user() -> is_social_connected_only == 0)
			                <form enctype="multipart/form-data" action="/update-avatar" method="post" accept-charset="utf-8">
			                	{{ csrf_field() }}
			                	<label> Update Profile </label>
			                	<input type="file" name="avatar" accept="image/*">
			                	<input type="submit" class="pull-right btn btn-sm btn-success">
			                </form>

		                	<form action="/update-password" method="post" role="form" class="form-horizontal" style="margin-top: 100px;">
		                    {{csrf_field()}}
		                        <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
		                            <label for="password" class="col-md-4 control-label">Old Password</label>
		 
		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control" name="old">
		 
		                                @if ($errors->has('old'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('old') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		 
		                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                            <label for="password" class="col-md-4 control-label">Password</label>

		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control" name="password">

		                                @if ($errors->has('password'))
		                                    <span class="help-block">
		                                    <strong>{{ $errors->first('password') }}</strong>
		                                </span>
		                                @endif
		                            </div>
		                        </div>
		 
		                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

		                            <div class="col-md-6">
		                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

		                                @if ($errors->has('password_confirmation'))
		                                    <span class="help-block">
		                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
		                                </span>
		                                @endif
		                            </div>
		                        </div>
		 
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                            	<button type="submit" class="btn btn-success form-control">Submit</button>
		                            </div>
		                        </div>
		                	</form>
			                @endif
		                </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection