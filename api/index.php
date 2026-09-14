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

// Force debug mode to see exact exception if any occurs
putenv('APP_DEBUG=true');
$_ENV['APP_DEBUG'] = 'true';
$_SERVER['APP_DEBUG'] = 'true';

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo '<div style="font-family:sans-serif; padding:2rem; background:#fff; color:#111;">';
    echo '<h1 style="color:#e11d48;">Laravel Error on Vercel</h1>';
    echo '<p><strong>Exception:</strong> ' . get_class($e) . '</p>';
    echo '<p><strong>Message:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>Location:</strong> ' . htmlspecialchars($e->getFile()) . ' on line ' . $e->getLine() . '</p>';
    echo '<pre style="background:#f1f5f9; padding:1rem; border-radius:8px; overflow-x:auto;">' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
}
