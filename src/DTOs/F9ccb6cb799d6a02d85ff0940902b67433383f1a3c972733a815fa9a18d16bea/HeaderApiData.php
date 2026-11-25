<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * HeaderApiData
 *
 * Template header. Can be `image`, `document`, `video`, `location` or `text`.
 */
class HeaderApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'format';
    public const array DISCRIMINATOR_MAPPING = [
        'DOCUMENT' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\DocumentHeaderApiData',
        'GIF' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\GifHeaderApiData',
        'IMAGE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\ImageHeaderApiData',
        'LOCATION' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\LocationHeaderApiData',
        'TEXT' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TextHeaderApiData',
        'VIDEO' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\VideoHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.DocumentHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\DocumentHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.GifHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\GifHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.ImageHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\ImageHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.LocationHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\LocationHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.TextHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TextHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.VideoHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\VideoHeaderApiData',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\HeaderApiData\FormatEnum $format;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'format' => is_string($value) ? $this->format = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\HeaderApiData\FormatEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
