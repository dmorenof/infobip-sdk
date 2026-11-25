<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoBrandMessages\Resource1\Templates;

final class Single extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-brand-messages/1/templates/single [operationId: get-brand-message-template] */
    /**
     * Get Brand Message template
     *
     * Get Brand Message template
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public static function get(\InfobipSDK\GetParams\KakaoBrandMessages\Resource1\Templates\Single $params): \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\GetTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoBrandMessages\Resource1\Templates\Single::class)->get($params);
    }

}
