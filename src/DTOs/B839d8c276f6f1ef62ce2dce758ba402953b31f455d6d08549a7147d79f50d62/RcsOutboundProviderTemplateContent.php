<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsOutboundProviderTemplateContent
 */
final class RcsOutboundProviderTemplateContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'templateId',
    'type',
];

    protected const array VALIDATION = [
    'templateId' => [
        'minLength' => 1,
    ],
];

    /**
     * Template parameters. Parameter names should match ones defined in template and value to be replaced in message. Mismatch will result in EC7018.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundProviderTemplateContent\ParametersCollection $parameters;
    /**
     * Unique Template code. Must match Template name as registered when creating template. Mismatch will result in EC7018.
     */
    public string $templateId {
        set {
            $this->assigning('templateId', $value);
            $this->templateId = $value;
        }
    }
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameters' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->parameters = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundProviderTemplateContent\ParametersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Parameter::class)) : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
