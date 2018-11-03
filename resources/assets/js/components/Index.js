import React from 'react';
import ReactDOM from 'react-dom';
/*
 import App from './components/App/index';
 import Reacts from './my_first_react_app';
 import ProduciList from './components/Productlist/App';
 import TimersDashboard from './Timer/Timer';
 */
import User from './User';

import App from './Example';

/*
 const currentDate= () => {
 var date= new Date();
 return date.toDateString();
 }

 const lisa=<h1>Hello world! and Today is:{currentDate()} </h1>;
 */

ReactDOM.render(<App/>,document.getElementById('example'));

ReactDOM.render(<User/>,document.getElementById('user'));

