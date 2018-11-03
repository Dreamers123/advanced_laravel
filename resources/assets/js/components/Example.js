import React, { Component } from 'react';
import Series from './Series';
import './app.css';

import User from './User';
import 'whatwg-fetch';
class App extends Component {
    render() {
        return (
            <div className="App">
                <h1>Series List</h1>
                <Series/>
                <div className="user">
                <User/>
                </div>
            </div>
        );
    }
}

export default App;
