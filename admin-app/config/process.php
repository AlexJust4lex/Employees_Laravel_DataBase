<?php
return [
    'disable_functions' => env('DISABLE_FUNCTIONS', 'proc_open,proc_get_status,proc_nice,proc_terminate'),
];
