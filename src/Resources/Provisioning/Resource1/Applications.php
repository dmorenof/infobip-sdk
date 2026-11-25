<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Provisioning\Resource1;

final class Applications extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/provisioning/1/applications',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\PageApplication',
    ];

    /**
     * Get applications
     *
     * Get a paginated list of applications.
     */
    public function get(?\InfobipSDK\GetParams\Provisioning\Resource1\Applications $params = null): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageApplication
    {
        /** @var \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageApplication $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/provisioning/1/applications',
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
            'type' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\Application',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create application
     *
     * Create an application associated with the specified `applicationId`.
     */
    public function post(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Application $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_APPLICATION_ID = [
        'method' => 'DELETE',
        'path' => '/provisioning/1/applications/{applicationId}',
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
            400 => '\\InfobipSDK\\DTOs\\E35a706fc99c4749296ef942f9e5af764730e23804a8d85886e3d0a3e3fc2340\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
        'responseType' => 'mixed',
        'validation' => [
            'applicationId' => [
                'maxLength' => 255,
            ],
        ],
    ];

    /**
     * Delete application
     *
     * Delete an application associated with the specified `applicationId`. <br>Deleting an application will reset all resources that were linked to that application to application = default and entity = null. You should ensure that any configuration (like resource associations, inbound message configurations, subscriptions, bots, API Keys etc) related to given application are appropriately reassigned to other applications before attempting to delete the application.
     */
    public function deleteByApplicationId(string $applicationId, ?\InfobipSDK\DeleteParams\Provisioning\Resource1\Applications\ByApplicationId $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_APPLICATION_ID), path: ['applicationId' => $applicationId], parameters: $params);
        return $result;
    }

    private const array GET_BY_APPLICATION_ID = [
        'method' => 'GET',
        'path' => '/provisioning/1/applications/{applicationId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\Application',
        'validation' => [
            'applicationId' => [
                'maxLength' => 255,
            ],
        ],
    ];

    /**
     * Get application
     *
     * Get an application for the specified `applicationId`.
     */
    public function getByApplicationId(string $applicationId): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Application
    {
        /** @var \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Application $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_APPLICATION_ID), path: ['applicationId' => $applicationId]);
        return $result;
    }

    private const array PUT_BY_APPLICATION_ID = [
        'method' => 'PUT',
        'path' => '/provisioning/1/applications/{applicationId}',
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
        'validation' => [
            'applicationId' => [
                'maxLength' => 255,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\ModifyApplication',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Modify application
     *
     * Modify a resource `name` property.
     */
    public function putByApplicationId(string $applicationId, \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ModifyApplication $payload): void
    {
        $this->executeBody(self::operation(self::PUT_BY_APPLICATION_ID), $payload, path: ['applicationId' => $applicationId]);
        return;
    }
}
