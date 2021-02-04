@extends('Admin.Header')


@section('content')

<a href="{{route('Articles.create')}}" type="button" class="btn btn-primary btn-lg">Add</a>
<br>
@if(session()->has('message'))

<div class="alert alert-success" role="alert">
{{session()->get('message')}}
</div>

@endif

   <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content </th>
        <th scope="col">Created at</th>
        <th scope="col">Control</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($articles as $art)
        <tr>
        <td>{{$art->id }}</td>
        <td>{{$art->title }}</td>
        <td>{{$art->content}}</td>
        <td>{{$art->created_at}}</td>
        <td><div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-primary">Edit</button></div>
        </td>
         </tr>
         </tr>
        @endforeach
       
    </tbody>
    </table>  


@stop
