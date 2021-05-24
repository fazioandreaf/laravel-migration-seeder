@extends('layouts.main_layout')
@section('content_movies')
@foreach ($movies as $item)
<li>
<a href="{{route('film',$item->id)}}">

    {{$item['id']}}
    {{$item['title']}}
</a>

</li>
@endforeach
    {{-- {{$movies[]}} --}}
@endsection
