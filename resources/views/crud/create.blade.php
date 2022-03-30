@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            {{-- Bootstrap Grid:1 --}}
            <div class="col-md-3">

            </div>

            {{-- Bootstrap Grid:2 --}}
            <div class="col-md-6">

                <a href="{{ route('products.index') }}"><i class="fas fa-backward fa-lg"></i></a>

                <h2 style="color: rgb(25, 160, 25)"> <strong> <u>Enter Product Information:</u> </strong> </h2>

                <form action="{{ route('products.store') }}" method="POST">

                    @csrf

                    {{-- //__for desplaying custom serverside error message__//
                        class="form-control @error('ProductTitle') is-invalid @enderror"
                        @error('ProductTitle')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror --}}


                    <div class="mb-3">
                        <label for="productTitle" class="form-label mt-2"><strong>Title:</strong></label>
                        <input required type="text" class="form-control @error('productTitle') is-invalid @enderror" id="productTitle" name="productTitle">
                        @error('productTitle')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label"><strong>Price:</strong></label>
                        <input required type="number" class="form-control @error('productPrice') is-invalid @enderror" id="productPrice" name="productPrice">
                        @error('productPrice')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productColor" class="form-label"><strong>Color:</strong></label>
                        <input required type="text" class="form-control @error('productColor') is-invalid @enderror" id="productColor" name="productColor">
                        @error('productColor')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productDescription" class="form-label"><strong>Description:</strong></label>
                        <textarea required name="productDescription" class="form-control @error('productDescription') is-invalid @enderror" id="productDescription"></textarea>
                        @error('productDescription')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            {{-- Bootstrap Grid:3 --}}
            <div class="col-md-3">

            </div>

        </div>

    </div>

@endsection
