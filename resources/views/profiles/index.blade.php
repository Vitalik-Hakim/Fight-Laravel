@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="data:image/png;base64,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" height="150" width="100" alt="image address" class="rounded-circle">
    </div>
    <div class="col-9 pt-5" >
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user-> username}}</h1>
            <a href="#">Start Fight</a>
    </div>
        <div class="d-flex">
            <div class="pr-5"><strong>20K</strong> Fights </div>
            <div class="pr-5"><strong>200</strong> Fighters </div>
            <div class="pr-5"><strong>200K</strong> Fightees </div>
        </div>
            <div class="pt-4 font-weight-bold"> {{$user-> profile -> title }}</div>
            <div>{{$user -> profile-> description}}</div>
            <div> <a href="{{$user->profile->url ?? 'N/A'}}">{{$user ->profile -> url ?? 'N/A'}}</a></div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://media.istockphoto.com/vectors/vector-clenched-fists-fight-mma-kick-boxing-karate-sport-night-cage-vector-id841242250?k=20&m=841242250&s=612x612&w=0&h=H6ZzMimFXBdyVQ3MKxnpmDwvmz2D4dp5IUIYaRhDBAg=" alt="Post" class="w-100">
        </div>
                <div class="col-4">
            <img src="https://media.istockphoto.com/vectors/vector-clenched-fists-fight-mma-kick-boxing-karate-sport-night-cage-vector-id841242250?k=20&m=841242250&s=612x612&w=0&h=H6ZzMimFXBdyVQ3MKxnpmDwvmz2D4dp5IUIYaRhDBAg=" alt="Post" class="w-100">
        </div>
                <div class="col-4">
            <img src="https://media.istockphoto.com/vectors/vector-clenched-fists-fight-mma-kick-boxing-karate-sport-night-cage-vector-id841242250?k=20&m=841242250&s=612x612&w=0&h=H6ZzMimFXBdyVQ3MKxnpmDwvmz2D4dp5IUIYaRhDBAg=" alt="Post" class="w-100">
        </div>

    </div>
</div>
</div>
@endsection
