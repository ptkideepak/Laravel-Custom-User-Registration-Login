@extends('layout.app')

@section('content')

    <div class="p-5">
        @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
        @endif
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>
        <form class="user" method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                <div class="form-group">
                        <select class="form-control " name="role">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"> {{ ucfirst($role->name) }}</option>
                            @endforeach
                        </select>
                </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="assword-confirm" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Register
            </button>
        </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
            </div>
    </div>

@endsection
