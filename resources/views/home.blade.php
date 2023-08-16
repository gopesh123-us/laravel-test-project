@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Home</h1>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis
        earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
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
            <div class="alert alert-success">Variable has a value</div>
        @endempty

        @switch($i)
            @case(6)
                <div class="alert alert-info">Value of i is {{ $i }}</div>
            @break

            @case(5)
                <div class="alert alert-info">Value of i is {{ $i }}</div>
            @break

            @default
                <div class="alert alert-info">Value of i is not valid</div>
        @endswitch
    </main>
@endsection
