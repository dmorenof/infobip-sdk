<?php

declare(strict_types=1);

namespace InfobipSDK\Markuplanguage\Resource1;

final class Config extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /markuplanguage/1/config [operationId: get-markup-language-config-list] */
    /**
     * Get markup language configurations
     *
     * Get existing markup language configurations with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Markuplanguage\Resource1\Config $params = null): \InfobipSDK\DTOs\N526c8fd5dbec2ed6659284b76850ff4085b7915f78d3266fedb5e0b5300d882a\MarkupLanguageConfigResponsePage
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Config::class)->get($params);
    }

    /** POST /markuplanguage/1/config [operationId: create-markup-language-config] */
    /**
     * Create a markup language configuration
     *
     * Create a new markup language configuration.
     */
    public static function post(\InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigRequest $payload): \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Config::class)->post($payload);
    }

    /** DELETE /markuplanguage/1/config/{configId} [operationId: delete-markup-language-config] */
    /**
     * Delete a markup language configuration
     *
     * Delete an existing markup language configuration.
     */
    public static function deleteByConfigId(string $configId): \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Config::class)->deleteByConfigId($configId);
    }

    /** GET /markuplanguage/1/config/{configId} [operationId: get-markup-language-config] */
    /**
     * Get a markup language configuration
     *
     * Get an existing markup language configuration.
     */
    public static function getByConfigId(string $configId): \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Config::class)->getByConfigId($configId);
    }

    /** PUT /markuplanguage/1/config/{configId} [operationId: update-markup-language-config] */
    /**
     * Update a markup language configuration
     *
     * Update an already existing markup language configuration. Fields that are not sent in the request body will take default values and overwrite existing ones.
     */
    public static function putByConfigId(string $configId, \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigRequest $payload): \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Config::class)->putByConfigId($configId, $payload);
    }
}
