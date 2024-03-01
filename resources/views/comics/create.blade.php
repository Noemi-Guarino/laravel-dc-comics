@extends('layouts.app')

@section('page-title', 'Comics Create')

@section('main-content')

<div class="my_container">
    <h1>
        Comics Create
    </h1>

    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Come back
                </a>
            </div>
            
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="enter the title..." maxlength="64" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="enter the description..."></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="price " name="price" placeholder="enter the price..." min="10" max="5000" required>
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date <span class="text-danger"></span></label>
                    <input type="date" class="form-control" id="sale-date " name="sale_date" placeholder="enter the sale date..." min="10" max="5000" >
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="enter the type..." maxlength="16" required>
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="number" class="form-control" id="series" name="series" placeholder="enter the series" min="1" max="20">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">artists <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="enter the artists..." maxlength="16" >
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">writers <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="enter the writers..." maxlength="16" >
                </div>

                <div>
                    <button type="submit" class="btn btn-success w-100">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection