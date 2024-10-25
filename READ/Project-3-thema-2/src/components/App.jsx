import React, { useState, useEffect } from 'react';
import Dish from '../components/Dish';
import Meals from '../components/Meals';

const App = () => {
    const [dishes, setDishes] = useState([]);
    const [filteredDishes, setFilteredDishes] = useState([]);
    const [filterLetter, setFilterLetter] = useState('');

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await fetch(
                    `https://www.themealdb.com/api/json/v1/1/search.php?f=a`
                );
                const data = await response.json();
                console.log('Fetched data:', data); // Log the fetched data
                setDishes(data.meals || []); // Extract 'meals' array or set to empty array if null
            } catch (err) {
                console.error(err);
                setDishes([]); // Set dishes to empty array on error
            }
        };

        fetchData();
    }, []);

    useEffect(() => {
        if (filterLetter) {
            const filtered = dishes.filter(dish =>
                dish.strMeal.toUpperCase().startsWith(filterLetter.toUpperCase()) // Case-insensitive comparison
            );
            console.log('Filtered dishes:', filtered); // Log the filtered dishes
            setFilteredDishes(filtered);
        } else {
            setFilteredDishes(dishes); // If no filter, show all dishes
        }
    }, [filterLetter, dishes]);

    const handleFilter = (letter) => {
        setFilterLetter(letter); // Set the letter for filtering
    };

    return (
        <div>
            <div style={{ textAlign: 'center', margin: '20px' }}>
                <button onClick={() => handleFilter('A')}>A</button>
                <button onClick={() => handleFilter('B')}>B</button>
                <button onClick={() => handleFilter('C')}>C</button>
                <button onClick={() => handleFilter('')}>Clear</button> {/* Clear filter button */}
            </div>
            <section style={{ display: 'flex', flexWrap: 'wrap', justifyContent: 'center' }}>
                {filteredDishes.length > 0 ? (
                    filteredDishes.map((dish, index) => (
                        <Dish key={index} name={dish.strMeal} image={dish.strMealThumb} description={dish.strInstructions} />
                    ))
                ) : (
                    <p>No dishes found.</p> // Fallback message when no dishes match the filter
                )}
            </section>
        </div>
    );
};

export default App;
