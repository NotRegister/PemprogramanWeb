@include('bagian2.layout.header')

<div class="container text-center mt-3 p-4 bg-white">
    <h1>Gallery</h1>
    <div class="row">
        <div class="col-4">
            @foreach ($arrGambar as $var)

            @endforeach
            <img src="/img/1.jpg" class="img-thumbnail">
        </div>
    </div>
</div>
@include('bagian2.layout.footer')
