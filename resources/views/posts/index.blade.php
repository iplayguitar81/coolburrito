@extends('layout')
@section('content')
@section('title', 'Blog')

<div data-role="page" data-theme="b" id="loggin2">
    <div data-role="header" data-tap-toggle="false" data-theme="b">
        <img class='img-responsive' alt='checkenginefree.com' src='/images/checkenginelogoyay3.png'/>
        <div data-role="navbar">
            <ul class="nav-trickery">
                <li><a href="https://level3.checkenginefree.com" data-ajax="false" data-icon="navigation"><span class="orangose">Map</span></a></li>
            </ul>
        </div><!-- /navbar -->
    </div>
    <div id="wrappa2">



        <div class="col-md-12">
            <h1>Posts &nbsp;&nbsp;&nbsp;</h1>

            {{--{{'This is the code to test output for locally stored CSV file... see controller'}}--}}
            {{--@foreach($results as $tubular)--}}
            {{--<p>{{$tubular->title}}</p>--}}
            {{--<p>{{$tubular->subhead}}</p>--}}
            {{--<p>{{$tubular->body}}</p>--}}
            {{--<p>{{$tubular->imgpath}}</p>--}}
            {{--@endforeach--}}

            @can('isAdmin')
            <div class="panel panel-success pull-right"> <div class="panel-heading">
                    <h3 class="panel-title">Welcome {{Auth::user()->name}}</h3> </div>
                <div class="panel-body">
                    <a href="{{ url('/posts/create') }}" data-ajax="false" class="btn btn-primary btn-sm">Add New Post</a>
                    &nbsp;
                    <a href="{{ url('/posts/file_upload') }}" class="btn btn-success btn-sm">Import CSV Posts</a>
                    &nbsp;
                    <a href="{{ url('/posts/file_export') }}" class="btn btn-warning btn-sm">Export Excel All Posts</a>

                </div>
            </div>
            @endcan
            <table data-role="table" id="table-custom-2" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-popup-theme="a">
                <thead>
                <tr class="ui-bar-d">
                    <th>{{ trans('posts.title') }}</th><th>{{ trans('posts.subhead') }}</th><th>Date</th><th>{{ trans('posts.body') }}</th><th>Image</th>@can('isAdmin')<th>Actions</th>@endcan
                </tr>
                </thead>
                <tbody>
                {{-- */$x=0;/* --}}
                @foreach($posts as $item)
                    {{-- */$x++;/* --}}
                    <tr>
                        {{--<td>{{ $x }}</td>--}}
                        <td><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title }}</a> <span class="pull-left"><br/>{{'Post images: '. $item->images()->count() }}</span></td><td>{{ $item->subHead }}</td><td>{{ $item->created_at->format('M dS Y') }}</td><td>

                            {{strip_tags(str_limit($item->body, 20))}}

                        </td><td><img class="img-responsive thumbnail" src="../images/{{ $item->imgPath}}" style="width: 325px; height:126px"></td>
                        @can('isAdmin')

                        @if($item->user_id == $user)

                            <td>
                                <a href="{{ url('/posts/' . $item->id . '/edit') }}" data-ajax="false" class="btn btn-success">{{Auth::user()->name}}- -Update Post</a><br/><br/>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/posts', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}


                                {!! Form::submit(Auth::user()->name.' - -Delete Post', ['class' => 'btn btn-danger']) !!}

                                @endif

                                {!! Form::close() !!}
                            </td>
                            @endcan
                    </tr>

                @endforeach
                </tbody>
            </table>
            <div class="pagination"> {!! $posts->render() !!} </div>


            {{--@foreach($posts as $item)--}}

            {{--<article class="uk-article">--}}

            {{--<h1 class="uk-article-title"><a href="{{ url('posts', $item->id) }}">{{ $item->title }}</a></h1>--}}
            {{--<p class="uk-article-lead">{{$item->subHead}}</p>--}}
            {{--<p class="uk-article-meta">{{ $item->created_at }}</p>--}}

            {{--<div class="uk-grid">--}}
            {{--<div class="uk-width-medium-1-2 uk-push-1-2"><img class="uk-responsive-width" src="../images/{{ $item->imgPath}}"></div>--}}
            {{--<div class="uk-width-medium-1-2 uk-pull-1-2">{{$item->body}}</div>--}}
            {{--</div>--}}





            {{--</article>--}}
            {{--<hr class="uk-article-divider">--}}
            {{--@endforeach--}}
            {{--<p>{{ print_r($route) }}</p> heres where i need to figure out how to
            display the route name better.....
            --}}
        </div>


    </div>


    <div data-role="footer" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
        <span class="credit">checkenginefree.com &copy; 2017</span>
        <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
    </div><!-- /footer -->
</div>

<script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" ></script>
<script type="text/javascript" src="//code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js" ></script>
@endsection


