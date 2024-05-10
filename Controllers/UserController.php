<?php
// Controllers/UserController.php

/**
 * Class UserController
 * Контролер для управління користувачами
 */
namespace Controllers;
use Models\UserModel;

class UserController {
    /**
     * Показати інформацію про користувача за його ID
     * @param int $id ID користувача
     * @return string Інформація про користувача
     */
    public function showUser($id) {
        $userModel = new UserModel();
        $userData = $userModel->getUser($id);
        return "User data: $userData";
    }
}
