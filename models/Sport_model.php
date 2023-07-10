<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Sport_model extends CI_Model {
        // Nom de la table dans la base de données regime
        private $table = 'sport';

        // Récupère tous les Sports
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un Sport par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel Sport
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour un Sport
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un Sport
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, array('state' => 1));
        }

    }
?>