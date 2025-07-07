<?php
session_start();

// Set default language to English
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Handle language switching
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'nl'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Load the appropriate language file
$lang = include __DIR__ . '/lang/' . $_SESSION['lang'] . '.php';

// Translation function
function t($key, $default = null) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : ($default ?: $key);
}

// Get current language
function getCurrentLang() {
    return $_SESSION['lang'];
}

// Get other language for the switch
function getOtherLang() {
    return $_SESSION['lang'] === 'en' ? 'nl' : 'en';
}

// Get other language name for display
function getOtherLangName() {
    return $_SESSION['lang'] === 'en' ? 'Nederlands' : 'English';
}
?>
