{{--@extends('layout')--}}


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
            <img class='logo-show img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
            <div data-role="navbar">
                <ul class="nav-trickery">
                    <li><a href="https://level3.checkenginefree.com"  data-icon="navigation" data-ajax="false"><span class="orangose">Back to Map</span></a></li>
                </ul>
            </div><!-- /navbar -->
        </div>
        <div id="wrappa2">

            <div id="about_us_words">


            <div class="row">
    <div class="">

    <article class="show-article center-block">
        <h2 style="text-align:center;"><span class="contact_header">{{$post->title}}</span><br/>
            <span class="subheader-main Bebas">{{ $post->subHead}}</span>
        </h2>


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
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flevel3.checkenginefree.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="{{url('images/Facebook.png')}}"></a></li>
            <li><a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Flevel3.checkenginefree&text=:%20https%3A%2F%2Ftrailblazersfans.com&via=tblazersfans" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="{{url('images/Twitter.png')}}"></a></li>
            <li><a href="https://plus.google.com/share?url=https%3A%2F%2Flevel3.checkenginefree.com" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="{{url('images/Google+.png')}}"></a></li>
            <li><a href="http://www.tumblr.com/share?v=3&u=https%3A%2F%2Flevel3.checkenginefree.com&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Post to Tumblr" src="{{url('images/Tumblr.png')}}"></a></li>
            <li><a href="http://www.reddit.com/submit?url=https%3A%2F%2Flevel3.checkenginefree.com&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Submit to Reddit" src="{{url('images/Reddit.png')}}"></a></li>
        </ul>
        <br/>
        <p class="uk-article-lead"><img style="text-align:center;margin-left:auto;margin-right:auto;display:block;"class="show-main-img center-block" src='{{"../../images/". $post->imgPath}}'></p>

        <br/>
        <div class="center-block text-center">
       <div class="article-texterson2"> {!! ($post->body) !!} </div>
            @if(($post->images->count() > 0 ))
            <div class="container">

                <div class="article-gallery-header-img"><img class="" src="/images/article-gallery.png" alt="article gallery" /></div>
                    <br/>
                {{--<div class="customNavigation">--}}
                {{--<a class="btn prev btn-danger">Previous</a>--}}
                {{--<a class="btn next btn-danger">Next</a>--}}
                {{--</div>--}}
