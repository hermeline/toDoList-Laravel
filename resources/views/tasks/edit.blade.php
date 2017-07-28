<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edition de tache</title>
  </head>
  <body>
    <h1>Modifier la tâche :   {{ $tasks -> titre }}</h1>


    <form action="update" method="POST">

        {!! csrf_field() !!}

        {{-- name --}}
            <label for="titre">Titre de la tâche :</label>
            <input type="text" name="titre" value="{{ $tasks-> titre }}">

        {{-- do/done --}}
            <label>Done ? </label>
            <input type="checkbox" name="done" value=1>

        {{-- submit --}}
            <button type="submit">
                Modifier
            </button>
        </div>

    </form>
  </body>
</html>
