<?php

function base_url($path = '')
{
    $base = 'http://localhost:8060/';

    return $base . ltrim($path, '/');
}