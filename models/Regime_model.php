<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Regime_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'regime';

        // Récupère tous les Regime alimentaires
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un Regime alimentaire par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel Regime alimentaire
        public function create($data) {
            return $this->db->insert($this->table, $data);
        }
        
        // Met à jour un Regime alimentaire
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un Regime alimentaire
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->delete($this->table);
        }        

    }
?>