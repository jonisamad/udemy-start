@extends('layout')
@section('content')
    <!-- @foreach($posts as $post)
    <p>
    <h3>{{$post->title}}</h3>
    </p>
    @endforeach -->
    <!-- atau bisa juga pakai forelse -->
    @forelse($posts as $post)
    <p>
        <h3>
            <!-- {{$post->title}} -->
            <!-- bisa juga tambahkan link seperti di bawah -->
            <a href="{{route('posts.show',['post' => $post->id])}}">{{$post->title}}</a>
        </h3>
    </p>
    @empty
        <p>No Blog post yet</p>
    @endforelse
@endsection('content')