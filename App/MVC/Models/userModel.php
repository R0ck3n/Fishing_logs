<?php

namespace MVC\Models;


class UserModel extends dbModel
{
    
    /** Enregistre un utilisateur en base de donnée
     * @param array $data
     * @return int|null
     */
    public function create(array $data): ?int
    {
        $userId = $this->db->execute('INSERT INTO users (lastname, firstname, email, sex, birthday, password) VALUES (:lastname, :firstname, :email, :sex, :birthday, :password)', [
            'lastname' => $data['user-lastname'],
            'firstname' => $data['user-firstname'],
            'email' => $data['email'],
            'sex' => $data['user-sex'],
            'birthday' => $data['user-birthday'],
            'password' => $data['password']
        ]);

        if ($userId === false) {
            return null;
        }

        return $userId;
    }


}