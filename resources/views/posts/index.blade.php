@extends('layouts.app')

@section('content')
<div class="container">
  @foreach ($posts as $post)
  <div class="row">
    <div class="col-6 offset-3">
      {{-- N+1 problem: --}}
      {{-- <a href="/profile/{{$post->user->id}}"><img class="w-100" src="/storage/{{$post->image}}" alt=""></a> --}}
      {{-- N+1 fixed: --}}
      <a href="/profile/{{$post->user->id}}"><img class="w-100" src="/storage/{{$post->image}}" alt=""></a>
    </div>
  </div>
  <div class="row pt-2 pb-4">
    <div class="col-6 offset-3">
      <p>
        <span class="font-weight-bold">
          <a href="/profile/{{$post->user_id}}">
            <span class="text-dark">{{$post->user->username}}</span>
          </a>
        </span>
        {{$post->caption}}
      </p>
    </div>
  </div>
  @endforeach

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      {{-- links come from paginate --}}
      {{ $posts->links() }}
    </div>
  </div>
</div>
@endsection