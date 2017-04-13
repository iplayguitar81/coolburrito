@extends('layout')

@section('content')


    <div data-role="page" data-theme="b" id="mappins">
        <div data-role="header" style="overflow:hidden;" data-theme="b"  data-tap-toggle="false" data-position-fixed="true">



            <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>


            <div data-role="navbar">
                <ul class="nav-trickery">
                    <li><a href="#mappins" class="ui-state-persist" data-icon="navigation"><span class="orangose">Map</span></a></li>
                    <li><a href="#about" data-icon="info"><span class="orangose">About</span></a></li>
                    <li><a href="#contact" data-icon="mail"><span class="orangose">Contact</span></a></li>
                </ul>


                <ul class="nav-trickery">
                    <li> <a href="#myPanel" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow-icon ui-btn-a" rel="external"><span class="orangose3">Read Our Blog!</span></a></li>
                </ul>

            </div><!-- /navbar -->
            {{--<div id="google_ad3">--}}
                {{--<style>--}}
                    {{--.checkrespond1 { width: 320px; height: 50px; }--}}
                    {{--@media(min-width: 500px) { .checkrespond1 { width: 468px; height: 60px; } }--}}
                    {{--@media(min-width: 800px) { .checkrespond1 { width: 728px; height: 90px; } }--}}
                {{--</style>--}}




                {{--<script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
                {{--<!-- checkrespond1 -->--}}
                {{--<ins class="adsbygoogle checkrespond1"--}}
                {{--style="display:inline-block"--}}
                {{--data-ad-client="ca-pub-4617308558434719"--}}
                {{--data-ad-slot="7732229387"></ins>--}}
                {{--<script>--}}
                {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
                {{--</script>--}}

            {{--</div>--}}




        </div>


        <div data-role="panel"  id="myPanel" data-position-fixed="true" data-position="right" class="ui-body-a">
            <a href="javascript:void(null);" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-navigation ui-btn-icon-right ui-body-a" data-ajax="false"><span class="orangose3">Back to Map</span></a>
        <img style="display:block; margin: 0 auto;" src="/images/latest-blog-posts.png" alt="Latest Blog Posts">
           <br/>
            <hr>

            {{--<ul data-role="listview" data-split-theme="a" data-inset="true" >--}}


                {{--<hr>--}}
                {{--@foreach($posts as $item)--}}

                    {{--@php--}}
                    {{--$game_date = new DateTime($item->created_at, new DateTimeZone('America/Los_Angeles'));--}}
                    {{--$game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));--}}
                    {{--$game_date = $game_date->format('M jS Y');--}}


                    {{--@endphp--}}




                {{--<li data-icon="arrow-r" ><a  href="{{ url('posts', $item->id) }}">--}}
                        {{--<img class="ui-li-thumb" src="images/{!! $item->imgPath !!}">--}}
                        {{--{{$game_date}}--}}
                        {{--<h2>{!! $item->title !!}</h2>--}}
                        {{--<span class="text-body-checkengine" style="float:right;">--}}

                           {{--<p>{!! str_limit($item->body, $limit = 35, $end = '...') !!}<p/> </span>--}}
                    {{--</a>--}}


                    {{--<br/>--}}
                {{--</li>--}}
                {{--@endforeach--}}

            {{--</ul>--}}

            @foreach($posts as $item)

                @php
                $game_date = new DateTime($item->created_at, new DateTimeZone('America/Los_Angeles'));
                $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                $game_date = $game_date->format('M jS Y');


                @endphp

                <div class="ui-grid-solo">
                    <div class="ui-block-a">{{$game_date}}<a href="{{ url('posts', $item->id) }}" data-ajax="false"><img style="width: 265px; height: 190px;" class="ui-li-thumb" src="images/{!! 'thmb-'.$item->imgPath !!}"></a>
                        <h2><a href="{{ url('posts', $item->id) }}" data-ajax="false">{!! $item->title !!}</a></h2>
                        <p>{!! str_limit($item->body, $limit = 35, $end = '...') !!}</p>
                        <a href="{{ url('posts', $item->id) }}" data-ajax="false" class="ui-btn ui-btn-inline"><span class="">Read More</span></a>
                    </div>
                </div>
            <hr>
                {{--<div class="ui-grid-solo">--}}
                    {{--<div class="ui-block-a">{{$game_date}}--}}
                        {{--<h2>{!! $item->title !!}</h2>--}}
                        {{--<p>{!! str_limit($item->body, $limit = 35, $end = '...') !!}</p></div>--}}
                {{--</div>--}}

                {{--<div class="ui-grid-a">--}}
                {{--<div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:160px"><img class="ui-li-thumb" src="images/{!! $item->imgPath !!}" ></div></div>--}}
                {{--<div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:160px">{{$game_date}}--}}
                        {{--<h2>{!! $item->title !!}</h2>--}}
                    {{--<p>{!! str_limit($item->body, $limit = 35, $end = '...') !!}</p></div></div>--}}
            {{--</div><!-- /grid-a -->--}}
{{--<br/>--}}

            @endforeach

            <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right" ><span class="orangose3">Close</span></a>











    </div>




        <br/>













    {{--@foreach($posts as $item)--}}

        {{--<div class="ui-corner-all custom-corners">--}}
            {{--<div class="ui-bar ui-bar-a">--}}
                {{--<h3> {!! $item->title !!}</h3>--}}
            {{--</div>--}}
            {{--<div class="ui-body ui-body-a">--}}
                {{--<img class="img-thumbnail" src="images/{!! $item->imgPath !!}">--}}
                {{--<p>{!! $item->body !!}</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}

        <br/>
        <div id="search_holder">
            <input id="address"  data-clear-btn="true"  data-theme="a" data-type="search" placeholder="Address, City, State, or Zip"/>
            <a data-role='button'  data-icon='search' data-theme="a" data-iconpos="right" onclick="codeAddress();"><span class="orangose3">Switch Location</span></a>
        </div>
        <br/>
        <div id="wrappa">
            <div id="loading_animation"><h3 class="contact_header">Finding locations near you...</h3><img src="/images/loader.gif" alt="loading location"/> <img src="/images/loader.gif" alt="loading location"/><img src="/images/loader.gif" alt="loading location"/></div>
            <div id="map_canvas"></div>
            <br/>
            <div id="sidebar" data-role="collapsible">
            </div>
            <br/>
            <hr>
            <br/>
            {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
            <br/>
            <br/>
            <div class="fb-like-box" data-href="https://www.facebook.com/checkenginefree" data-colorscheme="dark" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true"></div>
            <br/>
            <br/>
        </div>
        <div data-role="footer" data-position-fixed="true" style="overflow:hidden;" data-fullscreen="true" data-theme="b" data-tap-toggle="false">
            <span class="credit">checkenginefree.com &copy; 2017</span><br/>
            <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the ''Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends!  :D</p>
        </div><!-- /footer -->
    </div>
    <div data-role="page" data-theme="b" id="about">
        <div data-role="header" data-tap-toggle="false" data-theme="b">
            <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
            <div data-role="navbar">
                <ul class="nav-trickery">
                    <li><a href="#mappins"  data-icon="navigation"><span class="orangose">Map</span></a></li>
                    <li><a href="#about" class="ui-state-persist" data-icon="info"><span class="orangose">About</span></a></li>
                    <li><a href="#contact" data-icon="mail"><span class="orangose">Contact</span></a></li>
                </ul>
            </div><!-- /navbar -->
        </div>
        <div id="wrappa2">
            <h2 class="contact_header">About Us</h2>
            <div id="about_us_words">
                <p>checkenginefree.com became a reality because the programmer that developed the site was driving around one day when all of a sudden his check engine light came on.  He began to worry while wondering what could possibly be wrong with his car.  He was also dreading a visit to a mechanic.  He assumed the mechanic would more than likely not only gouge him for the cost of servicing his car, but also for the cost of running a check engine light diagnostic to pinpoint the problem!  That was not right!  He knew that many auto parts stores in the United States offer free check engine light diagnostics! It also soon occurred to him that it would probably benefit him if he were a more informed consumer when meeting with a mechanic! If he seemed to know what the problem was ahead of time the mechanic might be less likely to inflate the price on him.  He also saw a challenge in collecting this information, mapping it and putting it all in one place for his benefit and for the sake of otherwise less informed consumers across the nation!</p>
                <p>The information on this site may not be entirely accurate, but it has proven to be accurate enough to pursue the completion of this project.  If you find any information to be inaccurate please take the time to use the ‘Report this as inaccurate’ link that accompanies each listing below the map so that we will be able to ensure that the location data is accurate and up to date for the benefit of yourself and other users in the future.  If you wish to report a location that is not listed, would like to advertise or have any other questions, comments or concerns then please drop us a line on the <a rel="external" href="map.html#contact"><span class="basic_links">contact page</span></a> where there is an appropriate form for you to do just that!  Thank you for visiting us!  We hope this service has been helpful to you!  Please share this with your friends &amp; family and don't forget to like us on Facebook! :D</p>
                <br/>
                <hr/>
                <br/>
                <br/>
            </div>
        </div>


        <div data-role="footer" data-position-fixed="true" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
            <span class="credit">checkenginefree.com &copy; 2017</span>
            <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
        </div><!-- /footer -->
    </div>

    <div data-role="page" data-theme="b" id="contact">
        <div data-role="header" style="overflow:hidden;" data-tap-toggle="false" data-theme="b">
            <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
            <div data-role="navbar">
                <ul class="nav-trickery">
                    <li><a href="#mappins"  data-icon="navigation"><span class="orangose">Map</span></a></li>
                    <li><a href="#about" data-icon="info"><span class="orangose">About</span></a></li>
                    <li><a href="#contact" class="ui-state-persist" data-icon="mail"><span class="orangose">Contact</span></a></li>
                </ul>
            </div><!-- /navbar -->
        </div>
        <div id="wrappa3">
            <div id="contact_success"><h3>Thank you for Contacting Us!</h3><div id="contact_success_words"><p>We will get back to you as soon as possible!</p></div></div>
            <div id="contact_form">
                <form id="form1">
                    <h2 class="contact_header">Contact Us Today!</h2>
                    <p>Please send us any questions comments or concerns that you have!  We will review what whatever is submitted to us and get back to you as soon as possible!  Thanks for visiting checkenginefree.com!  Please tell your friends!</p>
                    <div data-role="content">
                        <div data-role="fieldcontainer">
                            <label for="name" data-theme="d">Name:</label>
                            <input type="text" id="name" name="name" data-theme="a" placeholder="Enter Your Name"/>
                        </div>
                        <div data-role="fieldcontainer">
                            <label for="email" data-theme="d">E-mail Address:</label>
                            <input type="email" id="email" name="email" data-theme="a" placeholder="Enter Email"/>
                        </div>
                        <label for="comments" data-theme="d">Question(s), Comment(s) and/or Concern(s):</label>
                        <div data-role="fieldcontainer">
                            <textarea id="comments" name="comments" data-theme="d" placeholder="Enter Any Question(s), Comment(s) and/or Concern(s)"></textarea>
                        </div>
                    </div>
                    <input type="submit" data-theme="a" value="Drop Us a Line" id="submit"/>
                    <br/>
                    <br/>
                </form>
            </div>
            <br/>
            <hr/>
            <br/>
            <br/>
        </div>
        <br/>
        <br/>

        <div data-role="footer" data-position-fixed="true" data-theme="b" style="overflow:hidden;" data-tap-toggle="false">
            <span class="credit">checkenginefree.com &copy; 2017</span>
            <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the ''Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends!  :D</p>
        </div><!-- /footer -->
    </div>

    <div data-role="page" data-theme="b" id="loggins">
        <div data-role="header" style="overflow:hidden;" data-tap-toggle="false" data-theme="b">
            <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
            <div data-role="navbar">
                <ul class="nav-trickery">
                    <li><a href="#mappins"  data-icon="navigation"><span class="orangose">Map</span></a></li>
                    <li><a href="#about" data-icon="info"><span class="orangose">About</span></a></li>
                    <li><a href="#contact" class="ui-state-persist" data-icon="mail"><span class="orangose">Login</span></a></li>
                </ul>
            </div><!-- /navbar -->
        </div>
        <div id="wrappa3">
            Test login page....

            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

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
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i>Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <hr/>
        <br/>
        <br/>
    </div>
    <br/>
    <br/>

    <div data-role="footer" data-position-fixed="true" data-theme="b" style="overflow:hidden;" data-tap-toggle="false">
        <span class="credit">checkenginefree.com &copy; 2017</span>
        <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the ''Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends!  :D</p>
    </div><!-- /footer -->

    <script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" ></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js" ></script>
    <script type="text/javascript" src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBS5pkvW9RGZEcNC04MWLQoA3DySvAFLmg&amp;sensor=true&amp;v=3&amp;libraries=geometry" ></script>
    <script type="text/javascript" async>
        function checkAnswer(){answer1=$("div#testins1 div.wrong_info_text input.blackmath").val();answer2=$("div#testins2 div.wrong_info_text input.blackmath").val();answer3=$("div#testins3 div.wrong_info_text input.blackmath").val();if(answer1==9){answer_correct=true}else if(answer2==9){answer_correct=true}else if(answer3==9){answer_correct=true}else{answer_correct=false}}function sendMail(){alert($(this).parent().find(".plop_links").text());$(".report_this1").hide();$(".report_this2").hide();$(".report_this3").hide();$(".wrong_info_text").show()}function handle_errors(e){}function handle_geolocation_query(e){latitude=e.coords.latitude;longitude=e.coords.longitude;onPositionReady()}function onPositionReady(){initialize();map.setCenter(new google.maps.LatLng(latitude,longitude));$("#loading_animation").hide();$("#search_holder").show();$("h1#locations_header").show();$(".fb-like").show()}function codeAddress(){var e=document.getElementById("address").value;geocoder.geocode({address:e},function(e,t){if(t==google.maps.GeocoderStatus.OK){map.setCenter(e[0].geometry.location);map.setZoom(13)}else{alert("Your search was not successful Please try again using both city and state! ")}var n=encodeURIComponent("SELECT 'Location', 'Fcilty_nam' AS 'Store Name', 'Locality' AS 'Address/Phone','telephone', 'latitude-col','longitude-col' FROM "+FT_TableID+" ORDER BY ST_DISTANCE(Location, LATLNG"+e[0].geometry.location+") LIMIT 3");var r=new google.visualization.Query("https://www.google.com/fusiontables/gvizdata?tq="+n);r.send(getData);google.setOnLoadCallback(createSidebar);$("#sidebar").collapsible().enhanceWithin()})}function findClosestN(e,t){}function calculateDistances(e,t,n){var r=new google.maps.DistanceMatrixService;var i={origins:[e],destinations:[],travelMode:google.maps.TravelMode.DRIVING,unitSystem:google.maps.UnitSystem.METRIC,avoidHighways:false,avoidTolls:false};for(var s=0;s<t.length;s++)i.destinations.push(t[s].getPosition());r.getDistanceMatrix(i,function(e,r){if(r!=google.maps.DistanceMatrixStatus.OK){alert("Error was: "+r)}else{var i=e.originAddresses;var s=e.destinationAddresses;var o=document.getElementById("sidebar22");o.innerHTML="";var u=e.rows[0].elements;for(var a=0;a<n;a++){t[a].setMap(map);o.innerHTML+="<a href='javascript:google.maps.event.trigger(closest["+a+'],"click");\'>'+t[a].title+"</a><br>"+t[a].address+"<br>"+u[a].distance.text+" appoximately "+u[a].duration.text+"<br><hr>"}}})}function sortByDist(e,t){return e.distance-t.distance}function createSidebar(){navigator.geolocation.getCurrentPosition(function(e){var t=e.coords.latitude,n=e.coords.longitude;var r=encodeURIComponent("SELECT 'Location', 'Fcilty_nam' AS 'Store Name', 'Locality' AS 'Address/Phone','telephone', 'latitude-col','longitude-col' FROM "+FT_TableID+" ORDER BY ST_DISTANCE(Location, LATLNG("+t+","+n+")) LIMIT 3");var i=new google.visualization.Query("https://www.google.com/fusiontables/gvizdata?tq="+r);i.send(getData)})}function calculateDistances(e){service.getDistanceMatrix({origins:[origin],destinations:destinations[e],travelMode:google.maps.TravelMode.DRIVING,unitSystem:google.maps.UnitSystem.IMPERIAL,avoidHighways:false,avoidTolls:false},function(e,t){if(t!=google.maps.DistanceMatrixStatus.OK){alert("Error was: "+t)}else{var n=e.originAddresses;var r=e.destinationAddresses;htmlString='<table border="1">';deleteOverlays();for(var i=0;i<n.length;i++){var s=e.rows[i].elements;for(var o=0;o<s.length;o++){htmlString+="<tr><td>"+r[o]+"</td><td>"+s[o].distance.text+"</td></tr>"}}}var u=document.getElementById("outputDiv");htmlString+="</table>";u.innerHTML=htmlString})}function getData(e){if(!e){alert("no response");return}if(e.isError()){alert("Error in query: "+e.getMessage()+" "+e.getDetailedMessage());return}var t,n,r;FTresponse=e;numRows=e.getDataTable().getNumberOfRows();numCols=e.getDataTable().getNumberOfColumns();var i=0;var s=1;fusiontabledata="<h1 id=\"locations_header\"><img class='img-responsive' src='images/three_litte_locations.png'/></h1>";for(var o=0;o<numRows;o++){if(s==1){fusiontabledata+="<table><tr><div id='testins"+s+"' data-role='collapsible' data-collapsed='false' data-corners='false' data-theme='a' ><h3>"}else{fusiontabledata+="<table><tr><div id='testins"+s+"' data-role='collapsible' data-corners='false' data-theme='a'><h3 data-theme='b'>"}for(var u=1;u<numCols;u++){if(u<=2){if(u==1){var a=e.getDataTable().getValue(o,5);var f=e.getDataTable().getValue(o,4);var l=new google.maps.LatLng(f,a);var c=new google.maps.LatLng(latitude,longitude);var h=google.maps.geometry.spherical.computeDistanceBetween(l,c);var p=h*.000621371192;fusiontabledata+="<span class='location_name'>"+e.getDataTable().getValue(o,u)+"</span><br/><span id='distance_"+s+"'>&nbsp;&nbsp;&nbsp;&nbsp;"+p.toFixed(2)+" Miles Away</span></h3><br/>"}else if(u==2){fusiontabledata+="<div class='ui-grid-a' ><div class='ui-block-a'><p><a class='plop_links' href='javascript:myFTclick("+o+")'>"+e.getDataTable().getValue(o,u-1)+"<br/> "+e.getDataTable().getValue(o,u)+"</a></p></div><div class='ui-block-a'></div></div>"}}else if(u==3){location_wrong=e.getDataTable().getValue(o,1);address_wrong=e.getDataTable().getValue(o,2);phone_wrong=e.getDataTable().getValue(o,3);var d=e.getDataTable().getValue(o,u);d=d.replace("-",") ");var v="("+d;var m,g;fusiontabledata+="<div class='clear_phone'><a data-icon='phone' data-iconpos='top' data-role='button' data-theme='a' class='plop_links2' href='tel:"+e.getDataTable().getValue(o,u)+"'> <span class='ui-button-text' ><span class='orangose2' >"+v+"</span></a></div></li></ul></span><a class='report_this"+s+"' href='#' onclick='javascript:textins=$(this).parent().find(\".plop_links\").text();textins2=$(this).parent().find(\".plop_links2\").text();$(this).parent().find(\"div.wrong_info_text textarea\").text((textins +\" \"+textins2));$(this).parent().find(\".wrong_info_text\").show();$(\".report_this1\").hide();$(\".report_this2\").hide();$(\".report_this3\").hide();'>Report this as inaccurate</a><div class='wrong_info_text'><h3 class='responsibly'>Please Use This Responsibly!</h3><form id='form2'><label for='textarea'>Please let us know if this location has moved, closed or has a new phone number.  If you made a mistake and/or need to report another inaccurate listing simply refresh your browser on this page.  Thank you!</label><textarea cols='20' rows='3' class='invalid_data' data-theme='a' id='invalid_data'></textarea><div class='math_shift'><h3 class='contact_header2'>ATTENTION!</h3><p>Before submitting the form please do your part to help us in the fight against spam by entering the answer to the following math problem:</p><span class='math_problem'>3 + 6</span><input type='text' class='blackmath' name='blackmath' data-theme='a'/><br/></div><input class='invalid_data_button' style='color:#ff9000;' data-theme='a' onclick='textins=$(this).parent().parent().parent().find(\".plop_links\").text();$(\".textins\").text(textins);textins2=$(this).parent().parent().parent().find(\".plop_links2\").text();checkAnswer(); if(answer_correct==true){ var text =$(this).parent().parent().find(\"textarea.invalid_data\").val();$.ajax({type: \"POST\", url: \"processedwiz.php\", data: {cust: JSON.stringify(text), cust2: JSON.stringify(textins), cust3: JSON.stringify(textins2), cust4: JSON.stringify(latitude), cust5: JSON.stringify(longitude)}});$(\".wrong_info_text\").hide();$(\"div.invalid_info_success\").show();}else{alert(\"SORRY.  YOU MUST ENTER THE CORRECT ANSWER TO THE MATH PROBLEM BEFORE YOU SUBMIT AN INVALID DATA REPORT TO US!\")}'  type='submit' value='Submit'><input type='reset' data-theme='a' class='btn-reset' value='Nevermind' onclick='$(\".report_this1\").show();$(\".wrong_info_text\").hide();$(\".report_this2\").show();$(\".report_this3\").show();'> </form></div><div class='invalid_info_success'><h3 class='submission_success'>Submission Successfully Sent!  Thank You!</h3><p>Thank you for reporting the following location:</p><p class='textins'>"+m+"</p><p>If you happened to ask a question and left us your contact information then we will review your submission and get back to you ASAP!  If you wish to report more locations please do so by using the <span class='basic_links' onclick='location.href = \"map.html#contact\";'>contact page</span>!</p></div>"}else{if(u==5){y="hide_these"+s+"a";n=e.getDataTable().getValue(o,u)}else{var y="hide_these"+s;t=e.getDataTable().getValue(o,u)}fusiontabledata+="<span class='"+y+"'>"+e.getDataTable().getValue(o,u)+"<br/></span>"}}fusiontabledata+="</div>";s++;i++}fusiontabledata+="</div>";document.getElementById("sidebar").innerHTML=fusiontabledata;$(".wrong_info_text").hide();$(".invalid_info_success").hide();$("#contact_success").hide();$("#sidebar").collapsible().enhanceWithin()}function openInfoWindowGeocoded(e,t,n){if(geocoder){geocoder.geocode({address:e},function(r,i){if(i==google.maps.GeocoderStatus.OK){if(i!=google.maps.GeocoderStatus.ZERO_RESULTS){map.setCenter(r[0].geometry.location);openFtInfoWindow(r[0].geometry.location,t,n,e)}else{alert("No results found")}}else{alert("Geocode was not successful.  :(  How about trying city and state?")}})}}function openFtInfoWindow(e,t,n,r){if(!infoWindow)infoWindow=new google.maps.InfoWindow({});var i='<div class="FT_infowindow">'+t;if(n)i+="<br>"+n;if(r)i+="<br>"+r+"</a>";i+="<br>"+'<a href="javascript:map.setCenter(new google.maps.LatLng'+e+');map.setZoom(map.getZoom()+3);">zoom in</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a href="javascript:map.setCenter(new google.maps.LatLng'+e+');map.setZoom(map.getZoom()-1);">zoom out</a>';console.log(e);i+="<br/></div>";content22=i;infoWindow.setOptions({content:i,pixelOffset:null,position:e});infoWindow.open(map)}function myFTclick(e){var t=FTresponse.getDataTable().getValue(e,0);var n=FTresponse.getDataTable().getValue(e,2);var r=FTresponse.getDataTable().getValue(e,1);if(t.indexOf("<")==-1){var i=t.split(",");var s=parseFloat(i[4]);var o=parseFloat(i[5]);if(isNaN(s)||isNaN(o)){openInfoWindowGeocoded(n,r)}var u=new google.maps.LatLng(s,o);map.setZoom(15);openFtInfoWindow(u,r,0)}else{var u=gpolygons[e].position;openFtInfoWindow(u,r,0)}$("html, body").animate({scrollTop:$("#map_canvas").position().top},"slow")}function addClickHandler(e){google.maps.event.addListener(e,"click",function(e){if(infoWindow)infoWindow.close();infoWindow.setOptions({pixelOffset:null,content:e.row["Fcilty_nam"].value+"<br/>"+e.row["Locality"].value+"<br/>"+'<a href="javascript:map.setCenter(new google.maps.LatLng'+e.latLng+');map.setZoom(map.getZoom()+3);">zoom in</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="javascript:map.setCenter(new google.maps.LatLng'+e.latLng+');map.setZoom(map.getZoom()-1);">zoom out</a><br/><br/>',position:e.latLng});infoWindow.open(map)})}function initialize(){map=new google.maps.Map(document.getElementById("map_canvas"),{center:latlng,zoom:zoom,panControl:true,panControlOptions:{position:google.maps.ControlPosition.TOP_RIGHT},mapTypeId:google.maps.MapTypeId.ROADMAP});layer1=new google.maps.FusionTablesLayer(FT_TableID,{suppressInfoWindows:true});layer1.setQuery("SELECT Location FROM "+FT_TableID);layer1.setMap(map);addClickHandler(layer1);infoWindow=new google.maps.InfoWindow;geocoder=new google.maps.Geocoder}function onDataFetched(e){var t=e["rows"];var n;var r;var i;for(var s in t){i=new google.maps.LatLng(t[s][0],t[s][1]);n=t[s][2];r=t[s][3];if(n){createMarker(i,n,r)}else{createMarker(i,DEFAULT_ICON_URL,r)}}}function sendContact(){var e=$("input#name").val();var t=$("input#email").val();var n=$("textarea#comments").val();$.ajax({type:"POST",url:"processedwiz22.php",data:{cust:JSON.stringify(n),email:JSON.stringify(t),name:JSON.stringify(e)}})}var answer_correct=false;var answer1,answer2,answer3;var customerMarker=null;var gmarkers=[];var closest=[];var latitude,longitude;$(document).ready(function(){$("#search_holder").hide();$("h1#locations_header").hide();if(navigator.geolocation){navigator.geolocation.getCurrentPosition(handle_geolocation_query,handle_errors)}else{alert("Device probably not ready.")}});var FT_TableID="1hFcGeKfBgELMvxajsoMvgabWJX9jwNDKUB4HoAxG";google.load("visualization","1",{packages:["corechart","table","geomap"]});google.setOnLoadCallback(createSidebar);var FTresponse=null;var content22;var map=null;var geocoder=null;var infoWindow=null;var zoom=13;var latlng=new google.maps.LatLng(0,-100);var query="";var info=null;var gpolygons=[];var geoXml=null;$(document).ready(function(){$("#address").keypress(function(e){if(e.which&&e.which==13||e.keyCode&&e.keyCode==13){codeAddress()}})});$("#form1").validate({rules:{name:{required:true},comments:{required:true},email:{required:true}},messages:{name:{required:"Please enter your first name."},email:{required:"Please enter your email."},comments:{required:"Please enter your comments."}},errorPlacement:function(e,t){e.appendTo(t.parent().prev())},submitHandler:function(e){sendContact();$("#form1").hide();$("#contact_success").show();$("#contact_success").css("visibility","visible");return false}})
    </script>

@endsection
