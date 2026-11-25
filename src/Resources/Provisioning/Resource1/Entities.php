<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Provisioning\Resource1;

final class Entities extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/provisioning/1/entities',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\PageEntity',
    ];

    /**
     * Get entities
     *
     * Get a paginated list of entities.
     */
    public function get(?\InfobipSDK\GetParams\Provisioning\Resource1\Entities $params = null): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageEntity
    {
        /** @var \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageEntity $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/provisioning/1/entities',
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
            'type' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\Entity',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create entity
     *
     * Create an entity associated with the specified `entityId`. <br>An entity attached to a submitted message will get auto created if it doesn't exit yet. It will get the entityId and entityName being the value passed on a message.
     */
    public function post(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Entity $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_ENTITY_ID = [
        'method' => 'DELETE',
        'path' => '/provisioning/1/entities/{entityId}',
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
            'entityId' => [
                'maxLength' => 255,
            ],
        ],
    ];

    /**
     * Delete entity
     *
     * Delete an entity associated with the specified `entityId`. <br> Deleting an entity will reset all resources that were linked to that entity to application = default and entity = null. You should ensure that any configuration (like resource associations, inbound message configurations, subscriptions, bots, API Keys etc) related to given entity are appropriately reassigned to other entities before attempting to delete the entity.
     */
    public function deleteByEntityId(string $entityId, ?\InfobipSDK\DeleteParams\Provisioning\Resource1\Entities\ByEntityId $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ENTITY_ID), path: ['entityId' => $entityId], parameters: $params);
        return $result;
    }

    private const array GET_BY_ENTITY_ID = [
        'method' => 'GET',
        'path' => '/provisioning/1/entities/{entityId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\Entity',
        'validation' => [
            'entityId' => [
                'maxLength' => 255,
            ],
        ],
    ];

    /**
     * Get entity
     *
     * Get an entity for the specified `entityId`.
     */
    public function getByEntityId(string $entityId): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Entity
    {
        /** @var \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Entity $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ENTITY_ID), path: ['entityId' => $entityId]);
        return $result;
    }

    private const array PUT_BY_ENTITY_ID = [
        'method' => 'PUT',
        'path' => '/provisioning/1/entities/{entityId}',
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
            'entityId' => [
                'maxLength' => 255,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\\ModifyEntity',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Modify entity
     *
     * Modify a resource `name` property.
     */
    public function putByEntityId(string $entityId, \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ModifyEntity $payload): void
    {
        $this->executeBody(self::operation(self::PUT_BY_ENTITY_ID), $payload, path: ['entityId' => $entityId]);
        return;
    }

}
