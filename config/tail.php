<?php

return [
    'production' => [

        /*
         * The host that contains your logs.
         */
        'host' => env('TAIL_HOST_PRODUCTION', 'http://127.0.0.1:8000'),

        /*
         * The user to be used to SSH to the server.
         */
        'user' => env('TAIL_USER_PRODUCTION', 'deploy'),

        /*
         * The path to the directory that contains your logs.
         */
        'log_directory' => env('TAIL_LOG_DIRECTORY_PRODUCTION', 'storage\logs'),

        /*
         * The filename of the log file that you want to tail.
         * Leave null to let the package automatically select the file to tail.
         */
        'file' => env('TAIL_LOG_FILE_PRODUCTION', "laravel.log"),

    ],
];
