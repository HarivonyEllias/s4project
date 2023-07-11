<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Regime_par_kilo_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'regime_par_kilo';
        
        // Vérifie les informations de connexion de l'utilisateur
        public function login($email, $mdp) {
            $this->db->where('email', $email);
            $query = $this->db->get($this->table);
            
            if ($query->num_rows() == 1) {
                $user = $query->row();
                if ($user->mdp === $mdp) {
                    return $user;
                } else {
                    throw new Exception('Mot de passe incorrect');
                }
            } else {
                throw new Exception('Nom d\'utilisateur incorrect');
            }
        }
        
        public function signup($nom, $email, $mdp, $genre, $taille, $poids) {
            $data = array(
                'nom' => $nom,
                'email' => $email,
                'mdp' => $mdp,
                'genre' => $genre,
                'taille' => $taille,
                'poids' => $poids
            );
        
            // Assuming that you have a database table associated with the model, you can insert the data.
            $this->db->insert($this->table, $data);
        
            // Optionally, you can return the inserted user data or a success message.
            // For example, if you have an auto-incremented ID field, you can return the inserted user ID.
            return $this->db->insert_id();
        }

        // Récupère tous les utilisateurs
        public function findAll() {
            return $this->db->get($this->table)->result();
        }

        // Récupère tous les utilisateurs par rapport aux criteres
        public function findByCritere($data) {
            return $this->db->get_where( $this->table, $data )->row();
        }
        
        // Récupère un utilisateur par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel utilisateur
        public function create($data) {
            return $this->db->insert($this->table, $data);
        }
        
        // Met à jour un utilisateur
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un utilisateur
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, array('state' => 1));
        }
    }
?>