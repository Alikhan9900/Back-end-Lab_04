<?php
// Views/UserView.php

/**
 * Class UserView
 * Представлення для відображення інформації про користувачів
 */
namespace Views;
class UserView {
    /**
     * Відобразити інформацію про користувача у вигляді HTML
     * @param string $userData Інформація про користувача
     * @return string HTML для відображення
     */
    public function renderUser($userData) {
        return "<div>User Info: $userData</div>";
    }
}

