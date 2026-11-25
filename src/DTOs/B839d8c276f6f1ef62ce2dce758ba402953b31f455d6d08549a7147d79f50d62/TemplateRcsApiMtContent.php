<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * TemplateRcsApiMtContent
 *
 * Rcs message contents.
 */
final class TemplateRcsApiMtContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'templateName',
];

    protected const array VALIDATION = [
    'templateName' => [
        'minLength' => 1,
    ],
];

    /**
     * Name-Value pairs of parameters included in the template, as defined in the Vi RBM Portal
     * Example: {"name":"John Smith","city":"New York"}
     */
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\TemplateRcsApiMtContent\TemplateDataMap $templateData;
    /**
     * Unique template code as visible in the Vi RBM Portal
     */
    public string $templateName {
        set {
            $this->assigning('templateName', $value);
            $this->templateName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
