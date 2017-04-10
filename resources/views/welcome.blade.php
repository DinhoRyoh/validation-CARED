@extends('layouts.app')
@section('content')
  <div class="ui segment" style="text-align:center">
    <h1>Welcome to channelz</h1>
  </div>
  <script type="text/javascript">
    setTimeout(function () {
      window.location.replace("/home");
    }, 1000);
  </script>
@endsection
