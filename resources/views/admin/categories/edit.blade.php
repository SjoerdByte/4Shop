@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{ route('admin.categories.index') }}">Terug naar categorieën</a>
    </div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="d-flex align-items-left my-2">

                <form action="{{ route('admin.categories.update', $category) }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">

                    <h4>Categorie aanpassen</h4>

                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('title', $category->name) }}">
                    </div>

                    <button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                </form>
                {{--    <form style="margin-top: 20%; margin-left: -20% " action="{{ route('admin.categories.destroy', $category) }}" method="POST">--}}
                {{--        <button type="submit" class="form-control btn btn-danger">Verwijderen</button>--}}
                {{--        {{ csrf_field() }}--}}
                {{--        {{ method_field('DELETE') }}--}}
                {{--    </form>--}}

            </div>
        </div>
        <div class="col-lg-6">
            <div class="">
                <h2>Producten</h2>
                <div class="col-lg-12">
                    <ul>
                        @foreach($category->products as $product)
                            <li>
                                {{ $product->title }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>


</div>




@endsection
