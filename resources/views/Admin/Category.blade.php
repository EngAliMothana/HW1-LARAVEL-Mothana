@extends('Admin.Header')

@section('content')

<a href="{{route('categroies.create')}}" type="button" class="btn btn-primary btn-lg">Add</a>
@if(session()->has('message'))

<div class="alert alert-success" role="alert">
{{session()->get('message')}}
</div>

@endif

<br>

   <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Control</th>
        <th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($Category as $cat)
        <tr>
        <td>{{$cat->id}}</td>
        <td>{{$cat->name}}</td>
        <td>{{$cat->created_at}}</td>
        <td>{{$cat->updated_at}}</td>
        <td><div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-primary">Edit</button></div>
        </td>
         </tr>
        @endforeach
       
    </tbody>
    </table>  

@stop
