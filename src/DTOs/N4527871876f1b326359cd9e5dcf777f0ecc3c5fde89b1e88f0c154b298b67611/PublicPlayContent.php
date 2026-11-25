<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * PlayContent
 *
 * Audio content to play. It can either be previously uploaded file or a file from a URL.
 */
class PublicPlayContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '00a1f95ecbb89787a99eae13916106d1d4d9cc2934634cfbf0d16daa73fd2cf0.TextPlayContent' => 'InfobipSDK\\DTOs\\N00a1f95ecbb89787a99eae13916106d1d4d9cc2934634cfbf0d16daa73fd2cf0\\TextPlayContent',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.FilePlayContent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\FilePlayContent',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.RecordingPlayContent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\RecordingPlayContent',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.TtyPlayContent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\TtyPlayContent',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.UrlPlayContent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\UrlPlayContent',
        'FILE' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\FilePlayContent',
        'RECORDING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\RecordingPlayContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N00a1f95ecbb89787a99eae13916106d1d4d9cc2934634cfbf0d16daa73fd2cf0\\TextPlayContent',
        'TTY' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\TtyPlayContent',
        'URL' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\UrlPlayContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
