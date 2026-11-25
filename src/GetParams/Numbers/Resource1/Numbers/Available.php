<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Numbers\Resource1\Numbers;

final class Available extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'capabilities' => 'capabilities',
        'country' => 'country',
        'lata' => 'lata',
        'limit' => 'limit',
        'npa' => 'npa',
        'number' => 'number',
        'nxx' => 'nxx',
        'rateCenter' => 'rateCenter',
        'state' => 'state',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'capabilities' => [
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'MMS',
                    'SMS',
                    'VOICE',
                    'WHATSAPP',
                    'WHATSAPP_VOICE',
                ],
            ],
        ],
    ],
    'country' => [
        'pattern' => '^[A-Z]{2}$',
    ],
    'lata' => [
        'minimum' => 100,
        'maximum' => 99999,
        'format' => 'int32',
    ],
    'limit' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
    'npa' => [
        'minimum' => 200,
        'maximum' => 999,
        'format' => 'int32',
    ],
    'nxx' => [
        'minimum' => 200,
        'maximum' => 999,
        'format' => 'int32',
    ],
    'rateCenter' => [
        'minLength' => 3,
        'maxLength' => 10,
    ],
    'state' => [
        'minLength' => 2,
        'maxLength' => 2,
    ],
];

    /** @var list<string>|null */
    public ?array $capabilities;
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    public ?int $lata {
        set {
            $this->assigning('lata', $value);
            $this->lata = $value;
        }
    }
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?int $npa {
        set {
            $this->assigning('npa', $value);
            $this->npa = $value;
        }
    }
    public ?string $number;
    public ?int $nxx {
        set {
            $this->assigning('nxx', $value);
            $this->nxx = $value;
        }
    }
    public ?string $rateCenter {
        set {
            $this->assigning('rateCenter', $value);
            $this->rateCenter = $value;
        }
    }
    public ?string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
}
