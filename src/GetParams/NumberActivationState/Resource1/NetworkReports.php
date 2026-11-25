<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberActivationState\Resource1;

final class NetworkReports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'dateFrom' => 'dateFrom',
        'dateTo' => 'dateTo',
        'generatedDateFrom' => 'generatedDateFrom',
        'generatedDateTo' => 'generatedDateTo',
        'networkId' => 'networkId',
        'networkName' => 'networkName',
        'page' => 'page',
        'reportId' => 'reportId',
        'size' => 'size',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'networkId' => [
        'format' => 'int32',
    ],
    'page' => [
        'format' => 'int32',
    ],
    'size' => [
        'format' => 'int32',
    ],
];

    public ?string $dateFrom;
    public ?string $dateTo;
    public ?string $generatedDateFrom;
    public ?string $generatedDateTo;
    public ?int $networkId {
        set {
            $this->assigning('networkId', $value);
            $this->networkId = $value;
        }
    }
    public ?string $networkName;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $reportId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
