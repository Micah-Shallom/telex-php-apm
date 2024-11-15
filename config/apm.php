<?php

use function env;

return [
    'webhook_url' => getenv('MYAPM_WEBHOOK_URL') ?: "",
];

