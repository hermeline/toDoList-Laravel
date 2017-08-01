<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Category;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('done', 'ASC')->get();
        $categories = Category::all();

        return view('tasks.index',  ['tasks' => $tasks, 'categories' => $categories]);
    }

    public function create(){
        $categories = Category::all();
        return view('tasks.index', ['categories' => $categories]);
    }

    public function save(Request $request){
        $this->validate($request, ['titre'=> 'required|max:255']);
        $tasks = new Task();
        $tasks->titre = $request->input('titre');
        $tasks->category_id = $request->input('category_id');
        $tasks->save();

        return redirect('/tasks');
    }

    public function show($id)
    {
        $tasks = Task::find($id);
        return view('tasks.show', ['tasks' => Task::findOrFail($id)]);
    }

    public function edit($id)
   {
       $tasks = Task::find($id);
       return view('tasks.edit', compact('tasks'));
   }

   public function update(Request $request, $id)
  {
      // get all the data for our user
      $tasks = Task::find($id);
      $tasks->titre = $request->input('titre');
      $tasks->done = $request->input('done');
      $tasks->save();
      // redirect back to the users list
      return redirect('/tasks');
  }

  public function done(Request $request)
 {
   $ids = $request->input('done');
   foreach ($ids as $id){
     $task = Task::find($id);
     $task->done = true;
     $task->save();
   }
     return redirect('/tasks');
 }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }

}
