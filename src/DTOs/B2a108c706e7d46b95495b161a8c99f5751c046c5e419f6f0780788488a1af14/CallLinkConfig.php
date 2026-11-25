<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14;

/**
 * CallLinkConfig
 *
 * Call link configuration.
 */
final class CallLinkConfig extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallOptions $callOptions;
    /**
     * Configuration ID. Once a call link is created, this value might be sent in the request as one specific call link configuration to be used by the call link.
     */
    public string $id;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\InitialOptions $initialOptions;
    /**
     * When you create call link without callLinkConfigId, the one marked as default will be used. Only one configuration can be default.If you don't have a configuration, the basic Infobip theme with default values and minimal options will be used.If you want to set another configuration as default, specify its value when adding or updating it.
     */
    public bool $isDefault;
    /**
     * Configuration name or description. It doesn't have to be unique.
     */
    public string $name;
    /**
     * Id of the subdomain that will be set on every call link generated with this configuration. If undefined, call links will be generated without a subdomain.
     */
    public string $subdomainId;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Theme $theme;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Webhook $webhook;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callOptions' => $value instanceof \stdClass ? $this->callOptions = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallOptions($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
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
