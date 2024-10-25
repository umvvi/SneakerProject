import React, { useState } from 'react';
import { FaEdit } from 'react-icons/fa';

const Dish = ({ name, image, description }) => {
    const [title, setTitle] = useState(name);

    const handleTitleChange = () => {
        const newTitle = prompt('Enter a new title:', title);
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
        <article style={styles.card}>
            <img
                src={image}
                alt={title}
                style={styles.image}
            />
            <h2 style={styles.title}>{title}</h2>
            <FaEdit onClick={handleTitleChange} style={styles.editIcon} />
            <p style={styles.description}>{shortenDescription(description)}</p>
        </article>
    );
};

// Styles for the Dish component
const styles = {
    card: {
        border: '1px solid #ccc',
        borderRadius: '8px',
        boxShadow: '0 2px 8px rgba(0,0,0,0.1)',
        padding: '16px',
        margin: '10px',
        textAlign: 'center',
        width: '200px', // Fixed width for cards
        backgroundColor: '#fff',
    },
    image: {
        width: '100%', // Make the image responsive
        height: 'auto',
        borderRadius: '8px 8px 0 0', // Rounded top corners
    },
    title: {
        margin: '10px 0',
    },
    editIcon: {
        cursor: 'pointer',
        color: 'black',
        fontSize: '20px',
    },
    description: {
        fontSize: '14px',
        color: '#555',
    }
};

export default Dish;
