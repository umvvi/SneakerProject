import React from 'react';

const Article = ({ title }) => {
    return (
        <article>
            <h2>{title}</h2>
            <p>
                Dit is een kort artikel over {title}. Hier kun je meer informatie over dit onderwerp vinden.
            </p>
        </article>
    );
};

export default Article;
