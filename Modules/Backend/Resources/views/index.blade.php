@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <a href="{{route('post.create')}}" class="btn btn-success float-right">Add New</a>
    </div>
        <div class="col-md-12 pt-5">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SR</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                @php $i=1; @endphp
                @if(!empty($data))
                    @foreach($data as $post)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$post->title}}</td>
                    </tr>
                    @endforeach
                @endif
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
