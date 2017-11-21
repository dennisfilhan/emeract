@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <h4 class="text-center">Login</h4><br>
        <hr class="star-primary">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" required autofocus value="{{ old('name') }}" data-validation-required-message="Please enter your Name.">
                            <p class="help-block text-danger"></p>


                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email" required autofocus value="{{ old('email') }}" data-validation-required-message="Please enter your Email.">
                            <p class="help-block text-danger"></p>


                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <input class="form-control" name="password" id="password"  type="Password" placeholder="Password" required data-validation-required-message="Please enter your Password.">
                            <p class="help-block text-danger"></p>


                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <input class="form-control" name="password_confirmation" id="password-confirm" type="Password" placeholder="Confirmation Password" required data-validation-required-message="Please enter your Password.">
                            <p class="help-block text-danger"></p>


                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success btn-lg">
                            Register
                        </button>
                    </div>
                </div>
            </form>
            <div class="form-group">
                <div class="control-group">
                    <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook">
                    <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a><br>


                    <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter">
                    <span class="fa fa-twitter"></span> Sign in with Twitter
                    </a><br>

                    <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google">
                    <span class="fa fa-google"></span> Sign in with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
