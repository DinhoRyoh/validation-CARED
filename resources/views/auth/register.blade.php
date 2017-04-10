@extends('layouts.app')

@section('content')
<div class="ui segment">
  <div class="row">
    <h2>Register</h2>
    <p>fill the following blank spaces.</p>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="ui labeled input" id="field">
                        <div class="ui blue label" style="width:170px; text-align:center">
                          Name
                        </div>
                        <input type="text" placeholder="Name.." name="name" required autofocus>
                      </div>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                  <br>
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
<br>

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

<br>
          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <div class="ui labeled input" id="field">
                        <div class="ui blue label" style="width:170px; text-align:center">
                          confirm password
                        </div>
                        <input type="password" placeholder="confirmation password.." name="password_confirmation">
                      </div>

                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
<br>
          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="ui green button">
                      <i class="fa fa-btn fa-user"></i> Register
                  </button>
              </div>
          </div>
      </form>
  </div>
</div>
@endsection
