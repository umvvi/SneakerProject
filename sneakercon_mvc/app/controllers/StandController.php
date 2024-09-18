<?php
class StandController extends BaseController {
    public function index() {
        $data = ['title' => 'SneakerCon - Rent a Stand'];
        $this->view('stand', $data);
    }
}
