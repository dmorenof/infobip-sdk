<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1;

/**
 * MMSMoReportResponse
 */
final class MMSMoReportResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Results.
     */
    public \InfobipSDK\Collections\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoReportResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoReportResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MMSMoReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
