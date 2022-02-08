<?php
    $message1 = "0@sn9sirppa@#?ia’jgtvryko1";
    $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $message3 = "aopi?sgnirts@#?sedhtg+p9l!";

    $lenght = mb_strlen($message1 / 2);
    $substract = mb_substr($message1, 5, $lenght);
    $replace = str_replace('@#?', ' ', $substract);
    $reverse = strrev($replace);