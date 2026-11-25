<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberRegistration\Resource1;

final class NumberPools extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'availability' => 'availability',
        'page' => 'page',
        'registrarRecordId' => 'registrarRecordId',
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

    public ?\InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPoolAvailability $availability;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $registrarRecordId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
