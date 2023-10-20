<?php

/**
 * Session Class
 */
class Session {

    // Initialize the session
    public static function init() {
        if (version_compare(phpversion(), '5.4.0', '<')) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        } else {
            if (session_id() == '') {
                session_start();
            }
        }
    }

    // Set a session variable
    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    // Get a session variable
    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    // Check if the user is logged in
    public static function checkSession() {
        self::init();
        if (self::get("login") == false) {
            self::destroy();
            header("Location: login.php");
            exit; // Added exit to stop script execution after redirection
        }
    }

    // Redirect if the user is already logged in
    public static function checkLogin() {
        if (self::get("login") == true) {
            header("Location: index.php");
            exit; // Added exit to stop script execution after redirection
        }
    }

    // Destroy the session
    public static function destroy() {
        session_destroy();
        header("Location: login.php");
        exit; // Added exit to stop script execution after redirection
    }
}

// Initialize the session
Session::init();

?>
