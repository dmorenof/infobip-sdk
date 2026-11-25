<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Sms\Resource1\Text;

final class Query extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'password',
    'to',
    'username',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
        'callbackData' => 'callbackData',
        'flash' => 'flash',
        'from' => 'from',
        'indiaDltContentTemplateId' => 'indiaDltContentTemplateId',
        'indiaDltPrincipalEntityId' => 'indiaDltPrincipalEntityId',
        'indiaDltTelemarketerId' => 'indiaDltTelemarketerId',
        'intermediateReport' => 'intermediateReport',
        'languageCode' => 'languageCode',
        'notifyContentType' => 'notifyContentType',
        'notifyUrl' => 'notifyUrl',
        'password' => 'password',
        'processKey' => 'processKey',
        'sendAt' => 'sendAt',
        'southKoreaResellerCode' => 'southKoreaResellerCode',
        'text' => 'text',
        'to' => 'to',
        'track' => 'track',
        'trackingType' => 'trackingType',
        'transliteration' => 'transliteration',
        'turkeyIysBrandCode' => 'turkeyIysBrandCode',
        'turkeyIysRecipientType' => 'turkeyIysRecipientType',
        'username' => 'username',
        'validityPeriod' => 'validityPeriod',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'callbackData' => [
        'minLength' => 0,
        'maxLength' => 4000,
    ],
    'southKoreaResellerCode' => [
        'format' => 'int32',
    ],
    'to' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'turkeyIysBrandCode' => [
        'format' => 'int32',
    ],
];

    public ?string $bulkId;
    public ?string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    public ?bool $flash;
    public ?string $from;
    public ?string $indiaDltContentTemplateId;
    public ?string $indiaDltPrincipalEntityId;
    public ?string $indiaDltTelemarketerId;
    public ?bool $intermediateReport;
    public ?string $languageCode;
    public ?string $notifyContentType;
    public ?string $notifyUrl;
    public string $password;
    public ?string $processKey;
    public ?string $sendAt;
    public ?int $southKoreaResellerCode {
        set {
            $this->assigning('southKoreaResellerCode', $value);
            $this->southKoreaResellerCode = $value;
        }
    }
    public ?string $text;
    /** @var list<string> */
    public array $to;
    public ?string $track;
    public ?string $trackingType;
    public ?string $transliteration;
    public ?int $turkeyIysBrandCode {
        set {
            $this->assigning('turkeyIysBrandCode', $value);
            $this->turkeyIysBrandCode = $value;
        }
    }
    public ?string $turkeyIysRecipientType;
    public string $username;
    public ?int $validityPeriod;
}
