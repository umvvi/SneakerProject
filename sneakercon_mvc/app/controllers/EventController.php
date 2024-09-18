<?php
class EventController extends BaseController {
    public function index() {
        $data = ['title' => 'SneakerCon - Events'];
        $this->view('event', $data);
    }
}
