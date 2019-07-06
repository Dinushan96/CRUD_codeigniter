<?php

class insertflight extends CI_Model{

    function insertdata(){

        $data = array(

            'NIC' => $this->input->post('nic', TRUE),
            'First_Name' => $this->input->post('fname',TRUE),
            'Last_Name' => $this->input->post('lname', TRUE),
            'Departure_City' => $this->input->post('frcity', TRUE),
            'Arrival_City' => $this->input->post('tocity', TRUE),
            'Seat_Capacity' => $this->input->post('noofseats', TRUE),

        );

        return $this->db->insert('booking', $data);
    }

    public function dltdata(){

        $data= array(
        'NIC' => $this->input->post('nic'),
        'First_Name' => $this->input->post('fname',TRUE),
        'Last_Name' => $this->input->post('lname', TRUE),
        'Departure_City' => $this->input->post('frcity', TRUE),
        'Arrival_City' => $this->input->post('tocity', TRUE),
        'Seat_Capacity' => $this->input->post('noofseats', TRUE),
        );

        $this->db->where('NIC', $this->input->post('nic'));
        return $this->db->delete('booking');

    }

    public function replacedata(){

        $data = array(

            'NIC' => $this->input->post('nic', TRUE),
            'First_Name' => $this->input->post('fname',TRUE),
            'Last_Name' => $this->input->post('lname', TRUE),
            'Departure_City' => $this->input->post('frcity', TRUE),
            'Arrival_City' => $this->input->post('tocity', TRUE),
            'Seat_Capacity' => $this->input->post('noofseats', TRUE),

        );
        
        $this->db->where('NIC', $this->input->post('nic'));
        return $this->db->update('booking', $data); 
        
    }

    public function flightdisplay(){

        $course= $this->db->query("select * from booking");
        
        return $course;

    }


}
?>