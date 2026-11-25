<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661;

/**
 * ReportMetadata
 */
final class ReportMetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dateFrom',
        'dateTo',
        'expiryDate',
        'generatedDate',
        'networkId',
        'networkName',
        'reportId',
    ];

    protected const array VALIDATION = [
        'networkId' => [
            'format' => 'int32',
        ],
        'reportId' => [
            'maxLength' => 64,
        ],
    ];

    /**
     * Date in UTC that defines since when the report has data about activation changes on a given network. <br />Format: yyyy-MM-ddNote that multiple reports for the same date range on the same network are possible. <br />
     * Example: "2024-03-07"
     */
    public string $dateFrom;
    /**
     * Date in UTC that defines till when the report has data about activation changes on a given network. <br />Format: yyyy-MM-dd <br />Note that multiple reports for the same date range on the same network are possible.
     * Example: "2024-03-08"
     */
    public string $dateTo;
    /**
     * Date in UTC that defines when the report will be considered expired and consequently deleted. <br />Format: yyyy-MM-dd
     * Example: "2024-06-08"
     */
    public string $expiryDate;
    /**
     * Date in UTC then given report was generated. Format: yyyy-MM-dd
     * Example: "2024-03-09"
     */
    public string $generatedDate;
    /**
     * The networkId of network that provided the report content.
     * Example: 1717
     * Format: int32
     */
    public int $networkId {
        set {
            $this->assigning('networkId', $value);
            $this->networkId = $value;
        }
    }
    /**
     * The name of network that provided the report content.
     * Example: "Verizon Wireless"
     */
    public string $networkName;
    /**
     * The unique reportId. Needed for accessing the report content
     * Example: "138a2a58-0cf3-4ed3-a828-c3dc35eb2bb6"
     */
    public string $reportId {
        set {
            $this->assigning('reportId', $value);
            $this->reportId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dateFrom' => is_string($value) ? $this->dateFrom = $value : parent::assignMember($name, $value),
            'dateTo' => is_string($value) ? $this->dateTo = $value : parent::assignMember($name, $value),
            'expiryDate' => is_string($value) ? $this->expiryDate = $value : parent::assignMember($name, $value),
            'generatedDate' => is_string($value) ? $this->generatedDate = $value : parent::assignMember($name, $value),
            'networkId' => is_int($value) ? $this->networkId = $value : parent::assignMember($name, $value),
            'networkName' => is_string($value) ? $this->networkName = $value : parent::assignMember($name, $value),
            'reportId' => is_string($value) ? $this->reportId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
