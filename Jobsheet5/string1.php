<?php

$loremipsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nostrum, dolore fuga voluptatibus possimus explicabo laudantium id quidem debitis tempore porro ratione repudiandae aspernatur consequuntur quisquam eveniet facilis alias error!";
echo"<p>{$loremipsum}</p>";
echo "Panjang Karakter: " . strlen( $loremipsum ) ."<br>";
echo "Panjang Kata: " . str_word_count($loremipsum) . "<br>";
echo"<p>" . strtoupper($loremipsum) . "</p>";
echo"<p>" . strtolower($loremipsum) . "</p>";