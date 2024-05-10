<?php
// Models/UserModel.php

/**
 * Class UserModel
 * Модель для роботи з користувачами
 */
namespace Models;
class UserModel {
    /**
     * Отримати інформацію про користувача за його ID
     * @param int $id ID користувача
     * @return string Інформація про користувача
     */
    public function getUser($id) {
        return "User with ID $id";
    }
}

