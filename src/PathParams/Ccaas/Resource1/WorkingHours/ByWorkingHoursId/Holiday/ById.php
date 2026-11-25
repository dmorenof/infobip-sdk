<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'workingHoursId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'id' => 'id',
        'workingHoursId' => 'workingHoursId',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'id' => [
        'minLength' => 1,
    ],
    'workingHoursId' => [
        'minLength' => 1,
    ],
];

    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $workingHoursId {
        set {
            $this->assigning('workingHoursId', $value);
            $this->workingHoursId = $value;
        }
    }
}
