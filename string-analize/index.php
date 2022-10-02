<?php

$str_right = '"Some text", "(something)"';
$str_wrong = '"Some text, "(something"';

$count_quotes = substr_count($str_right, '"');
$count_brackets_open = substr_count($str_right, '(');
$count_brackets_closed = substr_count($str_right, ')');

if($count_quotes % 2 == 0 && $count_brackets_open == $count_brackets_closed){
    print 'Everything is ok';
}else{
    print 'There is something wrong';
}

print "\n";
$count_quotes = substr_count($str_wrong, '"');
$count_brackets_open = substr_count($str_wrong, '(');
$count_brackets_closed = substr_count($str_wrong, ')');

if($count_quotes % 2 == 0 && $count_brackets_open == $count_brackets_closed){
    print 'Everything is ok';
}else{
    print 'There is something wrong';
}

// print $count_quotes;
// print $count_brackets;