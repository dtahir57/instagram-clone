@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flhe6-1.fna.fbcdn.net/vp/dc329f2462a0b3bd15000066178ec06f/5D6A68F1/t51.2885-19/s150x150/47695077_1142467529246148_2918301699196059648_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net" class="rounded-circle" />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>49 </strong>posts</div>
                <div class="pr-5"><strong>61 </strong>followers</div>
                <div class="pr-5"><strong>105 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}" target="__blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-4">
            <img src="https://instagram.flhe6-1.fna.fbcdn.net/vp/fd6cbb9f3883dc95c407902b06a299d7/5D62C9EB/t51.2885-15/sh0.08/e35/c0.86.1080.1080a/s640x640/56300324_657409934687581_2358465355402509538_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net" class="w-100" alt="">
        </div>
        <div class="col-md-4">
            <img src="https://instagram.flhe6-1.fna.fbcdn.net/vp/fd6cbb9f3883dc95c407902b06a299d7/5D62C9EB/t51.2885-15/sh0.08/e35/c0.86.1080.1080a/s640x640/56300324_657409934687581_2358465355402509538_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net" class="w-100" alt="">
        </div>
        <div class="col-md-4">
            <img src="https://instagram.flhe6-1.fna.fbcdn.net/vp/fd6cbb9f3883dc95c407902b06a299d7/5D62C9EB/t51.2885-15/sh0.08/e35/c0.86.1080.1080a/s640x640/56300324_657409934687581_2358465355402509538_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
