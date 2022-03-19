@extends('bagian3extends.layout.master')
@section('title', 'Admin Page')
@section('acAdmin', 'active')
@section('content')


    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Halaman Admin #1</h1>
        <div class="row">
            <div class="col-12">
                {{-- menggunakan slot --}}
                @component('bagian3extends.layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    @slot('title')
                        Perhatian
                    @endslot
                    100 data perlu diperbaiki
                @endcomponent

                @component('bagian3extends.layout.alert')
                    @slot('class')
                        danger
                    @endslot
                    @slot('title')
                        Awas
                    @endslot
                    Hari ini deadline laporan pejalanan dinas!
                @endcomponent

                @component('bagian3extends.layout.alert')
                    @slot('class')
                        success
                    @endslot
                    @slot('title')
                        Mantab
                    @endslot
                    Bulan depan cuti panjang..
                @endcomponent
            </div>
        </div>
        <h1 class="mt-3 mb-3">Halaman Admin #2</h1>
        <div class="row" style="margin-bottom: 50px">
            <div class="col-12">
                {{-- one line --}}
                @component('bagian3extends.layout.alert', ['class' => 'warning', 'title' => 'Peringatan'])
                    100 data perlu diperbaiki
                @endcomponent

                @component('bagian3extends.layout.alert', ['class' => 'danger', 'title' => 'Awas'])
                    Hari ini deadline laporan pejalanan dinas!
                @endcomponent

                @component('bagian3extends.layout.alert', ['class' => 'success', 'title' => 'Mantab'])
                    Bulan depan cuti panjang..
                @endcomponent
            </div>
        </div>
    </div>
@endsection
