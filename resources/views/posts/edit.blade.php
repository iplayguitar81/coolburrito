@extends('layout')
@section('title', 'Edit '.$post->title)
@section('content')

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

    @can('isAdmin')

    <div class="">
        <h1 class="" style="font-family:Pacifico,cursive;color:#E63C4D;font-size:4em;"><img src="/images/edit-post-checkengine.png" alt="Edit Post"></h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif



        {!! Form::model($post, [
            'method' => 'PATCH',
            'url' => ['/posts', $post->id],
            'class' => '','files' => true
        ]) !!}

        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('title', trans('posts.title'), ['class' => 'control-label']) !!}
            <div class="">
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <br/>

        <div class="form-group {{ $errors->has('subHead') ? 'has-error' : ''}}">
            {!! Form::label('subHead', trans('posts.subhead'), ['class' => '']) !!}
            <div class="">
                {!! Form::text('subHead', null, ['class' => 'form-control']) !!}
                {!! $errors->first('subHead', '<p class="">:message</p>') !!}
            </div>
        </div>

        <br/>
        <br/>
        <div class="form-group {{ $errors->has('mainImg_caption') ? 'has-error' : ''}}">
            {!! Form::label('mainImg_caption', trans('posts.mainImg_caption'), ['class' => '']) !!}
            <div class="">
                {!! Form::text('mainImg_caption', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mainImg_caption', '<p class="uk-alert-danger">:message</p>') !!}
            </div>
        </div>
        <br/>
        <br/>


        <div class="form-group {{ $errors->has('main_article') ? 'has-error' : ''}}">
            {!! Form::label('main_article', trans('posts.main_article'), ['class' => '']) !!}
            <div class="">
                {{Form::hidden('main_article', 0)}}
                {{Form::checkbox('main_article', 1, $post->main_article, ['class' => 'switch', 'data-on-text'=>"1", 'data-off-text'=>"0"])}}
                {!! $errors->first('main_article', '<p class="uk-alert-danger">:message</p>') !!}
            </div>
        </div>
        <br/>


        <div class="form-group {{ $errors->has('published') ? 'has-error' : ''}}">
            {!! Form::label('published', trans('posts.published'), ['class' => '']) !!}
            <div class="">
                {{Form::hidden('published', 0)}}
                {{Form::checkbox('published', 1, $post->published, ['class' => 'switch', 'data-on-text'=>"1", 'data-off-text'=>"0"])}}
                {!! $errors->first('published', '<p class="uk-alert-danger">:message</p>') !!}
            </div>
        </div>
        <br/>

        <div class="form-group">
            {!! Form::label('category', trans('posts.category'), ['class' => '']) !!}

            {{ Form::select('category', [
           'news' => 'General News',
           'nba' => 'NBA League News',
           'former_players' => 'Former Players News',
           'retro' => 'Retro News'

           ]
        ) }}

        </div>
        <br/>
        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
            {!! Form::label('body', trans('posts.body'), ['class' => '']) !!}
            <div class="">
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        {{--<div class="form-group {{ $errors->has('imgPath') ? 'has-error' : ''}}">--}}
        {{--{!! Form::label('imgPath', trans('posts.imgPath'), ['class' => 'col-sm-3 control-label']) !!}--}}
        {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('imgPath', null, ['class' => 'form-control']) !!}--}}
        {{--{!! $errors->first('imgPath', '<p class="help-block">:message</p>') !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        <br/>
        <label>Current Main Article Image:</label>
        <img class="img-responsive thumbnail" src="../../images/{{ $post->imgPath}}">

        <br/>
        <label>Update Lead Image</label>
        <div class="form-group">
            <div class="">
                <input type="file" name="file" id="file" onchange="readURL(this);"/>
            </div>
        </div>
        <br/>
        {{csrf_field()}}

        <div id="blah2">
            <img id="blah" class="img-responsive thumbnail" src="#" alt="uploaded image">
        </div>


        <div class="form-group {{ $errors->has('imgPath') ? 'has-error' : ''}}">
            {!! Form::label('imgPath', trans('posts.imgPath'), ['class' => 'col-sm-3 control-label img_string']) !!}
            <div class="">
                {!! Form::text('imgPath', null, ['class' => 'form-control filename']) !!}
                {!! $errors->first('imgPath', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <br/>

        <br/>
        <br/>

        <div class="form-group">
            <div class="">
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}

        <br/>
        <br/>

        <div class="">
            <div class="">
                <form action="{{url('do-upload')}}"
                      class="dropzone" id="addImages">

                    {{csrf_field()}}
                    <input type="hidden" name="gallery_id" value="{{$post->id}}">

                </form>
            </div>

        </div>

        <h4>Article Images</h4>
        {{--{{$post->images}}--}}

        <div class="">

            <div class="">

                <div id="gallery-images">

                    <ul>
                        @foreach($post->images as $image)

                            <li>
                                <a href="{{url($image->file_path)}}" target="_blank">
                                    <img src="{{url($image->file_path)}}">
                                    {{--@if($image->user_id == $user)--}}

                                </a>
                                <br/>

                                <br/>

                                {{--Please Enter Caption Below &amp; Submit!--}}
                                <div class="panel panel-default"><div class="panel-body">

                                        @if($image->caption== null)

                                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="{{'#'.$image->id}}">Add Caption</button>
                                            <div id="{{$image->id}}" class="collapse">
                                                {{ Form::open(['route' => ['My.route2', $image->id], 'method' => 'post']) }}
                                                <br/>
                                                {{ Form::hidden('post_id', $post->id ) }}
                                                {!! Form::textarea('caption', null, ['class' => 'text-area', 'size' => '30x3']) !!}
                                                {{--{!! Form::submit(Auth::user()->name.' - -Delete Image', ['class' => 'btn btn-danger']) !!}--}}
                                                {{--@endif--}}
                                                <br/>
                                                {!! Form::submit('Save Caption', ['class' => 'btn btn-success']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        @else

                                            <h6>Image Caption:</h6><p>{{$image->caption}}</p></div>



                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="{{'#'.$image->id}}">Edit Caption</button>
                                    <div id="{{$image->id}}" class="collapse">
                                        {{ Form::open(['route' => ['My.route2', $image->id], 'method' => 'post']) }}
                                        <br/>
                                        {{ Form::hidden('post_id', $post->id ) }}
                                        {!! Form::textarea('caption', $image->caption, ['class' => 'text-area', 'size' => '30x3']) !!}
                                        {{--{!! Form::submit(Auth::user()->name.' - -Delete Image', ['class' => 'btn btn-danger']) !!}--}}
                                        {{--@endif--}}
                                        <br/>
                                        {!! Form::submit('Edit Caption', ['class' => 'btn btn-success']) !!}
                                        {!! Form::close() !!}
                                    </div>


                                    @endif



                                    <br/>
                                    <br/>

                                    {{ Form::open(['route' => ['My.route', $image->id], 'method' => 'delete']) }}
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    {{--{!! Form::submit(Auth::user()->name.' - -Delete Image', ['class' => 'btn btn-danger']) !!}--}}
                                    {{--@endif--}}

                                    {!! Form::close() !!}
                                </div>

                            </li>
                        @endforeach


                    </ul>

                </div>

            </div>

        </div>

        <br/>
        <br/>

        <a href="{{url('posts')}}" data-ajax="false">

            <button type="submit" class="uk-button uk-width-1-1 uk-margin-small-bottom">Back to All Posts</button>
        </a>

        @else <?php header("Location: /"); die(); ?>

        @endcan
    </div>


        </div>


        <div data-role="footer" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
            <span class="credit">checkenginefree.com &copy; 2017</span>
            <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
        </div><!-- /footer -->
    </div>




    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Login</div>--}}
    {{--<div class="panel-body">--}}
    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
    {{--{!! csrf_field() !!}--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label class="col-md-4 control-label">Password</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input type="password" class="form-control" name="password">--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<div class="checkbox">--}}
    {{--<label>--}}
    {{--<input type="checkbox" name="remember"> Remember Me--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--<i class="fa fa-btn fa-sign-in"></i>Login--}}
    {{--</button>--}}

    {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" ></script>
    <script type="text/javascript" src="//code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js" ></script>


@endsection






<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js')}}"></script>
<script src="{{url('/js/owl.carousel.js')}}"></script>
<script src="{{url('/js/image_upload.js')}}"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
    tinymce.init({ mode : 'specific_textareas', plugins: 'media, link', editor_selector : 'form-control' });

</script>

<script>

    $(document).ready(function(){


    });
    var baseUrl = "{{ url('') }}";
    var handleDropzoneFileUpload ={

        handleError: function(response) {
            console.log(response);
        },
        handleSuccess: function(response){
            var imageList =$('#gallery-images ul');
            var imageSrc = baseUrl + '/' + response.file_path;
            $(imageList).append('<li><a href=""><img src="'+imageSrc +'"></a><br/><span>Upload Successful</span><br/>Refresh Page for Delete Button');
        }
    };

    //
    //<button class="btn btn-danger" type="submit">Delete</button>
    {{--{!! Form::submit(Auth::user()->name.' - -Delete Image', ['class' => 'btn btn-danger']) !!}--}}
    {{--@endif--}}

    //

    //
    Dropzone.options.addImages ={

        maxFilesize: 2,

        acceptedFiles: 'image/*',
        success: function(file, response) {
            console.log(file);
            console.log(response);

            if(file.status =='success'){
                handleDropzoneFileUpload.handleSuccess(response);

            }
            else{
                handleDropzoneFileUpload.handleError(response);
            }
        },

    };

    $(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({

            navigation : true,
            singleItem: true

        });

    })



</script>

<style scoped>
    @import "https://fonts.googleapis.com/css?family=Pacifico";
    @import "https://fonts.googleapis.com/css?family=Boogaloo";
    @import "https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css";
    @import "{{url('/css/default-skin.css')}}";
    @import "{{url('/css/lightslider.css')}}";


    {{--getting this part right........ among files to remove after figuring out right gallery sitch:--}}

     {{--@import "{{url('/css/slick.css')}}";--}}
    {{--@import "{{url('/css/slick-theme.css')}}";--}}
    {{--@import "{{url('/css/slick-theme.css')}}";--}}
    @import "{{url('/css/owl.carousel.css')}}";
    @import "{{url('/css/owl.theme.css')}}";


    @import "{{url('/css/photoswipe.css')}}";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css";
    @import "https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/fonts/glyphicons-halflings-regular.woff";


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


    /*#owl-demo .item{*/
    /*margin: 3px;*/
    /*width: 80%;*/
    /*margin-left:10%;*/
    /*margin-right:10%;*/

    /*}*/
    /*#owl-demo .item img{*/
    /*display: block;*/
    /*width: 100%;*/
    /*!*height: auto;*!*/
    /*}*/



    /*.customNavigation{*/
    /*text-align: center;*/
    /*}*/

    /*.customNavigation a{*/
    /*-webkit-user-select: none;*/
    /*-khtml-user-select: none;*/
    /*-moz-user-select: none;*/
    /*-ms-user-select: none;*/
    /*user-select: none;*/
    /*-webkit-tap-highlight-color: rgba(0, 0, 0, 0);*/
    /*}*/


    .owl-carousel li {
        list-style:none;
        margin-right: .3em;
    }

    .owl-carousel li img {
        border-radius:.5em;
        transition:transform .15s ease-out;
    }

    .owl-carousel li img:hover {
        transform:scale(.98, .98);
    }

    .owl-carousel li img:active {
        transform:scale(.96, .96);
    }




</style>