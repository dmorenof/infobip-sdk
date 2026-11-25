<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * ValidityWindow
 *
 * Description of a call link validation period and the number of times it can be used within the range.
 */
final class ValidityWindow extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specify the days a link can be used. It is every day of the week, by default.
     */
    public \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ValidityWindow\AcceptableDaysCollection $acceptableDays;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\AcceptableHours $acceptableHours;
    /**
     * Specify ending moment in the UTC timezone for when a call link becomes invalid. Default value is 24 hours after a link was created. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Example: "2023-12-01T16:00:00Z"
     * Format: date-time
     */
    public string $endTime;
    /**
     * By default, call links are generated for multiple calls.If you want to limit the period for how long a link is valid, specify the start and end time. If you want to invalidate a link after establishing a call, set this value to 'true' (defaults to 'false').For ROOM calls, this value cannot be 'true'.
     */
    public bool $oneTime;
    /**
     * Specify starting moment in the UTC timezone for when a call link becomes valid. Defaults to the time when a link was created. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Example: "2023-01-01T08:00:00Z"
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acceptableHours' => $value instanceof \stdClass ? $this->acceptableHours = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\AcceptableHours($value) : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'oneTime' => is_bool($value) ? $this->oneTime = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
