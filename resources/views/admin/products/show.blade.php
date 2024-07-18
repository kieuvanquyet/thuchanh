@extends('admin.layouts.master')

@section('title')
    show danh muc
@endsection
@section('content')
    <li>id: {{$category->id}}</li>
    <li>name: {{$category->name}}</li>
    <li>anh: 
       <div> 
        <img src="{{$category->cover}}" alt="" width="100px" height="100px">
       </div>
    </li>
    <li>trang thai: {{$category->is_active}}</li>

    <ul>
        @foreach ($category->toArray() as $key => $value)
            <li>{{$key}}: {{$value}}</li>
        @endforeach
    </ul>
@endsection