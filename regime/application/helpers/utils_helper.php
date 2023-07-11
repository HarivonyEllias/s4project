<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Recupere le regime par l'id
function getRegimeById($id) {
    $CI = &get_instance();
    $CI->db->select('*');
    $CI->db->from('regime');
    $CI->db->where('id',$id);
    return $CI->db->get()->row();
}

//Recupere le sport par l'id
function getSportById($id) {
    $CI = &get_instance();
    $CI->db->select('*');
    $CI->db->from('sport');
    $CI->db->where('id',$id);
    return $CI->db->get()->row();
}


?>