<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102;

/**
 * WebrtcRecordingPageResponse
 */
final class WebrtcRecordingPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo $pageInfo;
    /**
     * List of results for this page.
     */
    public \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\WebrtcRecordingPageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pageInfo' => $value instanceof \stdClass ? $this->pageInfo = new \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\WebrtcRecordingPageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\RecordingResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
