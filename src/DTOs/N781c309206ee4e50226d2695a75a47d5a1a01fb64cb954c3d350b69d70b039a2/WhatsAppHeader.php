<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppHeader
 */
class WhatsAppHeader extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppDocumentHeader' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppDocumentHeader',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppImageHeader' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppImageHeader',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppTextHeader' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppTextHeader',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppVideoHeader' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVideoHeader',
    'DOCUMENT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppDocumentHeader',
    'IMAGE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppImageHeader',
    'TEXT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppTextHeader',
    'VIDEO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVideoHeader',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppHeaderType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppHeaderType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
