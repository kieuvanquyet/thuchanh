@extends('admin.layouts.master')

@section('title')
    add danh muc
@endsection
@section('content')
    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Ten</label>
        <input type="text" name="name" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">anh</label>
        <input type="file" name="cover" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">trang thai</label>
        <input type="checkbox" checked name="is_active" class="form-check-input" value="1">
    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection