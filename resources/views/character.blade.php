@extends('layouts.app')

@section('content')
    <div class="list">
        <h1>{{ $character['name'] }} Quote{{ count($character->quotes)>1?'s':'' }}</h1>
        <div class="list__content">
            @foreach ($character->quotes as $quote)
                <a class="list-item">
                    {{ $quote['sentence'] }}
                </a>
            @endforeach
            </ul>
        </div>


        <style>
            .list__content {
                margin-top: 10px;
                overflow: visible;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: stretch;
                gap: 10px;
            }

            .list-item {
                border: 1px solid transparent;
                box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
                border-radius: 10px;
                padding: 10px;
                transition: 0.2s;
                text-decoration: none;
                color: black;
            }
        </style>
    @endsection
