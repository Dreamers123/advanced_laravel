import React from 'react';
import './app.css';

const UserListItm=({ user })=>(
    <table className="table table-bordered">
    <thead className="text-center">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
        <tbody>
        <tr>
            <td>{user.id}</td>
            <td>{user.name}</td>
            <td>{user.email}</td>
        </tr>
        </tbody>
    </table>
)

const UserList = (props) => {
    return(
        <div>
            <ul>
                {props.list.map(user =>(
                    <UserListItm user={user}   key={user.id} />
                ))}
            </ul>
        </div>
    )
}
export default UserList;