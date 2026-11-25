<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * AggregateDataResponse
 */
final class AggregateDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'columns',
    'requestedPeriod',
    'rows',
    'totalRows',
];

    protected const array VALIDATION = [
    'columns' => [
        'uniqueItems' => true,
    ],
    'totalRows' => [
        'format' => 'int32',
    ],
];

    /**
     * List of columns available in the response data rows.
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse\ColumnsCollection $columns {
        set {
            $this->assigning('columns', $value);
            $this->columns = $value;
        }
    }
    /**
     * The actual time period used for data filtering, expressed as a date range. May differ from the requested range because the requested range may be aligned to the aggregation granularity, and, where applicable, trimmed to finalized periods only.
     */
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse\RequestedPeriodDTO $requestedPeriod;
    /**
     * Array of data rows, where each row shows the aggregated data for one combination of the requested dimensions. Values map to the columns array by index. If a metric is not available for a given channel, the corresponding value is "N/A".
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse\RowsArray\RowsCollection $rows;
    /**
     * Total number of data rows.
     * Format: int32
     */
    public int $totalRows {
        set {
            $this->assigning('totalRows', $value);
            $this->totalRows = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columns' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->columns = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse\ColumnsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\ColumnInfo::class)) : parent::assignMember($name, $value),
            'totalRows' => is_int($value) ? $this->totalRows = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
