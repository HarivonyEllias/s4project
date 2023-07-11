<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Objectif_utilisateur_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'objectif_utilisateur';

        // Récupère tous les objectifs utilisateur
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un objectif utilisateur par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel objectif utilisateur
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour un objectif utilisateur
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un objectif utilisateur
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, array('state' => 1));
        }

    }
?>