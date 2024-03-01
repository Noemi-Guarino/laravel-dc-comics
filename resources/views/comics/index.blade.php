@extends('layouts.app')

@section('page-title', 'comics')

@section('main-content')
<div class="my_container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">src</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
                <th scope="col">artists</th>
                <th scope="col">writers</th>
                <th scope="col">comic</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic )
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>
                    <img class="my_img" src="{{ $comic->src }}
                    " alt="">
                </td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->artists }}</td>
                <td>{{ $comic->writers }}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                        Show
                    </a>
                </td>
                <td>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                        Edit
                    </a>
                </td>
                <td>
                    <form 
                    onsubmit="return confirm('Are you sure you want to delete this comic?');"
                    class="d-inline-block" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection