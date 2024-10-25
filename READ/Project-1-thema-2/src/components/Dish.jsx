import React from 'react';

const Dish = ({ name, image, description }) => {
    return (
        <article >
            <h2>{name}</h2>
            <p>{description}</p>
            <img
                src={image}
                alt={name}
                style={{ width: '150px', height: 'auto'}}
            />
        </article>
    );
};

export default Dish;
