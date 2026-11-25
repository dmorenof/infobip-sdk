<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoBrandMessages\Resource1;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-brand-messages/1/templates [operationId: get-brand-message-templates] */
    /**
     * Get Brand Message templates
     *
     * Get Brand Message templates with an optional time range filter to include only those modified within that period.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public static function get(?\InfobipSDK\GetParams\KakaoBrandMessages\Resource1\Templates $params = null): \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\ModifiedTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoBrandMessages\Resource1\Templates::class)->get($params);
    }

    /** POST /kakao-brand-messages/1/templates [operationId: create-brand-message-template] */
    /**
     * Create Brand Message template
     *
     * Create Brand Message template.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public static function post(\InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CreateTemplateRequest $payload): \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CreateTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoBrandMessages\Resource1\Templates::class)->post($payload);
    }

    /** PUT /kakao-brand-messages/1/templates/{templateCode} [operationId: update-brand-message-template] */
    /**
     * Update Brand Message template
     *
     * Update an existing Brand Message template by template code.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public static function putByTemplateCode(string $templateCode, \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CreateTemplateRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\KakaoBrandMessages\Resource1\Templates::class)->putByTemplateCode($templateCode, $payload);
    }
}
