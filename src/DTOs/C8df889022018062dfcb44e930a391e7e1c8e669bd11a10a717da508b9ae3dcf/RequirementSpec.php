<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * RequirementSpec
 *
 * List of requirements needed for the resource request.
 */
class RequirementSpec extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'DOCUMENT' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\DocumentRequirementSpec',
        'EMAIL' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\EmailRequirementSpec',
        'GSM' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\GsmRequirementSpec',
        'INTEGER' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\IntegerRequirementSpec',
        'TEXT' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\TextRequirementSpec',
        'URL' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\UrlRequirementSpec',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.DocumentRequirementSpec' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\DocumentRequirementSpec',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.EmailRequirementSpec' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\EmailRequirementSpec',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.GsmRequirementSpec' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\GsmRequirementSpec',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.IntegerRequirementSpec' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\IntegerRequirementSpec',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.TextRequirementSpec' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\TextRequirementSpec',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.UrlRequirementSpec' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\UrlRequirementSpec',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FieldType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FieldType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
