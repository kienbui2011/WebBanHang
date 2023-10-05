<?php

// Format Class
class Format {

    public function formatDate($date) {
        // Fixed the syntax error and added missing quotes
        return date('F j, Y, g:i a', strtotime($date));
    }

    public function textShorten($text, $limit = 400) {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        // Fixed the syntax error in strrpos function
        $text = substr($text, 0, strrpos($text, " "));
        $text = $text . "...";
        // Added a missing semicolon
        return $text;
    }

    public function validation($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function title() {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        // Removed unnecessary comment and fixed the elseif syntax
        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') {
            $title = 'contact';
        }
        // Fixed the assignment statement and added missing semicolon
        return ucfirst($title);
    }
}

?>
