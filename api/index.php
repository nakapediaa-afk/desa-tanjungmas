<?php

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

// Copy pre-discovered packages.php to /tmp/bootstrap/cache so it is writable and fast
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

// Forward request to Laravel public/index.php
require __DIR__ . '/../public/index.php';
