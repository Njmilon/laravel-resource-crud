@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">

            </div>

            <div class="col-md-6">
                <a href="{{ route('products.index') }}"><i class="fas fa-backward fa-lg"></i></a>
                <h2 style="color: rgb(25, 160, 25)"> <strong> <u>Edit Product Information:</u> </strong> </h2>

                <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="productTitle" class="form-label mt-2"><strong>Title:</strong></label>
                        <input value="{{ $product->title }}" type="text" class="form-control" id="productTitle"
                            name="productTitle">
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label"><strong>Price:</strong></label>
                        <input value="{{ $product->price }}" type="number" class="form-control" id="productPrice"
                            name="productPrice">
                    </div>

                    <div class="mb-3">
                        <label for="productColor" class="form-label"><strong>Color:</strong></label>
                        <input value="{{ $product->color }}" type="text" class="form-control" id="productColor"
                            name="productColor">
                    </div>

                    <div class="mb-3">
                        <label for="productDescription" class="form-label"><strong>Description:</strong></label>
                        <textarea name="productDescription" class="form-control"
                            id="productDescription">{{ $product->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-3">

            </div>

        </div>

    </div>

@endsection
