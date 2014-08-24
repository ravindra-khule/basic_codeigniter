<?php

class Page extends Frontend_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('page_m');
    }
    
    public function index(){
        
    }
    
     public function delete(){
        $this->page_m->delete(3);      
    }
}
