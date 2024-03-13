@extends('layout')
@section('title', 'index page')

@section('content')
    <h1 class="page-title">index page</h1>
    <div class="data-container">
        @if (count($data) > 0)
            @foreach ($data as $item)
                <div class="data-item">
                    <ul class="data-list">
                        <li class="data-list-item">
                            <a href="{{ route('infos.show', $item['id']) }}">{{ $item['id'] }}</a>
                        </li>
                        <li class="data-list-item">
                            <a href="{{ route('infos.show', $item['id']) }}">{{ $item['name'] }}</a>
                        </li>
                        <li class="data-list-item">
                            <a href="{{ route('infos.show', $item['id']) }}">{{ $item['age'] }}</a>
                        </li>
                    </ul>
                </div>
            @endforeach
        @else
            <div class="data-item">
                <h3> there is no data to display</h3>
            </div>
        @endif
    </div>
@endsection
