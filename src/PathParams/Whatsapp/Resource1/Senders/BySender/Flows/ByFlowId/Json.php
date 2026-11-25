<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Json extends \Dmorenof\SdkRuntime\DTO
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
        'flowId' => [
            'minLength' => 1,
        ],
        'sender' => [
            'minLength' => 1,
        ],
    ];

    public string $flowId {
        set {
            $this->assigning('flowId', $value);
            $this->flowId = $value;
        }
    }
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
}
