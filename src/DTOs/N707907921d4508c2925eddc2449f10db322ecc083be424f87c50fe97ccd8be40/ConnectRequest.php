<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40;

/**
 * ConnectRequest
 */
final class ConnectRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callIds',
];

    protected const array VALIDATION = [
    'callIds' => [
        'uniqueItems' => true,
    ],
];

    /**
     * IDs of the calls to connect.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $callIds {
        set {
            $this->assigning('callIds', $value);
            $this->callIds = $value;
        }
    }
    public \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ActionConferenceRequest $conferenceRequest;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->callIds = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'conferenceRequest' => $value instanceof \stdClass ? $this->conferenceRequest = new \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ActionConferenceRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
