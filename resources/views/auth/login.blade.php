@extends('layout')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<div class="container login">
		<div class="absolute center_screen login_from">
			<div class="title">
				<div><i class="fa fa-lock"></i> LogIn</div>
			</div>
			<form id="login">
				{{ csrf_field() }}
				<div class="container-fluid">					
					<div class="row">
						<div class="col-sm-12">
							<input type="text" name="username" placeholder="Username" />	
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="password" name="password" placeholder="Password" />	
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<a class="btn btn-login"><i class="fa fa-lock" aria-hidden="true"></i> LogIn</a>
						</div>
					</div>
				</div>				
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/login.js"></script>
@endsection