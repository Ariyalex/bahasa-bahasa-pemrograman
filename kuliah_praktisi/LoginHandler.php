<?php
require_once 'EventDispatcher.php';

class LoginHandler {
    private $dispatcher;

    public function __construct(EventDispatcher $dispatcher) {
        $this->dispatcher = $dispatcher;
    }

    public function login($username, $password) {
        // Simulasi database pengguna
        $users = [
            'admin' => '12345',
            'user' => 'password'
        ];

        // Periksa kredensial
        if (isset($users[$username]) && $users[$username] === $password) {
            echo "Login berhasil untuk pengguna: $username\n";

            // Memicu event "LoginSuccess"
            $this->dispatcher->dispatch('LoginSuccess', ['username' => $username]);
        } else {
            echo "Login gagal untuk pengguna: $username\n";

            // Memicu event "LoginFailed"
            $this->dispatcher->dispatch('LoginFailed', ['username' => $username]);
        }
    }
}