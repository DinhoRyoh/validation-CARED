@extends('layouts.app')
@section('content')
  <div class="ui grid">
    <div class="four wide column">
      <div class="ui vertical fluid tabular menu">
        <a class="active item" id="channelButton">
          My channel
        </a>
        <a class="item" id="videosButton">
          videos
        </a>
        <a class="item" id="aboutButton">
          About
        </a>
        <a class="item" id="suscribesButton">
          subscribes
        </a>
      </div>
    </div>
    <div class="twelve wide stretched column">
      <div class="ui segment" id="channel">
        @if (Auth::guest())
          <span>Please register to have a channel. It's simple ! click </span><a href="{{ url('/register') }}">here</a><br>
          <span>Or login </span><a href="{{ url('/login') }}">here</a><br>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Xq3W-J7CZdk" frameborder="0" allowfullscreen></iframe>
        @else
          <p>Hey welcome to my Channel ! I had only 3 hours... so it's no finished yet. please check the video button</p>
        @endif
      </div>
      <div class="ui segment" id="videos">
      <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/fVfEcYhdRRw?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div><br>
      @foreach ($videos as $video)
        @if ($video->id == 1)
          @php
            $like = $video->like;
          @endphp
          <h4>{{$video->title}}</h4>
        @endif
      @endforeach
      <div class="ui labeled button" tabindex="0">

      <div class="ui red button">
        <i class="heart icon"></i> Like
      </div>
      <a class="ui basic red left pointing label">
        <span>{{$like}}</span>
      </a>
      </div>
      <?php // TODO: function +1 like per click, available one time for one user only ?>
      <h3>comments</h3>
      <?php $idVideo = 1; ?>
      {{Form::open(['url' => 'comment'])}}
      {{Form::hidden('id',Auth::id())}}
      {{Form::hidden('idVideo',$idVideo)}}
      {{Form::label('comment','Votre commentaire :')}}
      {{Form::text('comment')}}
      {{Form::submit('Poster')}}
      {{Form::close()}}
      <hr>
      <table>
        <thead>
          <tr>
            <th>pseudo</th>
            <th>message</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($messages as $message)
            <tr>
              @foreach ($users as $user)
                @if ($user->id == $message->idusers)
                  @php
                  $id = $user->id;
                  @endphp
                @endif
                @if (0 == $message->idusers)
                  @php
                    $id = 0;
                  @endphp
                @endif
              @endforeach
              @if ($id == 0)
                <td>guest</td>
                @else
                <td>{{$users[$id-1]->name}}</td>
              @endif
              @php
                $message = $message->messages;
              @endphp
              <td><?php echo $message; ?></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
      <div class="ui segment" id="about">
        <p>Channelz is made to share videos !</p>
      </div>
      <div class="ui segment" id="suscribes">
        <p>content here</p>

      </div>
    </div>
  </div>
</div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#videos').hide();
        $('#about').hide();
        $('#suscribes').hide();
        $('#channelButton').click(function(){
          $('#channelButton').addClass('active');
          $('#videosButton').removeClass('active');
          $('#aboutButton').removeClass('active');
          $('#suscribesButton').removeClass('active');
          $('#channel').show();
          $('#videos').hide();
          $('#about').hide();
          $('#suscribes').hide();
        });
        $('#videosButton').click(function(){
          $('#channelButton').removeClass('active');
          $('#videosButton').addClass('active');
          $('#aboutButton').removeClass('active');
          $('#suscribesButton').removeClass('active');
          $('#channel').hide();
          $('#videos').show();
          $('#about').hide();
          $('#suscribes').hide();

        });
        $('#aboutButton').click(function(){
          $('#channelButton').removeClass('active');
          $('#videosButton').removeClass('active');
          $('#aboutButton').addClass('active');
          $('#suscribesButton').removeClass('active');
          $('#channel').hide();
          $('#videos').hide();
          $('#about').show();
          $('#suscribes').hide();
        });
        $('#suscribesButton').click(function(){
          $('#channelButton').removeClass('active');
          $('#videosButton').removeClass('active');
          $('#aboutButton').removeClass('active');
          $('#suscribesButton').addClass('active');
          $('#channel').hide();
          $('#videos').hide();
          $('#about').hide();
          $('#suscribes').show();
        });
      });
    </script>
@endsection
