@extends('public.images.layout')
@section('content')
@section('title', 'Blog')

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
        <h2 class="contact_header">Posts</h2>
        <div id="about_us_words">
            <table class="table">
                <thead>
                <tr>
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

                        </td><td><img class="img-responsive thumbnail" src="../images/{{ $item->imgPath}}"></td>
                        @can('isAdmin')

                        @if($item->user_id == $user)

                            <td>
                                <a href="{{ url('/posts/' . $item->id . '/edit') }}" class="btn btn-success">{{Auth::user()->name}}- -Update Post</a><br/><br/>
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

    <br/>
    <hr/>
    <br/>
    <br/>
</div>
</div>


<div data-role="footer" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
    <span class="credit">checkenginefree.com &copy; 2017</span>
    <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
</div><!-- /footer -->
</div>


@endsection

