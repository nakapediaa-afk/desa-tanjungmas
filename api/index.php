<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Ensure all writable storage and bootstrap directories exist in /tmp on Vercel
$tmpDirs = [
    '/tmp/storage',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap',
    '/tmp/bootstrap/cache',
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Copy pre-built bootstrap cache to /tmp/bootstrap/cache so it is writable and ready
$bootstrapCacheDir = __DIR__ . '/../bootstrap/cache';
if (is_dir($bootstrapCacheDir)) {
    foreach (scandir($bootstrapCacheDir) as $f) {
        if ($f !== '.' && $f !== '..' && $f !== '.gitignore') {
            @copy($bootstrapCacheDir . '/' . $f, '/tmp/bootstrap/cache/' . $f);
        }
    }
}

// Copy pre-seeded SQLite database to /tmp if not exists or empty
$sqliteSource = __DIR__ . '/../database/database.sqlite';
$sqliteDest = '/tmp/database.sqlite';

if (file_exists($sqliteSource)) {
    if (!file_exists($sqliteDest) || filesize($sqliteDest) === 0) {
        @copy($sqliteSource, $sqliteDest);
    }
}

try {
    // Forward request to Laravel public/index.php
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo '<div style="font-family:sans-serif; padding:2rem; background:#fff; color:#111;">';
    echo '<h1 style="color:#e11d48;">Laravel Error on Vercel</h1>';
    echo '<p><strong>Exception:</strong> ' . htmlspecialchars(get_class($e)) . '</p>';
    echo '<p><strong>Message:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>File:</strong> ' . htmlspecialchars($e->getFile()) . ':' . $e->getLine() . '</p>';
    echo '<pre style="background:#f1f5f9; padding:1rem; border-radius:8px; overflow-x:auto;">' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
}
