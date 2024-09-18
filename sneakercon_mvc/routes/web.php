$router->get('/', 'HomeController@index');
$router->get('/tickets', 'TicketController@index');
$router->get('/stand', 'StandController@index');
$router->get('/event', 'EventController@index');
