<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modul 7 pertama </title>
</head>

<body>
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{-- contoh agar tag html tebaca --}}
            {!! $nama !!}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nilai }}
        </h1>
    </div>
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now()) }}
        </h1>
    </div>

    {{-- contoh if else --}}
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
            Contoh if else
        </h1>
    </div>
    <div class="container text-center py-1 bg-white">
        @if ($nilai >= 0 and $nilai < 50)
            <div class="alert alert-danger d-inline-block">maaf, anda tidak lulus</div>
        @elseif ($nilai >= 50 and $nilai <= 100)
            <div class="alert alert-primary d-inline-block">Selamat, anda lulus</div>
        @else
            <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
        @endif
    </div>

    {{-- contoh switch case --}}
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
            Contoh switch case
        </h1>
    </div>
    <div class="container text-center py-1 bg-white">
        @switch($nilai)
            @case(0)
                <div class="alert alert-danger d-inline-block">tidak ujian</div>
            @break

            @case(75)
                <div class="alert alert-warning d-inline-block">lumayan</div>
            @break

            @case(100)
                <div class="alert alert-primary d-inline-block">Sempurna/div>
                @break

                @default
                    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
            @endswitch
        </div>

        {{-- contoh perulangan for --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan for #1
            </h1>
        </div>
        <div class="container text-center py-3 bg-white">
            @for ($i = 0; $i < 5; $i++)
                <div class="alert alert-primary d-inline-block">laravel</div>
            @endfor
        </div>

        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan for #2
            </h1>
        </div>
        <div class="container text-center py-3 bg-white">
            @for ($i = 0; $i < 5; $i++)
                <div class="alert alert-primary d-inline-block">{{ $i }}</div>
            @endfor
        </div>

        {{-- contoh perulangan while --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan while
            </h1>
        </div>
        <div class="container text-center py-3 bg-white">
            <?php $i = 0; ?>
            @while ($i < 5)
                <div class="alert alert-primary d-inline-block">{{ $i }}</div>
                <?php $i++; ?>
            @endwhile
        </div>

        {{-- contoh perulangan foreach #1 --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan foreach #1
            </h1>
        </div>
        <div class="text-center">
            @foreach ($arrnilai as $var)
                <div class="alert alert-primary d-inline-block">{{ $var }}</div>
            @endforeach
        </div>

        {{-- contoh perulangan foreach if #2 --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan foreach dengan if #2
            </h1>
        </div>
        <div class="text-center">
            @foreach ($arrnilai as $var)
                @if ($var >= 0 and $var < 50)
                    <div class="alert alert-danger d-inline-block">{{ $var }}</div>
                @elseif ($var >= 50 and $var <= 100)
                    <div class="alert alert-primary d-inline-block">{{ $var }}</div>
                @endif
            @endforeach
        </div>

        {{-- contoh perulangan forelse --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan forelse #1
            </h1>
        </div>
        <div class="text-center">
            @forelse ($arrnilai as $var)
                <div class="alert alert-primary d-inline-block">{{ $var }}</div>
            @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data</div>
            @endforelse
        </div>

        {{-- contoh perulangan forelse dengan if #2 --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh Perulangan forelse dengan if #2
            </h1>
        </div>
        <div class="text-center">
            @forelse ($arrnilai as $var)
                @if ($var >= 0 and $var < 50)
                    <div class="alert alert-danger d-inline-block">{{ $var }}</div>
                @elseif ($var >= 50 and $var <= 100)
                    <div class="alert alert-primary d-inline-block">{{ $var }}</div>
                @endif
            @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data</div>
            @endforelse
        </div>

        {{-- contoh penggunaan @continue --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh perintah continue
            </h1>
        </div>
        <div class="text-center">
            {{-- nilai dibawah 50 akan diskip / tidak dimunculkan --}}
            @foreach ($arrnilai as $var)
                @if ($var < 50)
                    @continue
                @endif
                <div class="alert alert-success d-inline-block">{{ $var }}</div>
            @endforeach
        </div>

        {{-- contoh penggunaan @break --}}
        <div class="container text-center mt-3 py-3 bg-white">
            <h1 class="bg-danger px-3 py-1 text-white d-inline-block">
                Contoh perintah break
            </h1>
        </div>
        <div class="text-center">
            {{-- jika bertemu dengan nilai dibawah 50 akan langsung diberhentikan perulangannya --}}
            @foreach ($arrnilai as $var)
                @if ($var < 50)
                @break
            @endif
            <div class="alert alert-success d-inline-block">{{ $var }}</div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
