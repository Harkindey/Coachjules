<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/7/2016
 * Time: 16:04
 */
function escp($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}