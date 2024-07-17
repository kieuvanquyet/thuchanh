@extends('admin.layouts.master')

@section('title')
    danh sach danh muc
@endsection
@section('content')

@if (session('message'))
    <h4>{{session('message')}}</h4>
@endif
    <a href="{{route('admin.categories.create')}}" class="btn btn-success">ADD</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>ten</th>
                <th>anh</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                       <img src="{{Storage::url($item->cover)}}" width="50px" alt="">
                    <!-- {{$item->cover}}</td> -->
                    <td>{!!$item->is_active 
                        ? 
                        '<span class="badge bg-success color-while">YES</span>' 
                        :
                        '<span class="badge bg-danger">NO</span>'!!}</td>
                    <td style="display: flex">
                        <a href="{{route('admin.categories.show',$item)}}">
                            <button class="btn btn-info">xem</button>
                        </a>
                        <a href="{{route('admin.categories.edit',$item)}}">
                            <button class="btn btn-warning">sua</button>
                        </a>
                        <form action="{{route('admin.categories.destroy',$item)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('ban co muon xoa')">xoa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
 
    </table>
    {{$data->links()}}
@endsection