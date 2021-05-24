@extends('layouts.main_layout')
@section('content_movies')
<li>{{$film ->original_title}}</li>
<li>{{$film ->nationality}}</li>
<li>{{$film ->date}}</li>
<li>{{$film ->vote}}</li>
<a href="{{route('homepage')}}">Ritorna indietro</a>
@endsection
