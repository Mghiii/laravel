@extends('layout')
@section('title', 'show page')

@section('content')
    <h1 class="page-title">show page</h1>
    <div class="data-container">
        <div class="data-item">
            <ul class="data-list">
                <li class="data-list-item">{{ $data['id'] }}</li>
                <li class="data-list-item">{{ $data['name'] }}</li>
                <li class="data-list-item">{{ $data['age'] }}</li>
                <a href="{{ route('infos.edit', $data['id']) }}" class="edit-btn">edit</a>
            </ul>
        </div>
    </div>
@endsection
