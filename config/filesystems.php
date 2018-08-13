<?php

return [

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    'disks' => [

        'usuarios' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/usuarios',
        ],
        'empresas' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/empresas',
        ],
        'actividades' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/actividades',
        ],
        'categorias' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/categorias',
        ],
        'equipos' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/equipos',
        ],
        'institucion' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/institucion',
        ],
        'publicaciones' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/publicaciones',
        ],
        'productos' => [
            'driver' => 'local',
            'root' => base_path().'/public_html/imagen/productos',
        ],
        'imagen' => [
            'driver' => 'local',
            'root' => storage_path('imagen'),
            'visibility' => 'public',
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

    ],

];
