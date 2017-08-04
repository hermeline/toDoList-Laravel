import React from 'react';
import ReactDOM from 'react-dom';

class App extends React.Component {
  constructor(){
    super();
    this.state = {
      tasks : [
        {id:1, title: "Faire la sieste"},
        {id:2,title: "Faire le café"},
        {id:3,title: "Boire un coup"},
      ]
    }
  }
  addTask(){
    let tasks = this.state.tasks;
    tasks.push({id: +new Date(), title:"DORMIR"});
    this.setState({tasks});
  }
  render(){
    return(
      <div>
      <h1>Ma to Do </h1>
      <Todo tasks={this.state.tasks} />
      <button onClick={this.addTask.bind(this)}> Ajouter Tache </button>
      </div>
    );
  }



}

class Todo extends React.Component {

  render(){
    console.log(this.props.tasks);
    let tasks = this.props.tasks.map( (task)=>{
      return (
        <Task data={task} />
      );
    });
    return (
      <ul>
      {tasks}
      </ul>
    );
  }
}

class Task extends React.Component{
  suppTask(){

      var taskId = this.props.data;
      console.log(taskId); // a remplacer par supprimer

  }

  render(){
    let task = this.props.data;
    return(
      <li key={task.id}>
      {task.title}
      <button className="btnSupp" onClick={this.suppTask.bind(this, task)}>
        <i className="fa fa-trash" aria-hidden="true"></i>
      </button>
      </li>
    );
  }
}
ReactDOM.render(
  <App/>,
  document.querySelector('#react')
)
