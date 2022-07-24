@extends('layout.master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Supplier</th>
                <th scope="col">Item Stock</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->supplier }}</td>
                    <td>{{ $item->stock }}</td>
                </tr>
            @empty
                <h1>No Data</h1>
            @endforelse
        </tbody>
    </table>
@endsection
