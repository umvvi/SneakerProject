import React, { useEffect, useState } from 'react';
import Dish from './Dish';

const Meals = () => {
    const [meals, setMeals] = useState([]);
    const [filteredDishes, setFilteredDishes] = useState([]);
    const [filterLetter, setFilterLetter] = useState('');

    useEffect(() => {
        // Fetch all meals
        fetch('https://www.themealdb.com/api/json/v1/1/search.php?s=')
            .then(response => response.json())
            .then(data => {
                if (data.meals) {
                    setMeals(data.meals);
                    setFilteredDishes(data.meals); // Initialize with all meals
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }, []);

    useEffect(() => {
        // Filter dishes based on the selected letter
        if (filterLetter) {
            const filtered = meals.filter(dish =>
                dish.strMeal.toUpperCase().startsWith(filterLetter.toUpperCase())
            );
            setFilteredDishes(filtered);
        } else {
            setFilteredDishes(meals); // If no filter, show all dishes
        }
    }, [filterLetter, meals]);

    const handleFilter = (letter) => {
        setFilterLetter(letter); // Set the letter for filtering
    };

    return (
        <div>
            <div style={{ textAlign: 'center', margin: '20px' }}>
                <button onClick={() => handleFilter('A')}>A</button>
                <button onClick={() => handleFilter('B')}>B</button>
                <button onClick={() => handleFilter('C')}>C</button>
                <button onClick={() => handleFilter('')}>Clear</button>
            </div>
            <section style={styles.container}>
                {filteredDishes.length > 0 ? (
                    filteredDishes.map(dish => (
                        <Dish
                            key={dish.idMeal}
                            name={dish.strMeal}
                            image={dish.strMealThumb}
                            description={dish.strInstructions}
                        />
                    ))
                ) : (
                    <p>No dishes found.</p>
                )}
            </section>
        </div>
    );
};

// Styles for the container
const styles = {
    container: {
        display: 'flex',
        flexWrap: 'wrap',
        justifyContent: 'center',
        padding: '20px',
    },
};

export default Meals;
