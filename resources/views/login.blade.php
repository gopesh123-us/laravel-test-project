@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4">
                <h2 class="mb-4 text-center">Login</h2>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login.submit') }}" method="POST" class="form-group">
                            @csrf
                            <div class="mb-2">
                                <label for="name">User Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="email">User Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="pwd">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
