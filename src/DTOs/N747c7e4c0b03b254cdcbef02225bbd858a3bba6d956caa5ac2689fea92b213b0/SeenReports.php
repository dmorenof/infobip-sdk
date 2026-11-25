<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * SeenReports
 */
final class SeenReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\SeenReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\SeenReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\SeenReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
