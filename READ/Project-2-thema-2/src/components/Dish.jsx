import React, { useState } from 'react';
import { FaEdit } from 'react-icons/fa'; // Deze regel moet eindigen zonder extra teken

const Dish = ({ name, image, description }) => {
    // Gebruik useState om de titel van het gerecht op te slaan
    const [title, setTitle] = useState(name);

    // Functie om de titel aan te passen
    const handleTitleChange = () => {
        const newTitle = prompt('Voer een nieuwe titel in:', title);
        if (newTitle) {
            setTitle(newTitle);
        }
    };

    const shortenDescription = (text) => {
        const sentences = text.split('.').filter(Boolean);
        const limitedSentences = sentences.slice(0, 7);
        return limitedSentences.join('.') + (limitedSentences.length === 7 ? '.' : '');
    };

    return (
        <article>
            <h2>{title}</h2>
            <FaEdit onClick={handleTitleChange} style={{ cursor: 'pointer', color: 'black', fontSize: '20px' }} />
            <p>{shortenDescription(description)}</p>
            <img
                src={image}
                alt={title}
                style={{ width: '150px', height: 'auto' }}
            />
        </article>
    );
};

export default Dish;
