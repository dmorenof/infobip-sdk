<?php

declare(strict_types=1);

namespace InfobipSDK\Markuplanguage\Resource1;

final class Create extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /markuplanguage/1/create [operationId: create-markup-language-call] */
    /**
     * Create markup language call
     *
     * Create a new markup language call which will be processed according to provided markup instructions.
     */
    public static function post(\InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupRequest $payload): \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Create::class)->post($payload);
    }
}
