<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class User_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'utilisateur';
        
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

        public function getLastObjectifUtilisateur($user) {
            $this->db->select('*');
            $this->db->from('objectif_utilisateur');
            $this->db->where('idutilisateur',$user->id);
            $this->db->order_by('id', 'DESC');
            $this->db->limit(1);
            return $this->db->get()->row();
        }
        
        public function getLastPropositionUtilisateur($user) {
            $this->db->select('*');
            $this->db->from('proposition');
            $this->db->where('idutilisateur',$user->id);
            $this->db->order_by('id', 'DESC');
            $this->db->limit(1);
            return $this->db->get()->row();
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
        
        // Récupère un utilisateur par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvel utilisateur
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
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