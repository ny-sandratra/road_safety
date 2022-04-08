import React , {Component} from 'react';
import {render} from 'react-dom';
class Home extends Component {
    render() { 

        return (
            <div>
                <h1 id="titre"> Title </h1> 
            </div>
        )
    }
}
render(
    <div>
        <Home  />
    </div>,
    document.getElementById('home')
);


