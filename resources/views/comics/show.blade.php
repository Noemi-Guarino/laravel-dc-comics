@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
    <div class="my_container">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna all'index dei fumetti
            </a>
        </div>
        <div class="card p-3">
            <img class="my_single_img" src="{{ $comic->src }}" alt="{{ $comic->title }}" class="card-img-top">

            <div class="card-body">
                <ul>
                    <li>
                        {{ $comic->title }}
                    </li>
                    <li>
                        <p>
                            {{ $comic->description }}
                        </p>
                    </li>
                    <li>
                        {{ $comic->price }} 
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection