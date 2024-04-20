@extends('layourt.master')

@section('contenu')
<div class="container">
    <div class="card row col-6 offset-3">
       <div class="card-body">
        @csrf
        <form  method="" action="{{route('accueil')}}">
          <div class="form-group ">
          <label class="control-label">nom:</label>
            <input type="text" name="nom" id="nom" class="form-control"/>
          </div>
          <div class="form-group">
		 <label class="control-label">description:</label>
		  <textarea  name="des" class="form-control" row="8" col="8"></textarea>
		</div>
        <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="nature" id="cherche" value="cherche">
  <label class="form-check-label" for="cherche">cherche</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="nature" id="trouve" value="trouve">
  <label class="form-check-label" for="trouve">trouve</label>
</div>
<div class="form-group ">
          <label class="control-label" for="lieu">lieu</label>
            <input type="text" name="lieu" id="lieu" class="form-control"/>
          </div>
          <div class="form-group ">
          <label class="control-label" for="date">date</label>
            <input type="date" name="date" id="date" class="form-control"/>
          </div>
          <div class="mt-2">
            <button type="summit" class="btn btn-info"> send</button>
            <a href="{{route('accueil')}}" class="btn btn-danger">back</a>
          </div>
        </form>
       </div> 
    </div>
    </div>
</div>
@endsection