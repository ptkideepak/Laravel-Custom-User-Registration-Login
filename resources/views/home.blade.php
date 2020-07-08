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
            <h1 class="h4 text-gray-900 mb-4">You are successfully logged in as <strong>{{ ucfirst($userRole) }}</strong></h1>
            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
        </div>

    </div>

@endsection
