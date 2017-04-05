 <h3 class="Bebas">Welcome to Trail Blazers Fans.com</h3>
    <h2 id="latest_games" class="Ripper">latest games</h2>

<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach($scores as $item)

        @php
            $versus_or_at="";
            $away_nick_dash="$item->afname";
            $home_nick_dash="";
            $home_or_away="";
            $win_or_loss="";

    $game_date = new DateTime($item->datey, new DateTimeZone('America/Los_Angeles'));
    $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
    $game_date = $game_date->format('M jS Y');


        @endphp



        @if ($item->h_initials=='POR')
            @php
                $versus_or_at="VS.";
            @endphp

            @if($item->htotal > $item->atotal)
                @php
                    $win_or_loss ="<span class='win_loss_box_show_win2'>W</span>";

                @endphp
            @else
                @php
                    $win_or_loss ="";
                @endphp
            @endif
            @if($item->htotal < $item->atotal)
                @php
                    $win_or_loss ="<span class='win_loss_box_show_loss2'>L</span>";

                @endphp


            @endif

            @php
                $home_or_away = $item->afname.'<span class="box_total_h2"> '.$item->atotal+"</span><br/>at<br/> portland trail blazers <span class='box_total_h2'>".$item->htotal."</span>";
            @endphp


        @endif


        @if ($item->a_initials=='POR')
            @php
                $versus_or_at="@";
            @endphp

            @if($item->atotal > $item->htotal)
                @php
                    $win_or_loss ="<span class='win_loss_box_show_win2'>W</span>";

                @endphp
            @else
                @php
                    $win_or_loss ="";
                @endphp
            @endif
            @if($item->atotal < $item->htotal)
                @php
                    $win_or_loss ="<span class='win_loss_box_show_loss2'>L</span>";

                @endphp


            @endif

            @php
                $home_or_away = 'portland trailblazers'.'<span class="box_total_h2"> '.$item->atotal+"</span><br/>at<br/>'.$item->hfname.'<span class='box_total_h2'>".$item->htotal."</span>";
            @endphp


        @endif




        <div class="item">

            <table class="header_last_game">
                <tr><th colspan="3">{{$game_date}}</th></tr>
                <tr><td><span class="initials">{{$item->a_initials}}</span><br/><span class='slider_score'>{{$item->atotal}}</span></td><td>{!! $versus_or_at !!}<br/>{!! $win_or_loss!!}</td><td><span class="initials">{{$item->h_initials}}</span><br/><span class='slider_score'>{{$item->htotal}}</span></td></tr>
                <tr><td colspan="3" class="score-link"><a class="btn btn-danger btn-xs" role="button" aria-pressed="true" href="{{ route('boxscores.show', [$item->id, str_slug($item->game_string)]) }}">Box score</a></td></tr>
            </table>


        </div>




    @endforeach
</div>
<br/>




<hr>
        <div class="panel text-center">
            <div class="panel-heading">
                <h3 class="panel-title">Season Box Scores</h3></div>
            <ul class="list-group">
                <li class="list-group-item"> <a href="{{url('boxscores/season_2015_2016')}}">2015-2016 Season</a></li>
                <li class="list-group-item"><a href="{{url('boxscores/season_2014_2015')}}">2014-2015 Season</a></li>
                <li class="list-group-item"><a href="{{url('boxscores/season_2013_2014')}}">2013-2014 Season</a></li>
            </ul>
        </div>


        <br/>
        <hr>
        <br/>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-lg fa-twitter"></i>&nbspPlayer &amp; Team Tweets</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-lg fa-facebook"></i>&nbspLike us on Facebook</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>Player Tweets</h3>

                <a class="twitter-timeline"  href="https://twitter.com/search?q=from%3Aarronafflalo%20OR%20from%3ADame_Lillard%20OR%20from%3Arolopez42%20OR%20from%3Aaldridge_12%20OR%20from%3Anicolas88batum%20OR%20from%3ASteveBlake5%20OR%20from%3Aallencrabbe%20OR%20from%3Apsufraz23%20OR%20from%3AGeeAlonzo%20OR%20from%3AChrisKaman%20OR%20from%3AMeyersLeonard11%20OR%20from%3Awessywes2%20OR%20from%3ACJMcCollum%20OR%20from%3ADWRIGHTWAY1%20OR%20from%3Atrailblazers" data-widget-id="599516450617856000">Tweets about from:arronafflalo OR from:Dame_Lillard OR from:rolopez42 OR from:aldridge_12 OR from:nicolas88batum OR from:SteveBlake5 OR from:allencrabbe OR from:psufraz23 OR from:GeeAlonzo OR from:ChrisKaman OR from:MeyersLeonard11 OR from:wessywes2 OR from:CJMcCollum OR from:DWRIGHTWAY1 OR from:trailblazers</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            </div>
            <div id="menu1" class="tab-pane">
                <div class="row">
                    <div class="">
                        <h3>Like Us On Facebook!</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/Trail-Blazers-Fans-com-1432222413694833" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
                    </div>

                </div>
            </div>

        </div>









