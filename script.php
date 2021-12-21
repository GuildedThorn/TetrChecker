<?php

if ($file = fopen("names.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        $name = str_replace("
", "", $line);
        $url = strtolower("https://tetr.io/api/users/{$name}/exists");
        $data = file_get_contents($url);
        $array = json_decode($data, true);

        if ($array["exists"] === false) {
            $current = file_get_contents("list.txt");
            $current .= $name."\n";
            file_put_contents("list.txt", $current);
        }
    }
    var_dump("List is finished!");
    fclose($file);
}