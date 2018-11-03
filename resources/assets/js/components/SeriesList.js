import React from 'react';
import './app.css';
const SeriesListItm=({ series })=>(
    <li >
       {series.show.name}
    </li>
)

const SeriesList = (props) => {
    return(
        <div>
            <ul>
                {props.list.map(series =>(
                    <SeriesListItm series={series}   key={series.show.id} />
                ))}
            </ul>
        </div>
    )
}
export default SeriesList;