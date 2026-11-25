<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223;

/**
 * SMSReportResponse
 */
final class SMSReportResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223\SMSReportResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223\SMSReportResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
