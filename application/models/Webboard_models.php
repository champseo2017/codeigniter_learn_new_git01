<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Webboard_models extends CI_Model {
    function __construct() {
        parent::__construct();
    }

   
    public function insert_question($topic, $detail, $name)
    {
        $data = array(

            'qtopic' => $topic,
            'qdetail' => $detail,
            'qname' => $name,
            'qcount' => 0
        );

        $insert = $this->db->insert('question', $data);
        return $insert;
    }

    public function show_question_all ()
    {
        $query = $this->db->select('*')
                            ->order_by('qno', 'DESC')
                            ->get('question')
                            ->result_array();
        return $query;
    }

    public function select_question_qno ($item)
    {

        $query = $this->db->select('*')
                            ->where('qno', $item)
                            ->get('question')
                            ->result_array();
        return $query;
        
    }

    public function update_question ($qcount, $answerno)
    {
        $data = array(
            'qcount' => $qcount
        );

        return $this->db->update('question', $data, array('qno' => $answerno));
    }

    public function select_qcount ($answerno)
    {
        $query = $this->db->select('*')
                        ->where('aquestionno', $answerno)
                        ->get('answer')
                        ->num_rows();
        return $query;
    }

    public function select_answerw_item($item)
    {
        $query = $this->db->select('*')
                            ->where('aquestionno', $item)
                            ->get('answer')
                            ->result_array();
        return $query;
    }

    public function select_answer_wh($item)
    {
        $query = $this->db->select('*')
                        ->where('aquestionno', $item)
                        ->get('answer')
                        ->num_rows();
        return $query;
    }

    public function insert_answer($answerno, $a_answer, $a_name)
    {
        $data = array(

            'aquestionno' => $answerno,
            'adetail' => $a_answer,
            'aname' => $a_name
        );

        $insert = $this->db->insert('answer', $data);
        return $insert;
    }

}