@extends ('layouts.master')

@section ('title')

Project: Doctor Registration 

@endsection


@section ('content')

	<div class="col-sm-8">
		
		<h1>Doctor Registration</h1>


		<form method="POST" action="/registerDoctor">

			{{ csrf_field() }}

			<div class="form-group">

				<label for="email">Email:</label>

				<input type="email" class="form-control" id="email" name="email" required>

				<label for="password">Password:</label>

				<input type="password" class="form-control" id="password" name="password" required>

				<!-- <label for="password-confirmation">Password Confirmation:</label>

				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required> -->

				<label for="firstname">First Name:</label>

				<input type="text" class="form-control" id="firstname" name="firstname" required>

				<label for="middlename">Middle Name:</label>

				<input type="text" class="form-control" id="middlename" name="middlename" required>

				<label for="lastname">Last Name:</label>

				<input type="text" class="form-control" id="lastname" name="lastname" required>

				<label for="expertise">Expertise:</label>

				<input type="text" class="form-control" id="expertise" name="expertise" required>

				<div class="form-group">

					<br>

					<button type="submit" class="btn btn-primary">Register</button>
					
				</div>

				<div class="form-group">
					@include ('layouts.errors')
				</div>


			</div>

		</form>

	</div>

@endsection