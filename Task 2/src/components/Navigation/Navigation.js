import React from 'react';
import Button from '@material-ui/core/Button';
import './Navbar.css';
const Navigation = ({onButtonSubmit}) => {
    return(
        <nav className='navbar'>
            <h3 className="logo">Let's Grow More</h3>
            <div className='nav-links'>
                <Button className='getUser' variant="contained" onClick={onButtonSubmit} color="red">Get Users</Button>
            </div>
        </nav>
    );
}
//{onRouteChange, isSignedIn}
export default Navigation;