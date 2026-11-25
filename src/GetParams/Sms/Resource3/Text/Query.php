<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Sms\Resource3\Text;

final class Query extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'text',
        'to',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'bulkId' => 'bulkId',
            'callbackData' => 'callbackData',
            'flash' => 'flash',
            'from' => 'from',
            'includeSmsCountInResponse' => 'includeSmsCountInResponse',
            'indiaDltContentTemplateId' => 'indiaDltContentTemplateId',
            'indiaDltPrincipalEntityId' => 'indiaDltPrincipalEntityId',
            'indiaDltTelemarketerId' => 'indiaDltTelemarketerId',
            'intermediateReport' => 'intermediateReport',
            'languageCode' => 'languageCode',
            'notifyContentType' => 'notifyContentType',
            'notifyUrl' => 'notifyUrl',
            'sendAt' => 'sendAt',
            'southKoreaResellerCode' => 'southKoreaResellerCode',
            'southKoreaTitle' => 'southKoreaTitle',
            'text' => 'text',
            'to' => 'to',
            'trackingType' => 'trackingType',
            'trackingUrl' => 'trackingUrl',
            'transliteration' => 'transliteration',
            'turkeyIysBrandCode' => 'turkeyIysBrandCode',
            'turkeyIysRecipientType' => 'turkeyIysRecipientType',
            'validityPeriod' => 'validityPeriod',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'bulkId' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 4000,
        ],
        'southKoreaResellerCode' => [
            'format' => 'int32',
        ],
        'southKoreaTitle' => [
            'minLength' => 0,
            'maxLength' => 66,
        ],
        'text' => [
            'minLength' => 1,
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
        'validityPeriod' => [
            'format' => 'int32',
        ],
    ];

    public ?string $bulkId {
        set {
            $this->assigning('bulkId', $value);
            $this->bulkId = $value;
        }
    }
    public ?string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    public ?bool $flash;
    public ?string $from;
    public ?bool $includeSmsCountInResponse;
    public ?string $indiaDltContentTemplateId;
    public ?string $indiaDltPrincipalEntityId;
    public ?string $indiaDltTelemarketerId;
    public ?bool $intermediateReport;
    public ?string $languageCode;
    public ?string $notifyContentType;
    public ?string $notifyUrl;
    public ?string $sendAt;
    public ?int $southKoreaResellerCode {
        set {
            $this->assigning('southKoreaResellerCode', $value);
            $this->southKoreaResellerCode = $value;
        }
    }
    public ?string $southKoreaTitle {
        set {
            $this->assigning('southKoreaTitle', $value);
            $this->southKoreaTitle = $value;
        }
    }
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /** @var list<string> */
    public array $to;
    public ?string $trackingType;
    public ?string $trackingUrl;
    public ?string $transliteration;
    public ?int $turkeyIysBrandCode {
        set {
            $this->assigning('turkeyIysBrandCode', $value);
            $this->turkeyIysBrandCode = $value;
        }
    }
    public ?string $turkeyIysRecipientType;
    public ?int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
}
