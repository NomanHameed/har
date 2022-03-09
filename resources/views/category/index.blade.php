@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{ route('category-create') }}" class="btn btn-primary float-end">Create</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ ($category->status == 1) ? 'Active' : 'De-Active' }}</td>
                    <td>
                        <form action="{{ url('/category', ['category' => $category->id]) }}" method="post">
                            <input class="btn btn-danger" type="submit" value="Delete" />
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('category-edit', ['category' => $category->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
