<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * TemplateQualityPushEventChange
 */
final class TemplateQualityPushEventChange extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatePushEventChange
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\NewTemplateQuality $newQualityScore;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\PreviousTemplateQuality $previousQualityScore;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'newQualityScore' => is_string($value) ? $this->newQualityScore = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\NewTemplateQuality::from($value) : parent::assignMember($name, $value),
            'previousQualityScore' => is_string($value) ? $this->previousQualityScore = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\PreviousTemplateQuality::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
