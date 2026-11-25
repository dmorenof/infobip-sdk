<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Whatsapp\Resource1;

final class Templates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'category' => 'category',
        'entityId' => 'entityId',
        'language' => 'language',
        'name' => 'name',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'sender' => 'sender',
        'size' => 'size',
        'status' => 'status',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'category' => [
        'uniqueItems' => true,
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'AUTHENTICATION',
                    'MARKETING',
                    'UTILITY',
                ],
            ],
        ],
    ],
    'language' => [
        'uniqueItems' => true,
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'af',
                    'ar',
                    'ar_AE',
                    'ar_EG',
                    'ar_LB',
                    'ar_MA',
                    'ar_QA',
                    'az',
                    'bg',
                    'bn',
                    'bn_IN',
                    'ca',
                    'cs',
                    'da',
                    'de',
                    'de_AT',
                    'de_CH',
                    'el',
                    'en',
                    'en_AE',
                    'en_AU',
                    'en_CA',
                    'en_GB',
                    'en_GH',
                    'en_IE',
                    'en_IN',
                    'en_JM',
                    'en_MY',
                    'en_NZ',
                    'en_QA',
                    'en_SG',
                    'en_UG',
                    'en_US',
                    'en_ZA',
                    'es',
                    'es_AR',
                    'es_CL',
                    'es_CO',
                    'es_CR',
                    'es_DO',
                    'es_EC',
                    'es_ES',
                    'es_HN',
                    'es_MX',
                    'es_PA',
                    'es_PE',
                    'es_UY',
                    'et',
                    'fa',
                    'fi',
                    'fil',
                    'fr',
                    'fr_BE',
                    'fr_CA',
                    'fr_CH',
                    'fr_CI',
                    'fr_MA',
                    'ga',
                    'gu',
                    'ha',
                    'he',
                    'hi',
                    'hr',
                    'hu',
                    'id',
                    'it',
                    'ja',
                    'ka',
                    'kk',
                    'kn',
                    'ko',
                    'ky_KG',
                    'lo',
                    'lt',
                    'lv',
                    'mk',
                    'ml',
                    'mr',
                    'ms',
                    'nb',
                    'nl',
                    'nl_BE',
                    'pa',
                    'pl',
                    'pt_BR',
                    'pt_PT',
                    'ro',
                    'ru',
                    'rw_RW',
                    'si_LK',
                    'sk',
                    'sl',
                    'sq',
                    'sr',
                    'sv',
                    'sw',
                    'ta',
                    'te',
                    'th',
                    'tr',
                    'uk',
                    'unknown',
                    'ur',
                    'uz',
                    'vi',
                    'zh_CN',
                    'zh_HK',
                    'zh_TW',
                    'zu',
                ],
            ],
        ],
    ],
    'page' => [
        'format' => 'int32',
    ],
    'sender' => [
        'uniqueItems' => true,
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
    'status' => [
        'uniqueItems' => true,
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'APPROVED',
                    'ARCHIVED',
                    'DELETED',
                    'DISABLED',
                    'FIRST_PAUSED',
                    'FLAGGED',
                    'IN_APPEAL',
                    'PENDING',
                    'PENDING_DELETION',
                    'REINSTATED',
                    'REJECTED',
                    'SECOND_PAUSED',
                    'UNKNOWN',
                ],
            ],
        ],
    ],
];

    public ?string $applicationId;
    /** @var list<string>|null */
    public ?array $category;
    public ?string $entityId;
    /** @var list<string>|null */
    public ?array $language;
    public ?string $name;
    public ?string $orderBy;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $sender;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $status;
}
