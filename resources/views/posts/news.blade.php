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

@section('title', 'News')
@section('content')




    <div data-role="page" data-theme="b" id="loggin2">
        <div data-role="header" data-tap-toggle="false" data-theme="b">
            <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
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
                            <h2 class="contact_header">CheckEngineFree.com Blog</h2>

                  <p>This will link to all of the blog articles and include pagination...</p>
                        </article>



                        <br/>
                    </div>
                    <hr>



                    <br/>
                    <br/>

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
        font-size: 2em !important;
        text-align:center;
        color:#ff9000;
        text-shadow: none !important;}

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

</style>


<script src="{{url('/js/jquery.js')}}"></script>



<script>

    $(function(){

        // Drawing the HTML for PhotoSwipe
        function buildPswdHtml(){
            $("body").append([
                '<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">',
                '  <div class="pswp__bg"></div>',
                '  <div class="pswp__scroll-wrap">',
                '    <div class="pswp__container">',
                '      <div class="pswp__item"></div>',
                '      <div class="pswp__item"></div>',
                '      <div class="pswp__item"></div>',
                '    </div>',
                '    <div class="pswp__ui pswp__ui--hidden">',
                '      <div class="pswp__top-bar">',
                '          <div class="pswp__counter"></div>',
                '          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>',
                '          <button class="pswp__button pswp__button--share" title="Share"></button>',
                '          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>',
                '          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>',
                '          <div class="pswp__preloader">',
                '            <div class="pswp__preloader__icn">',
                '              <div class="pswp__preloader__cut">',
                '                <div class="pswp__preloader__donut"></div>',
                '              </div>',
                '            </div>',
                '          </div>',
                '      </div>',
                '      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">',
                '        <div class="pswp__share-tooltip"></div> ',
                '      </div>',
                '      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>',
                '      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>',
                '      <div class="pswp__caption">',
                '        <div class="pswp__caption__center"></div>',
                '      </div>',
                '    </div>',
                '  </div>',
                '</div>'
            ].join(""));
        }


        // From the gallery, get the items for PhotoSwipe
        function getGalleryItems($gallery){
            var items = [];

            $gallery.find("a").each(function(){
                var $anchor = $(this),
                        size = $anchor.attr("data-size").split("x"),
                        title = $anchor.attr("data-title"),
                        item = {
                            el: $anchor.get(0),
                            src: $anchor.attr("href"),
                            w: parseInt(size[0]),
                            h: parseInt(size[1])
                        };

                // caption
                if( title ) item.title = title;

                items.push(item);
            });

            return items;
        }


        //Opening the PhotoSwipe
        function openGallery($gallery, index, items, pswpOptions){
            var $pswp = $(".pswp"),
                    owl = $gallery.data("owlCarousel"),
                    gallery;

            //Set an option value
            var options = $.extend(true, {
                // Image number to open
                index: index,

                //Zoom setting at the time of image click
                getThumbBoundsFn: function(index){
                    var $thumbnail = $(items[index].el).find("img"),
                            offset = $thumbnail.offset();
                    return {
                        x: offset.left,
                        y: offset.top,
                        w: $thumbnail.outerWidth()
                    };
                }
            }, pswpOptions);

            //Display the PhotoSwipe
            gallery = new PhotoSwipe($pswp.get(0), PhotoSwipeUI_Default, items, options);
            gallery.init();

            // In accordance with the switching of PhotoSwipe slide , OwlCarousel also adjusts position
            gallery.listen("beforeChange", function(x){
                owl.goTo(this.getCurrentIndex());
            });

            gallery.listen("close", function(){
                this.currItem.initialLayout = options.getThumbBoundsFn(this.getCurrentIndex());
            });
        }


        // Initialization
        function initializeGallery($elem, owlOptions, pswpOptions){

            //If the DOM for PhotoSwipe does not exist , a new drawing
            if( $(".pswp").size() === 0 ){
                buildPswdHtml();
            }

            // Scan to accommodate a plurality of gallery
            $elem.each(function(i){
                var $gallery = $(this),
                        uid = i + 1,
                        items = getGalleryItems($gallery),
                        options = $.extend(true, {}, pswpOptions);

                // Initialization of OwlCarousel
                $gallery.owlCarousel(owlOptions);

                //Assign a unique ID to each gallery
                options.galleryUID = uid;
                $gallery.attr("data-pswp-uid", uid);

                // With the click of each item , start PhotoSwipe
                $gallery.find(".owl-item").on("click", function(e){
                    if( !$(e.target).is("img") ) return;

                    //items pass a copy because it is rewritten to PhotoSwipe.init ()
                    openGallery($gallery, $(this).index(), items.concat(), options);
                    return false;
                });
            });
        }


        // In the sample to perform the processing for the `.owl-carousel`
        var owlOptions = {
                    //what to mess with if you want to change the amount of slides on the page no matter what as default 3 will show up...
//                    itemsCustom: [[0, 3]],
                    items: 3,
                    responsiveRefreshRate: 0,
                    navigation: true,
//                    pagination: true,
//                    paginationNumbers: true,
                    scrollPerPage: false,
                    dots: true,
                    dotsEach: true
                },
                pswpOptions = {
                    bgOpacity: 0.9,
                    history: false,
                    shareEl: true
                };

        initializeGallery($(".owl-carousel"), owlOptions, pswpOptions);

    });



</script>



<script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" ></script>
<script type="text/javascript" src="//code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js" ></script>

<script src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{url('/js/star-rating.js')}}"></script>
<script src="{{url('/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script src="{{url('/js/photoswipe.min.js')}}"></script>
<script src="{{url('/js/photoswipe-ui-default.min.js')}}"></script>