@extends('admin.layouts.master')

@section('title')
    edit danh muc
@endsection
@section('content')
<form action="{{route('admin.categories.update',$category)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Ten</label>
        <input type="text" name="name" class="form-control" value="{{$category->name}}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">anh</label>
        <input type="file" name="cover" class="form-control">
        <img src="{{Storage::url($category->cover)}}" alt="" width="50px" >
    </div>

    <div class="mb-3">
        <label for="" class="form-label">trang thai</label>
        <input type="checkbox" checked name="is_active" class="form-check-input" value="1" @checked($category->is_active)>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection