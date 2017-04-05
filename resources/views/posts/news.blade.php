@extends('layout')
@section('title', 'News')
@section('content')


<h1 class="article-title-show">news categories</h1>

{{$news}}
<br/>

<a href="{{url('news/general')}}">General News...</a>
<br/>
<a href="{{url('news/retro')}}">Retro News...</a>
<br/>
<a href="{{url('news/nba')}}">NBA News...</a>
<br/>
<a href="{{url('news/former-players')}}">Former Players News...</a>






@endsection

