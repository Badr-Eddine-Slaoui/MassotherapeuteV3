<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command(signature: 'inspire', callback: function (): void {
    $this->comment(Inspiring::quote());
})->purpose(description: 'Display an inspiring quote')->hourly();


Artisan::command(signature: 'start', callback: function (): void {
    $this->info('Starting Laravel server...');
    $laravelServer = 'php artisan serve';
    exec(command: $laravelServer);

    $this->info('Starting Vite server...');
    $viteServer = 'npm run dev';
    exec(command: $viteServer);

    $this->info('Both Laravel and Vite servers have started.');
})->purpose(description: 'Start Laravel development server and Vite server simultaneously');
