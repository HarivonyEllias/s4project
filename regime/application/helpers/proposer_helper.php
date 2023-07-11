<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('propose')) {
    function propose($objuser) {
        $CI = &get_instance();
        $CI->db->select('*');
        $CI->db->from('regime_par_kilo');
        $CI->db->where('kilos >=', $objuser->kilos);
        $CI->db->where('idobjectif', $objuser->idObjectif);
        // $CI->db->order_by('id', 'DESC');
        // $CI->db->limit(1);
        $query = $CI->db->get();
    
        $rgpkgtab = null;//
        if ($query->num_rows() > 0) {
            $rgpkgtab = $query->result();
        } else {
            return null;
        }
        $propositiondata = array();
        $new_duree = ($objuser->kilos * $rgpkgtab[0]->duree) / $rgpkgtab[0]->kilos;
        $CI->load->model('Proposition_model');
        $CI->load->model('Objectif_model');
        for ($j=0; $j < count($rgpkgtab); $j++) { 
                $d = array(
                "idutilisateur" => $objuser->idUtilisateur,
                "idregime" => $rgpkgtab[$j]->idRegime,
                "duree" => $new_duree,
                "kilos" => $objuser->kilos,
                "idObjectif" => $objuser->idObjectif,
                "idsport" => $rgpkgtab[$j]->idSport
                );
                $id = $CI->Proposition_model->create($d);
            $propositiondata[] = $CI->Proposition_model->findById($id);
        }
        return $propositiondata;
    }
    
}

?>