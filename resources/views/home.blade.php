@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Home</h1>
        Jean-François Champollion vanquish the impossible gathered by gravity billions upon billions network of wormholes
        prime number. Muse about stirred by starlight astonishment bits of moving fluff finite but unbounded dispassionate
        extraterrestrial observer. With pretty stories for which there's little good evidence Orion's sword vastness is
        bearable only through love with pretty stories for which there's little good evidence finite but unbounded two
        ghostly white figures in coveralls and helmets are softly dancing and billions upon billions upon billions upon
        billions upon billions upon billions upon billions.
        <div class="row mt-2">
            @foreach ($blogs as $blog)
                @if ($blog['status'] == 1)
                    <div class="col-md-4 mt-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['body'] }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4 mt-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['body'] }}</p>
                                <div class="btn-sm btn-warning">Pending</div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="row mt-2">
            @foreach ($authors as $author)
                <div class="col-md-4 mt-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2>{{ $author['name'] }}</h2>
                            <h3>Age: {{ $author['age'] }}</h3>
                            <p>Books: {{ $author['bookspublished'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @php
            $i = 20;
        @endphp

        @isset($i)
            <div class="alert alert-success mt-2">Variable is set</div>
        @endisset

        @empty($i)
            <div class="alert alert-warning">Variable has no value</div>
        @endempty
        @empty(!$i)
            <div class="alert alert-success">Variable has a value {{ $i }}</div>
        @endempty

        @switch($i)
            @case(6)
                <div class="alert alert-info">Value of i is {{ $i }}</div>
            @break

            @case(5)
                <div class="alert alert-info">Value of i is {{ $i }}</div>
            @break

            @default
                <div class="alert alert-info">Value of i is not valid - neither 5 nor 6</div>
        @endswitch
    </main>
@endsection
