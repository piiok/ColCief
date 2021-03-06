@extends('layouts.app')

@section('content')
@if(session()->has('flash'))
	<div class="alert alert-info">{{session('flash')}}</div>
@endif
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Acceso a la aplicación</h1>
				</div>
				<div class="panel-body">
					<form method="POST" action="{{route('autentication')}}">
						{{csrf_field()}}
						<div class="form-group">
							<label for="role">Cargo</label>
							<select name="role" id="role" class="form-control">
								<option value="student">Estudiante</option>
								<option value="admin">Administrativo</option>
								<option value="employee">Docente</option>
							</select>
						</div>
						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email">Email</label>
							<input class="form-control" id="email" type="email" name="email" value="{{old('email')}}">
							{!! $errors -> first('email','<span class="help-block">:message</span>')!!}
						</div>
						<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
							<label for="password">Password</label>
							<input class="form-control" id="password" type="password" name="password">
							{!! $errors -> first('password','<span class="help-block">:message</span>')!!}
						</div>
						<div id="remember" class="checkbox">
							<label>Remember me	<input type="checkbox" value="remember"></label>
						</div>
						<button class="btn btn-primary btn-block">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection()