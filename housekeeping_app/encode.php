<?php
function e($str, $charset = 'urf-8'){
    return htmlspecialchars($str, ENT_QUOTES, $charset);
}