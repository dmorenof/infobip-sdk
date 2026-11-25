<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows;

final class ByFlowId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'flowId',
        'sender',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'flowId' => 'flowId',
            'sender' => 'sender',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'sender' => [
            'minLength' => 1,
        ],
    ];

    public string $flowId;
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
}
