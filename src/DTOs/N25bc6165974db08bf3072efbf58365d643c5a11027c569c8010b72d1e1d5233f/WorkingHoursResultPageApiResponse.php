<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f;

/**
 * WorkingHoursResultPageApiResponse
 */
final class WorkingHoursResultPageApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\Pagination $pagination;
    public \InfobipSDK\Collections\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursResultPageApiResponse\WorkingHoursCollection $workingHours;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\Pagination($value) : parent::assignMember($name, $value),
            'workingHours' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->workingHours = new \InfobipSDK\Collections\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursResultPageApiResponse\WorkingHoursCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
