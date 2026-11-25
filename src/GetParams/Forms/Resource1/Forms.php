<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Forms\Resource1;

final class Forms extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'formStatus' => 'formStatus',
        'formType' => 'formType',
        'limit' => 'limit',
        'offset' => 'offset',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'format' => 'int32',
    ],
    'offset' => [
        'format' => 'int32',
    ],
];

    public ?\InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormStatus $formStatus;
    public ?\InfobipSDK\Enums\Forms\Resource1\Forms\Get\Query\FormTypeEnum $formType;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
}
