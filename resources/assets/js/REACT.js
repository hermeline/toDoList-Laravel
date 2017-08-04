//////// CODE VERSION REACT :
//

import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';

class Hello extends React.Component {
  constructor(){
    super();
    this.state = {
      time: 0,
    }
  }

  increment(){
    // this.state.time++;   ne marche pas, il faut la methode suivante :
    this.setState({time: this.state.time + 1})
  }

  render(){
    return (<div className="bg">
    <h1> time : {this.state.time}</h1>
    <button onClick={this.increment.bind(this)}> + </button>
    <Timer />
    <Username
    name="Tartampion"
    nickname="Bidule"
    su={true}
    time={this.state.time}/>
    </div>);
  }
}

class Timer extends React.Component {
  render() {
    return <div className="timer bg">{this.props.time }</div>
  }
}

class Username extends React.Component {
  formatC(){
    console.log('formatage en cours ...');
  }

  render(){
    let isAdmin ="";
    if(this.props.su){
      isAdmin = <button onClick={this.formatC}> Reformat C:\</button>;
    }
    return (<span>{this.props.name} -
      {this.props.nickname}
      {isAdmin}
      </span>);
    }
  }


  ReactDOM.render(
    <Hello/>,
    document.querySelector('#react')
  )
