<?php

class ServicosController extends AppController {

    public $uses = array('Course');
    
    public function index() {
        $this->set('courses', $this->Course->find('all', array('conditions' => array('show' => 1), 'order' => array('language'))));
    }
    
    public function getPageName() {
        return 'Serviços';
    }
}