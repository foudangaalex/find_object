@extends('layourt.master')

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0 text-center ">Liste des ojects</h3>
    <div class="mt-4">
      <div class="d-flex justify-content-start mb-4">
      {{ $things->links() }}
      </div>
    <div class="d-flex justify-content-end mb-4">
    <div><a href="{{route('objects')}}" class="btn btn-primary">signaler</a></div>
    </div>
    <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">description</th>
      <th scope="col">nature</th>
      <th scope="col">date</th>
      <th scope="col">lieu</th>
    </tr>
  </thead>
  <tbody>
 @foreach ($things as $thing )
   <tr>
    <td>{{ $thing->id }}</td>
    <td>{{ $thing->nom }}</td>
    <td>{{ $thing->description }}</td>
    <td>{{ $thing->nature}}</td>
    <td>{{ $thing->date }}</td>
    <td>{{ $thing->lieu}}</td>
    <td>
      <a href="" class="btn btn-secondary">modifier</a>
    </td>
   </tr>
 @endforeach
  </tbody>
</table>
    </div>
  </div>
@endsection