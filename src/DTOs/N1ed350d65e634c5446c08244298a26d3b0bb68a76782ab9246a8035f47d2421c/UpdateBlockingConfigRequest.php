<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * UpdateBlockingConfigRequest
 *
 * Request to update blocking configurations.
 * Example: {"configs":[{"configId":"37B93F4D2BA3C58B58526EAEAA1AB35A","sensitivity":"LOW"},{"configId":"CAE07EFA606C6E960BCD4880C72008C1","sensitivity":"STRICT"},{"configId":"1D805F056FF2D448B307FA909A5BF96D","sensitivity":"VERY_STRICT","enabled":false},{"configId":"A475D484118902F60DBACFD46B76F960","enabled":true}]}
 */
final class UpdateBlockingConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'configs',
    ];

    protected const array VALIDATION = [
        'configs' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * List of existing blocking configurations to update, identified by configId.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateBlockingConfigRequest\ConfigsCollection $configs {
        set {
            $this->assigning('configs', $value);
            $this->configs = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->configs = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateBlockingConfigRequest\ConfigsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdatePlatformRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
