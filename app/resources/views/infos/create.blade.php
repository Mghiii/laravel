@extends('layout')
@section('title', 'show page')

@section('content')
    <h1 class="page-title">show page</h1>
    <div class="data-container form-container">
        <h1 class="section-title">Create a new user</h1>
        <form action="{{ route('infos.store') }}" method="POST" class="user-form">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-input" value="{{ old('name') }}">
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age" class="form-label">Age:</label>
                <input type="text" name="age" class="form-input" value="{{ old('age') }}">
                @error('age')
                    <div class="error-message">{{ $message }}
                    </div>
                @enderror

            </div>
            <button type="submit" class="form-submit">Submit</button>
        </form>
    </div>
@endsection
