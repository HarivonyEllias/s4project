<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Regime_par_kilo_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'regime_par_kilo';

        // Récupère tous les regimes par kilo
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un regime par kilo par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel regime par kilo
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour un regime par kilo
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un regime par kilo
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, array('state' => 1));
        }

    }
?>