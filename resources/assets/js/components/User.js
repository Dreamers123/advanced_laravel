import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UserList from './UserList';
class User extends Component {
    constructor() {
        super();
        this.state = {users: []}

    }
    componentDidMount()
    {
            let $this =this
            axios.get('api/users')
            .then(response => {
                $this.setState({users: response.data})

    }).catch(error=>{
        console.log(error);
            })

    }

    render() {
        return (
            <div className="user">
                {console.log(this.state.users)}
                <UserList list={this.state.users}/>
            </div>
        );
    }
}

export default User;
