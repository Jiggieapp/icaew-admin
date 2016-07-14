<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        /* Standard Libraries */
        $this->load->database();
        $this->load->helper('url'); 
    }

    function c404()
    {
        $this->response(404, 'Endpoint not found', null);
    }

    function cleanData($value)
    {
        $value->id = (int) $value->id;
        if (isset($value->country_id)) {
            $value->country_id = (int) $value->country_id;
        }
        if (isset($value->image)) {
            $value->image = BASE_URL . '/assets/uploads/files/' . $value->image; 
        }
        if (isset($value->is_banner)) {
            $value->is_banner = (bool) $value->is_banner;
        }

        if (isset($value->like_count)) {
            $value->like_count = (int) $value->like_count;
        }

        return $value;
    }

    function response($code, $message, $data, $is_coll = false)
    {   
        try {
            $res = [];
            if ($code == 200) {
                if (is_array($data)) {
                    if (count($data) == 0) {
                        $code = 404;
                        $message = 'No record found';
                    }

                    foreach ($data as $k => $value) {
                        $this->cleanData($value);
                    }
                } else {
                    if (is_null($data)) {
                        $code = 404;
                        $message = 'No record found';
                    }
                    $this->cleanData($data);
                }
            
                if ($is_coll) {
                    $res['count'] = count($data);
                } 
                
            }

            $res = [
                'code' => $code,
                'message' => $message,
                'data' => $data
            ];

            echo json_encode($res);
            header('Content-Type: application/json');

        } catch(Exception $e) {
            $res = [
                'code' => 400,
                'message' => $e->getMessage(),
                'data' => null
            ];

            echo json_encode($res);
            header('Content-Type: application/json');
        }

        return;
    }

    function about()
    {    
        $about = $this->db->get('about');
        
        $this->response(200, 'OK', $about->result_object()[0]);
    }

    function contact($id = null)
    {
        $this->db->select('ct.*, country.name AS country_name');
        $this->db->from('contact ct');
        $this->db->join('country', 'ct.country_id = country.id');

        $is_coll = false;
        if (!is_null($id)) {
            $this->db->where('ct.id', $id);
        } else {
            $is_coll = true;

            if ($this->input->get('country_id') != '') {
                $this->db->where('country_id', $this->input->get('country_id'));
            }
        }

        $contact = $this->db->get();
        
        $data = $contact->result_object();
        
        if (!is_null($id)) {
            $data = $data[0];
        }

        $this->response(200, 'OK', $data);
    }

    function country()
    {
        $this->db->select('id, code, name, image');
        $this->db->from('country');
        $this->db->order_by('name', 'ASC');

        $country = $this->db->get();
        $this->response(200, 'OK',  $country->result_object(), true);
    }

    function event($id = null)
    {
        $this->db->select('e.*, country.name AS country_name');
        $this->db->from('event e');
        $this->db->join('country', 'e.country_id = country.id');
        
        $is_coll = false;
        if (!is_null($id)) {
            $this->db->where('e.id', $id);
        } else {
            $is_coll = true;
            if ($this->input->get('title') != '') {
               $this->db->like('e.title', $this->input->get('title')); 
            }

            if ($this->input->get('country_id') != '') {
                $this->db->where('e.country_id', $this->input->get('country_id'));
            }

            $this->db->order_by('start_date', 'DESC');
        }

        $event = $this->db->get();
        $data = $event->result_object();
        
        if (!is_null($id)) {
            $data = $data[0];
        }

        $this->response(200, 'OK', $data);
    }

    function program($id = null)
    {
        $is_coll = false;
        if (!is_null($id)) {
            $this->db->where('id', $id);
        } else {
            $is_coll = true;
        }

        $this->db->order_by('title', 'ASC');

        $program = $this->db->get('program');
        
        $data = $program->result_object();

        if (!is_null($id)) {
            $data = $data[0];
        }

        $this->response(200, 'OK', $data);
    }

    function program_like($id)
    {
        $this->db->where('id', $id);
        $program = $this->db->get('program');
        
        if ($program->result_id->num_rows == 0) {
            $res = [
                'code' => 404,
                'message' => 'No record found',
                'data' => null
            ];
        } else  {

            $count_current = (int)$program->result_object()[0]->like_count;
            
            $this->db->set('like_count', $count_current + 1);
            $this->db->where('id', $id);
            $update = $this->db->update('program');

            if ($update) {
                $res = [
                    'code' => 200,
                    'message' => 'Liked success',
                    'data' => ['count' => $count_current + 1]
                ]; 
            } else {
                $res = [
                    'code' => 400,
                    'message' => 'An error occured',
                    'data' => null
                ];
            }
        }

        echo json_encode($res);
        header('Content-Type: application/json');
    }

    function university($id = null)
    {
        $this->db->select('u.*, country.name AS country_name');
        $this->db->from('university u');
        $this->db->join('country', 'u.country_id = country.id');

        $is_coll = false;
        if (!is_null($id)) {
            $this->db->where('u.id', $id);
        } else {
            $is_coll = true;

            if ($this->input->get('country_id') != '') {
                $this->db->where('u.country_id', $this->input->get('country_id'));
            }
        }

        $this->db->order_by('name', 'ASC');

        $university= $this->db->get();
        
        $data = $university->result_object();

        if (!is_null($id)) {
            $data = $data[0];
        }

        $this->response(200, 'OK', $data);
    }

}
