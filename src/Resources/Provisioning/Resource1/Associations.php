<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Provisioning\Resource1;

final class Associations extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/provisioning/1/associations',
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
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
                'schemaNullable' => false,
            ],
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\ResourceAssociationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete resource association
     *
     * Delete a resource association.
     */
    public function delete(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationRequest $payload): void
    {
        $this->executeBody(self::operation(self::DELETE), $payload);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/provisioning/1/associations',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\PageResourceAssociation',
    ];

    /**
     * Get resource associations
     *
     * Get a paginated list of resource associations.
     */
    public function get(?\InfobipSDK\GetParams\Provisioning\Resource1\Associations $params = null): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageResourceAssociation
    {
        /** @var \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageResourceAssociation $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/provisioning/1/associations',
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
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            409 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
                'schemaNullable' => false,
            ],
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
            409 => [
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
        'responseType' => 'mixed',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\ResourceAssociationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create resource association
     *
     * Create a resource association.
     */
    public function post(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationRequest $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
