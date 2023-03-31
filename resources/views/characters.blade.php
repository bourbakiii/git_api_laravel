@extends('layouts.app')

@section('content')
    <div class="list">
        <h1>Characters</h1>
        <small>Click on character to watch the character quoutes</small>
        <div class="list__content">
            @foreach ($characters as $character)
                <a href='{{ $character->house }}/{{ $character->slug }}' class="list-item">
                    {{ $character['name'] }}
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
                border: 1px solid rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                padding: 10px;
                transition: 0.2s;
                cursor: pointer;
                text-decoration: none;
                color: black;
            }

            .list-item:hover {
                border: 1px solid transparent;
                box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
                transform: scale(1.01);
            }
        </style>
    @endsection
