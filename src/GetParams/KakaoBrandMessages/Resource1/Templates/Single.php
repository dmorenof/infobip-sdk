<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\KakaoBrandMessages\Resource1\Templates;

final class Single extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'templateCode',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'sender' => 'sender',
            'senderGroup' => 'senderGroup',
            'templateCode' => 'templateCode',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'sender' => [
            'minLength' => 1,
            'maxLength' => 40,
        ],
        'senderGroup' => [
            'minLength' => 1,
            'maxLength' => 40,
        ],
        'templateCode' => [
            'minLength' => 1,
            'maxLength' => 50,
        ],
    ];

    public ?string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public ?string $senderGroup {
        set {
            $this->assigning('senderGroup', $value);
            $this->senderGroup = $value;
        }
    }
    public string $templateCode {
        set {
            $this->assigning('templateCode', $value);
            $this->templateCode = $value;
        }
    }
}
