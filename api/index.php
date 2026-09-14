<?php

// Ensure writable storage directories exist in /tmp on Vercel
$tmpDirs = [
    '/tmp/storage',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
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
