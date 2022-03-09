@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('category') }}" method="post">
            @csrf
            @if($category->id)
                <input type="hidden" name="_method" value="put" />
            @endif
            <div class="row">
                <div class="col-md-6 offset-3">
                    <label for="name"  class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ ($category->name) ? $category->name : '' }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-3">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-select">
                        <option value="1" {{ ($category->status == 1) ? 'Selected' : '' }}>Active</option>
                        <option value="0" {{ ($category->status == 0) ? 'Selected' : '' }}>De-Active</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2 col-sm-4 col-lg-3 offset-7">
                    @if($category->id)
                        <button type="submit" class="btn btn-primary">Update</button>
                    @else
                        <button type="submit" class="btn btn-primary">Save</button>
                    @endif
                    <a href="{{ url('categories') }}" class="btn btn-danger">Back</a>
                </div>
            </div>

        </form>
    </div>
@endsection
