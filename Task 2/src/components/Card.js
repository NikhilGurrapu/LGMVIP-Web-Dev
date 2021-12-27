import React from 'react';

const Card = ({ name, email, id, lname}) => {
  //Displays all the information in a card format
    return (
      <div className='tc grow bg-gray br2 pa5 ma3 dib bw2 shadow-10'>
        <img alt='robots' width='300px' height='300px' style={{border: '2px solid black', borderRadius: '180px'}} src={`https://reqres.in/img/faces/${id}-image.jpg`} />
        <div><br />
        <h2>{name} {lname}</h2><br />
        <h3>{email}</h3><br />
        <p>It is a long established <br />fact that a reader will be<br /> distracted by the readable <br />content of a page when looking<br /> at its layout.
          The point<br /> of using Lorem Ipsum is<br /> that it has a more-or-less <br />normal distribution of letters,<br /> as opposed to using 'Content <br />here, content here', making <br />it look like readable <br />English.
          </p>
        </div>
      </div>
    );
  }

export default Card;
