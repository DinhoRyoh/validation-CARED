@extends('layouts.app')

@section('content')
  <div class="ui segment">
    <div class="row">
      <h2>Register</h2>
      <p>fill the following blank spaces.</p>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="ui labeled input" id="field">
                        <div class="ui blue label" style="width:170px; text-align:center">
                          Email
                        </div>
                        <input type="text" placeholder="Email.." name="email">
                      </div>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="ui labeled input" id="field">
                        <div class="ui blue label" style="width:170px; text-align:center">
                          Password
                        </div>
                        <input type="password" placeholder="password.." name="password">
                      </div>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember"> Remember Me
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="ui green button">
                      <i class="fa fa-btn fa-sign-in"></i> Login
                  </button>

                  <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
              </div>
          </div>
      </form>
  </div>
</div>
@endsection
