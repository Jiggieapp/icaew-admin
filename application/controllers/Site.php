<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct()
    {
        parent::__construct();

     
        /* Standard Libraries */
        $this->load->database();
        $this->load->helper('url');

        /* ------------------ */    
     
        $this->load->library('grocery_CRUD');    
    }

    function _example_output($output = null)
    {
        $this->load->view('index.php',$output);    
    }

    function index()
    {
        redirect('/about');
    }

    function _updated_at($post_array, $primary_key) {
        $post_array['updated_at'] = date('Y-m-d H:i:s');
        return $post_array;
    }

    function _created_at($post_array) {
        $post_array['created_at'] = date('Y-m-d H:i:s');
        $post_array['updated_at'] = date('Y-m-d H:i:s');
        return $post_array;
    }

    function logDate($crud) {
        $crud->change_field_type('created_at','invisible');
        $crud->change_field_type('updated_at','invisible');
        $crud->callback_before_insert(array($this,'_created_at'));
        $crud->callback_before_update(array($this,'_updated_at'));
        return $crud;
    }

    function about()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('about');
        $crud->set_subject('About');
        $crud->columns('title','description','image', 'updated_at');

        $crud->fields('title','description','image', 'created_at', 'updated_at');

        $crud->set_field_upload('image','assets/uploads/files');
        $crud->required_fields('title');

        $this->logDate($crud);

        $output = $crud->render();
         
        $this->_example_output($output);
    }

    function contact()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('contact');
        $crud->set_subject('Contact');
        $crud->columns('country_id','telp','email','website', 'facebook', 'updated_at');
        $crud->display_as('country_id','Country');

        $crud->set_relation('country_id','country','name');

        $crud->fields('country_id','telp','email','website', 'facebook', 'created_at', 'updated_at');

        $crud->required_fields('country_id','telp','email');

        $this->logDate($crud);
        
        $output = $crud->render();
         
        $this->_example_output($output);
    }

    function country()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('country');
        $crud->set_subject('Country');
        $crud->columns('code','name','image', 'updated_at');
         
        $crud->fields('code','name','image', 'created_at', 'updated_at');
        $crud->required_fields('code', 'name');

        $crud->set_field_upload('image','assets/uploads/files');

        $this->logDate($crud);
        
        $output = $crud->render();
         
        $this->_example_output($output);
    }

    function event()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('event');
        $crud->columns('country_id','title', 'description', 'image', 'start_date', 'end_date', 'updated_at');
        
        $crud->set_relation('country_id','country','name');
        
        $crud->fields('country_id','title', 'description', 'summary', 'image', 'start_date', 'end_date','created_at', 'updated_at');
        
        $crud->required_fields('country_id','title', 'start_date', 'end_date');

        $crud->display_as('country_id','Country');

        $crud->set_field_upload('image','assets/uploads/files');
        
        $this->logDate($crud);
        $output = $crud->render();
         
        $this->_example_output($output);
    }

    function program()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('program');
        $crud->columns('title', 'description', 'image', 'youtube', 'updated_at');
        
        $crud->fields('title', 'description', 'image', 'youtube', 'created_at', 'updated_at');
        
        $crud->required_fields('title');

        $crud->set_field_upload('image','assets/uploads/files');
        
        $this->logDate($crud);
        $output = $crud->render();
         
        $this->_example_output($output);
    }

    function university()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('university');
        $crud->columns('country_id','name','image', 'updated_at');
        $crud->display_as('country_id','Country');

        $crud->set_relation('country_id','country','name');

        $crud->fields('country_id','name','image', 'created_at', 'updated_at');
        $crud->set_field_upload('image','assets/uploads/files');
        
        $crud->required_fields('country_id','name');

        $this->logDate($crud);
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
}
