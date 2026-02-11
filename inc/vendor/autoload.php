<?php
/**
 * Simple autoloader for locally included dependencies
 * This replaces Composer's autoloader for the minimal dependencies needed
 */

// Define base path
$vendorDir = __DIR__;

// Autoloader for Dotenv (vlucas/phpdotenv)
spl_autoload_register(function ($class) use ($vendorDir) {
    // Check if this is a Dotenv class
    if (strpos($class, 'Dotenv\\') === 0) {
        // Convert namespace to file path
        $relativePath = str_replace('Dotenv\\', '', $class);
        $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, $relativePath);
        $file = $vendorDir . '/vlucas/phpdotenv/' . $relativePath . '.php';
        
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
    return false;
});

// Load classes from inc/classes directory (original composer autoload classmap)
$classesDir = dirname($vendorDir) . '/classes/';
if (is_dir($classesDir)) {
    foreach (glob($classesDir . '*.php') as $file) {
        require_once $file;
    }
}
