<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel {

    public function findUserById($id) {
        $sql = 'SELECT * FROM users WHERE id = '.$id;
        $user = $this->select($sql);

        return $user;
    }

    public function findUser($keyword) {
        $sql = 'SELECT * FROM users WHERE user_name LIKE %'.$keyword.'%'. ' OR user_email LIKE %'.$keyword.'%';
        $user = $this->select($sql);

        return $user;
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password) {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = "' . $userName . '" AND password = "'.$md5Password.'"';

        $user = $this->select($sql);
        return $user;
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id) {
        $sql = 'DELETE FROM users WHERE id = '.$id;
        return $this->delete($sql);

    }

    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input) {
        try {
            $this->validateName($input['name']);
            
            $this->validatePassword($input['password']);
    
            $sql = 'UPDATE users SET 
                     name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) .'", 
                     password="'. md5($input['password']) .'"
                    WHERE id = ' . intval($input['id']); 
    
            $user = $this->update($sql);
            return $user;
    
        } catch (Exception $e) {
            return ['error' => $e->getMessage()]; 
        }
    }
    
    private function validateName($name) {
        if (empty($name)) {
            throw new Exception("Name is required."); 
        } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
            throw new Exception("Tên không được bỏ trống, phải nhiều hơn 5 kí tự và không quá 15."); 
        }
    }
    
    private function validatePassword($password) {
        if (empty($password)) {
            throw new Exception("Password is required."); 
        } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $password)) {
            throw new Exception("Mật khẩu không được bỏ trống, phải nhiều hơn 5 kí tự và không quá 10, bắt buộc phải có chữ HOA và kí tự đặc biệt."); 
        }
    }
    

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input) {
        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (" .
                "'" . $input['name'] . "', '".md5($input['password'])."')";

        $user = $this->insert($sql);

        return $user;
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    public function getUsers($params = []) {
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE ?';
            $stmt = self::$_connection->prepare($sql);
            $keyword = '%' . $params['keyword'] . '%';
            $stmt->bind_param('s', $keyword);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $sql = 'SELECT * FROM users';
            return $this->select($sql);
        }
    }

    
}