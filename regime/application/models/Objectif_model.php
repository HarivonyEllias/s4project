<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Objectif_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'objectif';
        
        // Récupère tous les propositions
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un proposition par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel proposition
        public function create($data) {
            return $this->db->insert($this->table, $data);
        }
        
        // Met à jour un proposition
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un proposition
         public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->delete($this->table);
        } 



    }
?>