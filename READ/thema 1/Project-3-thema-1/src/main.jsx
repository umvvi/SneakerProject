import React from 'react';
import ReactDOM from 'react-dom/client';
import Article from './Article'; // Zorg ervoor dat het pad klopt

const App = () => {
    return (
        <section>
            <Article title="React Basics" />
            <Article title="Understanding Props" />
            <Article title="Building Components" />
        </section>
    );
};

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
