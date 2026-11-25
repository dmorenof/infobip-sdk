<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * CreateRcsTemplateRequest
 */
final class CreateRcsTemplateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'providers',
        'templateName',
    ];

    protected const array VALIDATION = [
        'providers' => [
            'uniqueItems' => true,
        ],
        'templateName' => [
            'minLength' => 1,
            'maxLength' => 20,
        ],
    ];

    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContent $content;
    /**
     * List of providers with which the template should be registered. For list of available providers please check [Get RCS template providers](#channels/rcs/rcs-service-management/rcs-template-management/rcs-template-providers) endpoint. Please note that default value is empty array and in that case the template will be registered with all providers available for given sender.
     * Example: ["INDIA_VI"]
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection $providers {
        set {
            $this->assigning('providers', $value);
            $this->providers = $value;
        }
    }
    /**
     * The unique name of the template that will be created for the specified sender. Must contain only alphanumeric characters and underscores.
     * Example: "demo_template"
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
            'providers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->providers = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection($value) : parent::assignMember($name, $value),
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
