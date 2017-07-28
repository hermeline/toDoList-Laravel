    <div class="titre">
      <div class="divCreate">
        <a class="ajoutTache" href="/index/create"> Ajouter </br> une </br> tâche</a>
      </div>
      <h1>Todo <br> List</h1>
    </div>

    @extends('layout')

    @section('content')

      <form class="formListe" action="done" method="post">
        {{ csrf_field() }}
        <ul class="decoListe">

          @foreach ($tasks as $task)
            <div class="postit">
              <div class="categorie">{{ $task -> category -> name }}</div>

                @if (! $task->done )
                    <div class="taskToDo">
                        {{ $task -> titre }}
                    </div>
                    <div class="toDo">
                      <input type="checkbox" name="done[]" value="{{ $task->id }}">
                      To Do !
                    </div>
                @else
                    <div class="taskDone">
                        {{ $task -> titre }}
                    </div>
                    <div class="done">Done !</div>
                @endif
                <div class="options">
                  <a class="edit" href="/index/{{ $task->id }}/edit"><img src="../img/edit.png" alt=""> <span class="tooltiptext"> Modifier </span> </a>
                  <a class="edit" href="/{{ $task->id}}/destroy"><img src="../img/trash.png" alt=""> <span class="tooltiptext">Supprimer </span></a>
                </div>

            </div>
            @endforeach

            <button type="submit" name="button">Done !</button>

          </form>
          @endsection
