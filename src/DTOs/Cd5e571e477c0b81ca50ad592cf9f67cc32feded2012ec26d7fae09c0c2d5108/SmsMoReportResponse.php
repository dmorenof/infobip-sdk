<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108;

/**
 * SmsMoReportResponse
 */
final class SmsMoReportResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'messageCount' => [
        'format' => 'int32',
    ],
    'pendingMessageCount' => [
        'format' => 'int32',
    ],
];

    /**
     * The number of messages returned in the `results` array.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * The number of messages that have not been pulled in.
     * Format: int32
     */
    public int $pendingMessageCount {
        set {
            $this->assigning('pendingMessageCount', $value);
            $this->pendingMessageCount = $value;
        }
    }
    /**
     * An array of result objects.
     */
    public \InfobipSDK\Collections\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108\SmsMoReportResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108\SmsMoReportResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsMoReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
