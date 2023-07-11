<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Proposition_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'proposition';

        // Récupère tous les propositions
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère une proposition par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée une nouvelle proposition
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour une proposition
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime une proposition
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, array('state' => 1));
        }

    }
?>