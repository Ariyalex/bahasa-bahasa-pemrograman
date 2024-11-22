<?php

require_once 'EventDispatcher.php';
require_once 'LoginHandler.php';

// Inisialisasi EventDispatcher
$dispatcher = new EventDispatcher();

// Menambahkan listener untuk event LoginSuccess
$dispatcher->listen('LoginSuccess', function ($data) {
    echo "Event: Login berhasil. Selamat datang, {$data['username']}!\n";
});

$dispatcher->listen('LoginSuccess', function ($data) {
    echo "Log: User '{$data['username']}' berhasil login.\n";
});

// Menambahkan listener untuk event LoginFailed
$dispatcher->listen('LoginFailed', function ($data) {
    echo "Event: Login gagal. Coba lagi, {$data['username']}.\n";
});

$dispatcher->listen('LoginFailed', function ($data) {
    echo "Log: Login gdagal untuk user '{$data['username']}'.\n";
});

// Menampilkan form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Menjalankan proses login
    $loginHandler = new LoginHandler($dispatcher);
    $loginHandler->login($username, $password);
} else {
    // Tampilkan form login
    echo <<<HTML
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
HTML;
}