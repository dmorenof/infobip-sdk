<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2;

/**
 * SeenReports
 */
final class SeenReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every received message.
     */
    public \InfobipSDK\Collections\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\SeenReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\SeenReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\SeenReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
