import React , {Component} from 'react';
import {render} from 'react-dom';


class Header extends Component {
    render() { 
        return (
            <nav>
               Navbar
            </nav>
        )
    }
}
render(
    <div>
        <Header/>
    </div>,
    document.getElementById('container')
);