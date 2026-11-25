<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * MatchRequest
 */
final class MatchRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identities',
];

    protected const array VALIDATION = [
    'identities' => [
        'minItems' => 1,
        'maxItems' => 1000,
    ],
];

    /**
     * List of identities.
     */
    public \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchRequest\IdentitiesCollection $identities {
        set {
            $this->assigning('identities', $value);
            $this->identities = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->identities = new \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchRequest\IdentitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ByUniqueRequestParameters::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
