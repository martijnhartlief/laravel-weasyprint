<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WeasyPrint Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |    |
    | Binary:
    |
    |    The file path of the WeasyPrint executable.
    |
    | Timout:
    |
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The WeasyPrint command options. See https://github.com/pontedilana/php-weasyprint#pass-options-to-phpweasyprint
    |
    | Env:
    |
    |    The environment variables to set while running the weasyprint process.
    |
    */

    'pdf' => [
        'binary'  => env('WEASYPRINT_BINARY', '/usr/local/bin/weasyprint'),
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],
];