<div id="owl-manip">
                <ul class="owl-carousel" style="display:inline !important;">
                    @foreach($post->images as $image)

                        {{--*/ @ $pathy =$image->file_path  /*--}}

                        {{--*/ @ list($width, $height) = getimagesize($pathy) /*--}}

                        {{--*/ @ $dimensions =$width.'x'.$height  /*--}}

                        {{--*/ $thumb_path= substr($image->file_path, 7);/*--}}
                        <li class="owl-trick">
                            <a href="{{url($image->file_path)}}" data-ajax="false"  data-size="{{$dimensions}}" data-title="{{$image->caption}}">
                                <img class="img-responsive" src="{{url('images/thmb-'.$thumb_path)}}" alt="1"></a></li>
                    @endforeach

                </ul>
</div>

            </div>
                @endif
                    </div>

    </article>



        <br/>
    </div>
                <hr>

    <div class="facebook-section-comments">

        <h2 class="facebook-comment-header text-center Bebas" >leave a facebook comment!</h2>
        <div class="fb-comments center-block" data-href="https://level3.checkenginefree.com/posts/{{$post->id}}/{{str_slug($post->title)}}" data-numposts="10"></div>



    </div>
                <hr>

                <br/>
                <br/>

    <a href="{{url('/news')}}" data-ajax="false">

        <button type="submit" data-theme="a" class="btn btn-primary center-block btn-md"> <span class="orangose3">Back to All Posts</span> </button>
    </a>
   &nbsp;
    <a href="{{url('/')}}" data-ajax="false">

        <button type="submit" data-theme="a" class="btn btn-danger center-block btn-md"> <span class="orangose3">Back to Map</span> </button>
    </a>


        <br/>
        <br/>



    </div>


            </div>
        </div>



        <div data-role="footer" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
            <span class="credit">checkenginefree.com &copy; 2017</span>
            <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
        </div><!-- /footer -->
    </div>




@endsection


<style scoped>
    @import "https://fonts.googleapis.com/css?family=Pacifico";
    @import "https://fonts.googleapis.com/css?family=Boogaloo";
    @import "https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css";
    @import "{{url('/css/default-skin.css')}}";
    @import "{{url('/css/lightslider.css')}}";

    @import "{{url('/css/owl.carousel.css')}}";
    @import "{{url('/css/owl.theme.css')}}";
    @import "{{url('/css/photoswipe.css')}}";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css";
    @import "https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/fonts/glyphicons-halflings-regular.woff";


    @font-face {
        font-family: 'CheckLogo';
        src: url("https://dl.dropboxusercontent.com/s/b0vl8untp94wys3/ARB.ttf"); !important
    }

    .ui-mobile a img, .ui-mobile fieldset {
         border-width: 1px !important;
    }

    #gallery-images img {
        width: 240px;
        height: 160px;
        border: 2px solid black;
        margin-bottom: 10px;
    }
    #gallery-images ul {
        margin: 0;
    }
    #gallery-images li {
        margin: 0;
        padding: 0;
        list-style: none;
        float: left;
        padding-right: 10px;
    }




    .owl-carousel li {
        list-style:none;
        margin-right: .3em;
    }
    .owl-carousel li img {
        border-radius:.5em;
        transition:transform .15s ease-out;
        border: 1px orange solid;
    }
    .owl-carousel li img:hover {
        transform:scale(.98, .98);
    }
    .owl-carousel li img:active {
        transform:scale(.96, .96);
    }

    ul.share-buttons{
        list-style: none;
        padding: 0;
        text-align:center;
    }

    ul.share-buttons li{
        display: inline;
    }

    ul.share-buttons .sr-only {
        position: absolute;
        clip: rect(1px 1px 1px 1px);
        clip: rect(1px, 1px, 1px, 1px);
        padding: 0;
        border: 0;
        height: 1px;
        width: 1px;
        overflow: hidden;
    }

    #about_us_words{
        background-color:#323333;
    }
#wrappa2{
    background-color:#323333;
}

    .article-texterson2 {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    .show-main-img {
        border: 1px solid #ff9000;
        max-width:100%  !important;
        height:auto;
        display:inline;
    }


    .contact_header,.contact_header2{font-variant:small-caps;
        font-size: 3em !important;
        text-align:center;
        color:#fcb704;
        font-family: CheckLogo, Tahoma, Arial, "Trebuchet MS";
        text-shadow: 6px 1px 10px #bb2103 !important;
        line-height: .9em;
    }

    .subheader-main {
        text-align:center;


    }
   .article-gallery-header-img {

        text-align:center;
    }


    .facebook-comment-header {
    color: #3c55a2;
        text-align:center;
    }

    .facebook-section-comments {
        background-color: #d3d8da;

    }


    .owl-theme .owl-controls .owl-buttons div {
        color: #FFF;
        /*display: inline;*/
        zoom: 1;
        margin: 5px;
        padding: 3px 10px;
        font-size: 12px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
        background: #ff9000;
        /*filter: Alpha(Opacity=50);*/
         opacity: 1.0;
    }

    .owl-stuff{
        /*width:100%;*/
        /*height:auto !important;*/


    }

    #owl-manip{

    }

    #owl-manip li{

        display:inline;

    }

    .owl-carousel .owl-theme {

    }

    img.logo-show {

        background-color: #1d1d1d !important;
        height:auto !important;
    }



    ul.owl-carousel{

        /*text-align:center;*/
    }


</style>


{{--<script src="{{url('/js/jquery.js')}}"></script>--}}







<script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" ></script>
<script type="text/javascript" src="//code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js" ></script>

{{--<script src="{{url('/js/jquery-1.11.3.min.js')}}"></script>--}}
<script src="{{url('/js/star-rating.js')}}"></script>
<script src="{{url('/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script src="{{url('/js/photoswipe.min.js')}}"></script>
<script src="{{url('/js/photoswipe-ui-default.min.js')}}"></script>