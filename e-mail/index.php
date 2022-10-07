<?php

$mail = "The quick brown fox jumped over the lazy dog again and again.";
$wrapped_text = ">".wordwrap($mail, 20, "\n>");

echo $wrapped_text;