@extends('layout')
@section('title', 'show page')

@section('content')
    <h1 class="page-title">show page</h1>
    <div class="data-container">
        <div class="data-item">
            <ul class="data-list">
                <li class="data-list-item">ID: {{ $data['id'] }}</li>
                <li class="data-list-item">Name: {{ $data['name'] }}</li>
                <li class="data-list-item">Age: {{ $data['age'] }}</li>
            </ul>
            <div class="button-container">
                <a href="{{ route('infos.edit', $data['id']) }}" class="edit-btn">Edit</a>
                <form action="{{ route('infos.destroy', $data['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="destroy-btn">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
