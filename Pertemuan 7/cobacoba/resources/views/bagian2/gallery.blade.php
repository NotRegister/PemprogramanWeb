@include('bagian2.layout.header')

<div class="container text-center mt-3 p-4 bg-white">
    <h1>Gallery</h1>
    <div class="row">
        @foreach ($arrGambar as $var)
            <div class="col-4">
                <img src="{{ $var }}" class="img-thumbnail">
            </div>
        @endforeach
    </div>
</div>
@include('bagian2.layout.footer')
