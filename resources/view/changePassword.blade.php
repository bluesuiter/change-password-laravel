@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row alignForm innerCenter">
            <div class="col-md-8 mx-auto">
                <div class="formDesign mx-auto">
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
				<form method="POST" action="{{ route('change.password') }}">
					@csrf
					<div class="form-group">
						<input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password" placeholder="current password*" required>
                        @error('current_password')
                            <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                        @enderror
					</div>

					<div class="form-group">
						<input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="new password*" required>
                        @error('new_password')
                            <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                        @enderror
					</div>

					<div class="form-group">
						<input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" autocomplete="current-password" placeholder="new confirm password">
                        @error('new_password_confirmation')
                            <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                        @enderror
					</div>

					<div class="form-group mb-0">
						<button type="submit" class="cmnBtn w-100">Update Password</button>
					</div>
				</form>
               </div>
            </div>
        </div>
    </div>
@endsection
