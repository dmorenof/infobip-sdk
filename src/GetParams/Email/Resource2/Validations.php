<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Email\Resource2;

final class Validations extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'catchAll' => 'catchAll',
        'cursor' => 'cursor',
        'destination' => 'destination',
        'disposable' => 'disposable',
        'risk' => 'risk',
        'roleBased' => 'roleBased',
        'size' => 'size',
        'validMailbox' => 'validMailbox',
        'validSyntax' => 'validSyntax',
        'validatedDateFrom' => 'validatedDateFrom',
        'validatedDateTo' => 'validatedDateTo',
        'validationRequestId' => 'validationRequestId',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'destination' => [
        'minItems' => 0,
        'maxItems' => 100,
        'items' => [
            'type' => 'string',
            'rules' => [
                'minLength' => 1,
                'maxLength' => 320,
            ],
        ],
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 1000,
        'format' => 'int32',
    ],
    'validMailbox' => [
        'pattern' => '^(true|false|unknown)$',
    ],
    'validationRequestId' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    public ?bool $catchAll;
    public ?string $cursor;
    /** @var list<string>|null */
    public ?array $destination;
    public ?bool $disposable;
    public ?\InfobipSDK\Enums\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiRisk $risk;
    public ?bool $roleBased;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $validMailbox {
        set {
            $this->assigning('validMailbox', $value);
            $this->validMailbox = $value;
        }
    }
    public ?bool $validSyntax;
    public ?string $validatedDateFrom;
    public ?string $validatedDateTo;
    public ?string $validationRequestId {
        set {
            $this->assigning('validationRequestId', $value);
            $this->validationRequestId = $value;
        }
    }
}
