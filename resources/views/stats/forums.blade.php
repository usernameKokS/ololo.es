@extends('layouts.master')

@section('content')
<foro site="{{$site}}"
      post="{{$post}}"
      sites="{{$sites}}"
      posts="{{$posts}}"
></foro>


@endsection
