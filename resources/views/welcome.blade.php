@extends('layout.master')
@section('content')
    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name">
            <label for="item_supplier" class="form-label">Item Supplier</label>
            <input type="text" class="form-control" id="item_supplier" name="item_supplier">
            <label for="item_stock" class="form-label">Item Stock</label>
            <input type="number" class="form-control" id="item_stock" name="item_stock">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
