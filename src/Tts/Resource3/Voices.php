<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Voices extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tts/3/voices/{language} [operationId: get-voices] */
    /**
     * Get Voices
     *
     * This method allows you to retrieve all voices for the given language
     */
    public static function getByLanguage(string $language, ?\InfobipSDK\GetParams\Tts\Resource3\Voices\ByLanguage $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GetVoicesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Voices::class)->getByLanguage($language, $params);
    }
}
