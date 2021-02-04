@extends('Admin.Header')

@section('content')

<form method="POST" action="{{route('Articles.store')}}">
@csrf
  <div class="form-row align-items-center">
   
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">title</label>
      <input type="text" class="form-control mb-2" name="title" id="name" placeholder="title">
    </div>
   
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">content</label>
      <input type="text" class="form-control mb-2" name="content" id="content" placeholder="content">
    </div>

     <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Category</label>
      <select class="custom-select mr-sm-2" name="cat_id" id="inlineFormCustomSelect">
        @foreach ($cat as $cc)
        <option value="{{$cc->id}}">{{$cc->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" name="is_active" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          active
        </label>
      </div>
    </div>

    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>


@stop

