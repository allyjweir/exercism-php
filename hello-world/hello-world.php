<?php

//
// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.
//

function helloWorld($name = null)
{
    if ($name === null) {
        return "Hello, World!";
    } else {
        return helloWorldWithValidName($name);
    }
}

function helloWorldWithValidName($name) {
    return sprintf("Hello, %s!", $name);
}
