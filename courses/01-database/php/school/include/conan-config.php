<?php
/** @var string $conanPage home|register */
$conanPage = $conanPage ?? '';
$conanIndex = 'index.php';
$conanIsHome = ($conanPage === 'home');

if (!function_exists('conan_nav_href')) {
    function conan_nav_href(string $fragment): string
    {
        global $conanIndex, $conanIsHome;
        if ($conanIsHome) {
            return $fragment;
        }
        return $conanIndex . $fragment;
    }
}
