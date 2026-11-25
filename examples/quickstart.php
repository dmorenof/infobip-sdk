<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use InfobipSDK\Configuration;
use InfobipSDK\InfobipOpenAPISpecificationSDK;
use InfobipSDK\Resource2fa\Resource2\Applications;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->baseUrl = 'https://YOUR-BASE-URL.api.infobip.com'; // your personal base URL
$configuration->securityCredentials = new SecurityCredentials(['APIKeyHeader' => 'App ' . (getenv('INFOBIP_API_KEY') ?: '')]);
InfobipOpenAPISpecificationSDK::configure($configuration);

$applications = Applications::get();

echo json_encode($applications), "\n";
