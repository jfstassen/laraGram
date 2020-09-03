@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://picsum.photos/200/200" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>laraGram</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>123</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>18</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">laragram.com</div>
            <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, molestias.</div>
            <div><a href="#">laragram.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4"><img class="w-100" src="https://picsum.photos/200/200" alt=""></div>
        <div class="col-4"><img class="w-100" src="https://picsum.photos/200/200" alt=""></div>
        <div class="col-4"><img class="w-100" src="https://picsum.photos/200/200" alt=""></div>
    </div>
</div>
@endsection