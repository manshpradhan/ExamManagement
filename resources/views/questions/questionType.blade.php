@extends('backend.index')
@section('content')

<form>
  <div class="form-group" action="questionTypes">
    <label for="questionsType">1. How many questions do you want to enter?</label>
    <input type="number" class="form-control" name="noOfQuestions" placeholder="Enter number of questions..">
  </div>
  <div>
    {{ $errors->first('noOfQuestions') }}
  </div>

  <div class="form-group">
    <label for="questionsType">2. How many groups do you want to enter?</label>
    <input type="number" class="form-control" name="noOfGroups" placeholder="Enter number of groups..">
  </div>
  <div>
    {{ $errors->first('noOfGroups') }}
  </div>

  <div class="form-group">
    <label for="questionsType">3. How many sets do you want to enter?</label>
    <input type="number" class="form-control" name="noOfSets" placeholder="Enter number of sets..">
  </div>
  <div>
    {{ $errors->first('noOfSets') }}
  </div>
    <div>
        <button type="submit" value="next" class="btn btn-primary">Next</button>
    </div>
</form>

@endsection()