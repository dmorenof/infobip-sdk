<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberActivationState\Resource1\NetworkReports\ByReportId;

final class Records extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page' => 'page',
            'size' => 'size',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'format' => 'int32',
        ],
        'size' => [
            'format' => 'int32',
        ],
    ];

    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
