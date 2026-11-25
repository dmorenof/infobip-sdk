<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * V1HeaderApiData
 *
 * Template header. Can be `image`, `document`, `video`, `location` or `text`.
 */
class V1HeaderApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'format';
    public const array DISCRIMINATOR_MAPPING = [
        'DOCUMENT' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1DocumentHeaderApiData',
        'IMAGE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1ImageHeaderApiData',
        'LOCATION' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1LocationHeaderApiData',
        'TEXT' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1TextHeaderApiData',
        'VIDEO' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1VideoHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.V1DocumentHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1DocumentHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.V1ImageHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1ImageHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.V1LocationHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1LocationHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.V1TextHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1TextHeaderApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.V1VideoHeaderApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\V1VideoHeaderApiData',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1HeaderApiData\FormatEnum $format;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'format' => is_string($value) ? $this->format = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1HeaderApiData\FormatEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
