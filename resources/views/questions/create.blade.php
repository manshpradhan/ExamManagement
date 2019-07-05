@extends('index')

@section('content')

<form>
<div class="form-group">
    <label>Enter your questions here</label>
    <input type="text" class="form-control" name="questions" placeholder="Enter Questions">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Option 1</label>
      <input type="text" class="form-control" name="ansFirst" placeholder="Enter Option 1">
    </div>
    <div class="form-group col-md-6">
      <label>Option 2</label>
      <input type="text" class="form-control" name="ansSecond" placeholder="Enter Option 2">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Option 3</label>
      <input type="text" class="form-control" name="ansThird" placeholder="Enter Option 3">
    </div>
    <div class="form-group col-md-6">
      <label>Option 4</label>
      <input type="text" class="form-control" name="ansThird" placeholder="Enter Option 4">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add Questions</button>
</form>

@endsection