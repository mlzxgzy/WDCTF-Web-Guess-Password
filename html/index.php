<?php

$output = "";

if (!isset($_GET['pass'])) {
    $content = file_get_contents(__FILE__);
    $content = preg_replace('/flag\{.+?\}/i', 'flag{xxxxxxxxxxxxxxxxx}', $content);
    echo '<div class="code-highlight">';
    highlight_string($content);
    echo '</div>';
} else {
    if (!preg_match('/^[^\W_]+$/', $_GET['pass'])) {
        $output = "Don't hack me please :(";
    } else {
        $pass = md5("admin1674227342");
        if (($_GET['pass'] == $pass) && ($pass !== $_GET['pass'])) {
            // Trolling u lisp masta
            if (strlen($pass) == strlen($_GET['pass'])) {
                $output = "<div class='alert alert-success'>{put_flag_here}</div>";
            } else {
                $output = "<div class='alert alert-danger'>Wrong password</div>";
            }
        } else {
            $output = "<div class='alert alert-danger'>Wrong password</div>";
        }
    }
}

echo $output;
