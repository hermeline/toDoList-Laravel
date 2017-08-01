let $ = require('jquery');

// Afficher données de la BDD avec requete AJAX
let afficher = $("#afficher");

let formulaire = $('#cre');

function getTasks(){
  $.get('/api/tasks/list', function(data){
    let arr = JSON.parse(data);
    let html = arr.map(function(tache){
      return '<li>'+tache.titre+'</li>';
    });

    afficher.html(html);
  });
}

getTasks();

function sendTasks(){

  formulaire.on('submit', function(event){
    event.preventDefault();

    let titre = $('#titre').val();
    let cate =$("#cat").val();
    let toktok =$('[name="_token"]').val();
    console.log(titre, cate, toktok);

    $.ajax({
      type: "POST",
      url: "/api/tasks/save",
      data: {titre, category_id:cate, _token:toktok},
      success: function cool(){
        console.log('ca marche');
      }
    });
  });
}
sendTasks();
