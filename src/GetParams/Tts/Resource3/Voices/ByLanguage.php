<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Tts\Resource3\Voices;

final class ByLanguage extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'includeNeural' => 'includeNeural',
    ],
    'header' => [],
];

    public ?bool $includeNeural;
}
