import React, { Component } from 'react';
import SeriesList from './SeriesList';


class Series extends Component {
 constructor() {
     super();
     this.state = {series: []}

 }
 componentDidMount()
{
        fetch('https://api.tvmaze.com/search/shows?q=vikings')
        .then(response => response.json())
        .then(json=> this.setState({ series:json}))
    /*
    const series = [
        {
            id: 1,
            name: 'House of cards'
        },
        {
            id: 2,
            name: 'Game of thornes'
        }
    ]


    setTimeout(() => {
        this.setState({series: series});
    }, 2000);*/
}


    render() {
        return (
            <div>
                <h1><SeriesList list={this.state.series}/></h1>
                {console.log(this.state.series)}
            </div>
        );
    }
}

export default Series;


