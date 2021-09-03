<?php

function url(string $route ):string {
    return BASE_URL . '/index.php?route=' . $route;
}

