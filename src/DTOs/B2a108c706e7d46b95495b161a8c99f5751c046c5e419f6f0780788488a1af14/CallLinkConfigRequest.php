<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14;

/**
 * CallLinkConfigRequest
 *
 * Call link configuration.
 */
final class CallLinkConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
        ],
    ];

    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallOptions $callOptions;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\InitialOptions $initialOptions;
    /**
     * Indicates whether the specific call link configuration is the default one and used with any call link without a callLinkConfigId. Only one configuration can be default.If you don't have a configuration, the basic Infobip theme with default values and minimal options will be used.If you want to use another configuration, set this value to `true` for the call link config you wish as default.
     */
    public bool $isDefault;
    /**
     * Configuration name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Subdomain to use for every call link generated for this configuration.If not defined, no subdomain will be used.
     */
    public string $subdomainId;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Theme $theme;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Webhook $webhook;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callOptions' => $value instanceof \stdClass ? $this->callOptions = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallOptions($value) : parent::assignMember($name, $value),
            'initialOptions' => $value instanceof \stdClass ? $this->initialOptions = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\InitialOptions($value) : parent::assignMember($name, $value),
            'isDefault' => is_bool($value) ? $this->isDefault = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'subdomainId' => is_string($value) ? $this->subdomainId = $value : parent::assignMember($name, $value),
            'theme' => $value instanceof \stdClass ? $this->theme = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Theme($value) : parent::assignMember($name, $value),
            'webhook' => $value instanceof \stdClass ? $this->webhook = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Webhook($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
