@extends('layout')

@section('content')
<div class="titre">
  <h1 class="titreAjout">Ajouter une tâche</h1>
</div>
    <form id="cre" class="formCreate" action="save" method="post">
      {{ csrf_field() }}

      <label for="titre">Titre</label>
      <input type="text" name="titre" value="" id="titre">

      <label for="cat">Catégorie :</label>
      <select id="cat" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">
        {{ $category->name }} </option>
        @endforeach
      </select>

      <button type="submit" name="button" id="btn">Envoyer</button>

    </form>
    @endsection
