@extends('layout')
@section('title', 'edit page')

@section('content')
    <h1 class="page-title">edit page</h1>
    <div class="data-container form-container">
        <h1 class="section-title">Edit a user</h1>
        <form action="{{ route('infos.update', $data['id']) }}" method="POST" class="user-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-input" value="{{ $data['name'] }}">
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age" class="form-label">Age:</label>
                <input type="text" name="age" class="form-input" value="{{ $data['age'] }}">
                @error('age')
                    <div class="error-message">{{ $message }}
                    </div>
                @enderror

            </div>
            <button type="submit" class="form-submit">Submit</button>
        </form>
    </div>
@endsection
