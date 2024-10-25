import React from 'react';
import Article from './Article'; // Zorg dat het pad klopt

const App = () => {
    return (
        <section>
            <Article title="React Basics" />
            <Article title="Understanding Props" />
            <Article title="Building Components" />
        </section>
    );
};

export default App;
