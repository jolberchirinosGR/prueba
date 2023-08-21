@extends('adminlte::page')

@section('content_header')
    <h1>Product Listing</h1>
@stop

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="perPage">Products per page:</label>
        <select id="perPage" onchange="changePerPage(this)">
            <option value="10" {{ $products->perPage() == 10 ? 'selected' : '' }}>10</option>
            <option value="20" {{ $products->perPage() == 20 ? 'selected' : '' }}>20</option>
            <option value="50" {{ $products->perPage() == 50 ? 'selected' : '' }}>50</option>
            <option value="100" {{ $products->perPage() == 100 ? 'selected' : '' }}>100</option>
        </select>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            @include('modals.products.modals')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="row">
            <div class="col-12 text-center">
                <p>Elements listed in this table: {{ $products->count() }}</p>
            </div>
        </div>
    </div>

    <script>
        function changePerPage(select) {
            window.location = "{{ route('products.index') }}?perPage=" + select.value;
        }
    </script>
@endsection