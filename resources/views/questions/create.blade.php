@extends('index')

@section('content')

<form action="/questions" method="POST">
@csrf
  <div class="form-group">
    <label for="questions">Enter your questions.</label>
    <input type="text" class="form-control" name="questions" placeholder="Please enter your questions.">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="optionFirst">Option 1</label>
      <input type="text" class="form-control" name="optionFirst" placeholder="Enter Option 1">
    </div>
    <div class="form-group col-md-6">
      <label for="optionSecond">Option 2</label>
      <input type="text" class="form-control" name="optionSecond" placeholder="Enter Option 2">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="optionThird">Option 3</label>
      <input type="text" class="form-control" name="optionThird" placeholder="Enter Option 3">
    </div>
    <div class="form-group col-md-6">
      <label for="optionFourth">Option 4</label>
      <input type="text" class="form-control" name="optionFourth" placeholder="Enter Option 4">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="correctAnswer">Correct Answer</label>
      <input type="text" class="form-control" name="correctAnswer" placeholder="Enter the correct Answers">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Add Questions</button>
</form>

@endsection