@extends('layout')



<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1761968547353236";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

@section('title', $post->title)
@section('content')


    @php
        $game_date = new DateTime($post->created_at, new DateTimeZone('America/Los_Angeles'));
        $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
        $game_date = $game_date->format('M jS Y');
    @endphp

    <div data-role="page" data-theme="b" id="loggin2">
        <div data-role="header" data-tap-toggle="false" data-theme="b">
            <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
            <div data-role="navbar">
                <ul class="nav-trickery">
                    <li><a href="https://level3.checkenginefree.com"  data-icon="navigation"><span class="orangose">Map</span></a></li>
                </ul>
            </div><!-- /navbar -->
        </div>
        <div id="wrappa2">
            <h2 class="contact_header">{{$post->title}}</h2>
            <div id="about_us_words">


            <div class="row">
    <div class="col-md-12">

    <article class="center-block">
        <h1 class="article-title-show" style="">{{ $post->title }}</h1>
        <p class="subheader-main Bebas">{{ $post->subHead}}</p>

        <p class="uk-article-meta" style="text-align:center;">
            Written by <?
            //below is one way to get the name of the author.....
            ?>

           @if($post->user_id != null)
            <? $author = App\User::find($post->user_id)->name; ?>

            {{$author}}
            @endif
            {{--@foreach($records as $record)--}}
            {{--{{$record->name}}--}}
            {{--@endforeach--}}
            on {{ $game_date }}
        </p>
        <ul class="share-buttons">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftrailblazersfans.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="{{url('images/Facebook.png')}}"></a></li>
            <li><a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Ftrailblazersfans.com&text=:%20https%3A%2F%2Ftrailblazersfans.com&via=tblazersfans" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="{{url('images/Twitter.png')}}"></a></li>
            <li><a href="https://plus.google.com/share?url=https%3A%2F%2Ftrailblazersfans.com" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="{{url('images/Google+.png')}}"></a></li>
            <li><a href="http://www.tumblr.com/share?v=3&u=https%3A%2F%2Ftrailblazersfans.com&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Post to Tumblr" src="{{url('images/Tumblr.png')}}"></a></li>
            <li><a href="http://www.reddit.com/submit?url=https%3A%2F%2Ftrailblazersfans.com&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Submit to Reddit" src="{{url('images/Reddit.png')}}"></a></li>
        </ul>
        <br/>
        <p class="uk-article-lead"><img class="img-responsive center-block" src='{{"../../images/". $post->imgPath}}'></p>

        <br/>
        <div class="center-block text-center">
       <div class="article-texterson2"> {!! ($post->body) !!} </div>
            @if(($post->images->count() > 0 ))
            <div class="container">
                <h2 class='Bebas'>article gallery</h2>
                    <br/>
                {{--<div class="customNavigation">--}}
                {{--<a class="btn prev btn-danger">Previous</a>--}}
                {{--<a class="btn next btn-danger">Next</a>--}}
                {{--</div>--}}
                <ul class="owl-carousel">
                    @foreach($post->images as $image)

                        {{--*/ @ $pathy =$image->file_path  /*--}}

                        {{--*/ @ list($width, $height) = getimagesize($pathy) /*--}}

                        {{--*/ @ $dimensions =$width.'x'.$height  /*--}}

                        {{--*/ $thumb_path= substr($image->file_path, 7);/*--}}
                        <li class="owl-trick">
                            <a href="{{url($image->file_path)}}" data-size="{{$dimensions}}" data-title="{{$image->caption}}">
                                <img class="img-responsive" src="{{url('images/thmb-'.$thumb_path)}}" alt="1"></a></li>
                    @endforeach

                </ul>

            </div>
                @endif
                    </div>

    </article>



        <br/>
    </div>

    <div class="">

        <h2 class="text-center Bebas" >leave a facebook comment!</h2>
        <div class="fb-comments center-block" data-href="https://www.trailblazersfans.com/posts/{{$post->id}}/{{str_slug($post->title)}}" data-numposts="10"></div>

        <br/>

    <a href="{{url('/news')}}">

        <button type="submit" class="btn btn-primary center-block btn-md">Back to All Posts</button>
    </a>
   &nbsp;
    <a href="{{url('/')}}">

        <button type="submit" class="btn btn-danger center-block btn-md">Back Home</button>
    </a>


</div>

    </div>


            </div>
        </div>


        <div data-role="footer" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
            <span class="credit">checkenginefree.com &copy; 2017</span>
            <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
        </div><!-- /footer -->
    </div>




@endsection

<script src="{{url('/js/jquery.js')}}"></script>











<script type="text/javascript" src="//code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js" ></script>

<script src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{url('/js/star-rating.js')}}"></script>
