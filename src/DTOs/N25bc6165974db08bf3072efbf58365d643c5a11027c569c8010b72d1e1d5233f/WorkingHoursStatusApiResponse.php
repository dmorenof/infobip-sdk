<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f;

/**
 * WorkingHoursStatusApiResponse
 */
final class WorkingHoursStatusApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
