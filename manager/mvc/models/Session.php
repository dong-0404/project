<?php
class Session extends DB {

    // Hàm bắt đầu session
    public function start() {
        session_start();
    }

    // Hàm lưu session
    public function send($user) {
        $_SESSION['user'] = $user;
    }

    // Hàm lấy dữ liệu session
    public function get() {
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }
        else {
            $user = '';
        }
        return $user;
    }

    // Hàm xoá Session
    public function destroy () {
        session_destroy();
    }
}
?>