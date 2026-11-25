<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * CreateBlockingConfigRequest
 *
 * Request to create blocking configurations.
 * Example: {"platforms":[{"application":"MyApplication1","entity":"MyEntity1"},{"application":"MyApplication2","entity":"MyEntity2"},{"application":"MyApplication3"}]}
 */
final class CreateBlockingConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'platforms',
    ];

    protected const array VALIDATION = [
        'platforms' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * List of platforms (application/entity pairs) for which to create blocking configurations.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateBlockingConfigRequest\PlatformsCollection $platforms {
        set {
            $this->assigning('platforms', $value);
            $this->platforms = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'platforms' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->platforms = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateBlockingConfigRequest\PlatformsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\PlatformRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
