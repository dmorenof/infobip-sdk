<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1;

final class Configs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /call-link/1/configs [operationId: get-configs] */
    /**
     * Get configurations
     *
     * Use this method to retrieve all call link configurations.
     */
    public static function get(?\InfobipSDK\GetParams\CallLink\Resource1\Configs $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkConfigPage
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Configs::class)->get($params);
    }

    /** POST /call-link/1/configs [operationId: create-config] */
    /**
     * Create configuration
     *
     * Use this method to add a new call link configuration.
     */
    public static function post(\InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfigRequest $payload): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Configs::class)->post($payload);
    }

    /** DELETE /call-link/1/configs/{id} [operationId: delete-config] */
    /**
     * Delete configuration
     *
     * Use this method to delete a call link configuration by its ID.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Configs::class)->deleteById($id);
    }

    /** GET /call-link/1/configs/{id} [operationId: get-config] */
    /**
     * Get configuration
     *
     * Use this method to retrieve a call link configuration by its ID.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Configs::class)->getById($id);
    }

    /** PATCH /call-link/1/configs/{id} [operationId: patch-config] */
    /**
     * Partial configuration update
     *
     * Use this method to update a call link configuration.
     * New values for configuration attributes replace the existing ones. If no value is passed in the request, the attribute keeps its value.
     */
    public static function patchById(string $id, \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfigRequest $payload): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Configs::class)->patchById($id, $payload);
    }

    /** PUT /call-link/1/configs/{id} [operationId: update-config] */
    /**
     * Update a configuration
     *
     * Use this method to overwrite a call link configuration.
     * New values for configuration attributes replace the existing ones. If no value is passed,
     * the attribute is set to empty or to default, if available.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfigRequest $payload): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Configs::class)->putById($id, $payload);
    }

}
