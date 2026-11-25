<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aa157138bc28697f89db8325cc3d3ce20c0f3c72c30b6831a5435f3f2d211cfe;

/**
 * CallRoutingRecordingPage
 */
final class CallRoutingRecordingPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\Aa157138bc28697f89db8325cc3d3ce20c0f3c72c30b6831a5435f3f2d211cfe\CallRoutingRecordingPage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Aa157138bc28697f89db8325cc3d3ce20c0f3c72c30b6831a5435f3f2d211cfe\CallRoutingRecordingPage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRoutingRecordingApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
