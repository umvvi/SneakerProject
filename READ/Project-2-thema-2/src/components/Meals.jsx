import React, { useEffect, useState } from 'react';
import Dish from './Dish';

const Meals = () => {
    const [meals, setMeals] = useState([]);

    useEffect(() => {
        fetch('https://www.themealdb.com/api/json/v1/1/search.php?s=')
            .then(response => response.json())
            .then(data => {
                setMeals(data.meals);
            })
            .catch(error => console.error('Error fetching data:', error));
    }, []);

    return (
        <section>
            {meals && meals.map(meal => (
                <Dish
                    key={meal.idMeal}
                    name={meal.strMeal}
                    image={meal.strMealThumb}
                    description={meal.strInstructions} // Gebruik de volledige instructies
                />
            ))}
        </section>
    );
};

export default Meals;
