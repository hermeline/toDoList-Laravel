    <div class="titre">
      <div class="divCreate">
        <a class="ajoutTache" href="/tasks/create"> Ajouter </br> une </br> tâche</a>
      </div>
      <h1>Todo <br> List</h1>
    </div>

    @extends('layout')

    @section('content')
        <div id="react" class="bg">

        </div>
        <form id="cre" class="formCreate" method="post">
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

        <div id="afficher">
        </div>

          @endsection
