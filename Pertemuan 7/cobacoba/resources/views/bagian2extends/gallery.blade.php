@extends('bagian2extends.layout.header')
@section('title', 'Gallery')
@section('acGallery', 'active')
@section('content')
<style>
    #gambar {
        max-width: 70%;
        max-height: 70%;
    }

</style>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="pb-4">Gallery</h1>
    <div class="row" id="gambar">
        @foreach ($arrGambar as $var)
            <div class="col-4">
                <img src="{{ $var }}" class="img-thumbnail">
            </div>
        @endforeach
    </div>
</div>
@endsection
