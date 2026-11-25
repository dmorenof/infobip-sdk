<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Provisioning\Resource1\Associations;

final class Single extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/provisioning/1/associations/single',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\ResourceAssociationResponse',
    ];

    /**
     * Get resource association
     *
     * Get an exact resource association.
     */
    public function get(\InfobipSDK\GetParams\Provisioning\Resource1\Associations\Single $params): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationResponse
    {
        /** @var \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
