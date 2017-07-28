<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tasks', function (Blueprint $table) {
           $table->increments('id');
           $table->string('titre');
           $table->boolean('done');
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('taches');
    }
}


// artisan:migrate create_categories-table
//
// creer model
//
// route get model categories
//
// $categorie = App\Categoriy::find(1);
//
//
// doc -> eloquent relation
//
// public function tasks()
// {
//   return $this->hasMany('App\Task')
// }
//
//
// afficher : {{$task->category->name}}
