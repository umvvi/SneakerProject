<?php
class TicketController extends BaseController {
    public function index() {
        $data = ['title' => 'SneakerCon - Tickets'];
        $this->view('tickets', $data);
    }
}
