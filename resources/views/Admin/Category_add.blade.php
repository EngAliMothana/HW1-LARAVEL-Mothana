@extends('Admin.Header')

@section('content')

<form method="POST" action="{{route('categroies.store')}}">
@csrf
  <div class="form-row align-items-center">
   
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Name">
    </div>


     <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" name="parent" id="inlineFormCustomSelect">
        <option value="0">Main Category</option>
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

