<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranindu extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function addflight()
	{
		$this->load->view('addflight');
	}

	public function deleteflight()
	{
		$this->load->view('deleteflight');
	}

	public function updateflight()
	{
		$this->load->view('updateflight');
	}
	
	public function displayflight()
	{
		$this->load->view('displayflight');
	}

	public function flightadd()
	{
		$this->form_validation->set_rules('nic', 'NIC', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('frcity', 'Flying from', 'required');
        $this->form_validation->set_rules('tocity', 'Flying To', 'required');
        $this->form_validation->set_rules('noofseats', 'Seat Capacity', 'required');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('addflight');
                }
                else
                {
                        $this->load->model('insertflight');
                        $var = $this->insertflight->insertdata();

                        if($var){
                            $this->session->set_flashdata('msg','Flight add sucessfull !!');
                            redirect('Ranindu/addflight');
                        }
                        else{
                            $this->session->set_flashdata('msg', 'Sorry, Unsucessfull !!');
                            redirect('Ranindu/addflight');
                        }
                }

    }
    
    public function flightdlt()
	{
        $this->form_validation->set_rules('nic', 'NIC', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('deleteflight');
        }
        else{
            $this->load->model('insertflight');
            $var= $this->insertflight->dltdata();

            if($var){
                $this->session->set_flashdata('msg','Flight deleted sucessfully !!');
                         redirect('Ranindu/deleteflight');
                }
                else{
                    $this->session->set_flashdata('msg', 'Sorry, Unsucessfull !!');
                    redirect('Ranindu/deleteflight');
                }
            }
        }

        public function flightdisplay(){

            $course = $this->db->query("select * from booking WHERE 'NIC' = 'nic' ");
            $data = array();
            $data['records'] = $course->result_array();
        
            $this->load->view('finaldisplay', $data);
        
        }

        public function flightupdate()
	{
        $this->form_validation->set_rules('nic', 'NIC', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('frcity', 'Flying from', 'required');
        $this->form_validation->set_rules('tocity', 'Flying To', 'required');
        $this->form_validation->set_rules('noofseats', 'Seat Capacity', 'required');

        if($this->form_validation->run()== FALSE){

                $this->load->view('updateflight');

            }
        else{
                $this->load->model('insertflight');
                $var = $this->insertflight->replacedata();

                        if($var){
                            $this->session->set_flashdata('msg','Flight update is sucessfull !!');
                            redirect('Ranindu/updateflight');
                        }
                        else{
                            $this->session->set_flashdata('msg', 'Sorry, Unsucessfull !!');
                            redirect('Ranindu/updateflight');
                        }

            }
    }
}
