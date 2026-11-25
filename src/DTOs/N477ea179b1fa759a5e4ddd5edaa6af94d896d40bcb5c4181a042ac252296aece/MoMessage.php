<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece;

/**
 * MoMessage
 */
class MoMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece.FileMessage' => 'InfobipSDK\\DTOs\\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece\\FileMessage',
    '477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece.TextMessage' => 'InfobipSDK\\DTOs\\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece\\TextMessage',
    'FILE' => 'InfobipSDK\\DTOs\\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece\\FileMessage',
    'TEXT' => 'InfobipSDK\\DTOs\\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece\\TextMessage',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38\Type $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38\Type::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
