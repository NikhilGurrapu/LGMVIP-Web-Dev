import React from 'react';


const SearchBox=({searchfeild, searchChange})=>{
    return(
            <div className='pa2'>
                <input className='pa3 ba b--white' type="search" placeholder='Search name here' onChange={searchChange}/>
            </div>
        );
}

export default SearchBox;
