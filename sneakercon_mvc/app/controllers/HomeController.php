<?php
class HomeController extends BaseController {
    public function index() {
        $data = ['title' => 'SneakerCon - Home'];
        $this->view('home', $data);
    }
}
