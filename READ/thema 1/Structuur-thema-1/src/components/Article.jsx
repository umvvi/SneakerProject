import React from 'react';
import image from '../assets/image.jpg'; // Zorg dat het pad klopt

const Article = ({ title }) => {
    return (
        <article>
            <h2>{title}</h2>
            <img src={image} alt={title} />
            <p>
                Dit is een kort artikel over {title}. Hier kun je meer informatie over dit onderwerp vinden.
            </p>
        </article>
    );
};

export default Article;
