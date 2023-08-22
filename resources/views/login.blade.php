@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="mb-4 text-center">Login</h2>
                <div class="card">
                    <div class="card-body">

                        <form action="" class="form-group">
                            <div class="mb-2">
                                <label for="username">User Name</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="pwd">Password</label>
                                <input type="password" name="pwd" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="email">User Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
