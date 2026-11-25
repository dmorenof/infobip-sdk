<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier;

final class Permissions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'sender',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'identifier' => 'identifier',
        'sender' => 'sender',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'identifier' => [
        'pattern' => '^([0-9]{1,15}|[A-Z]{2}\\..*)$',
    ],
    'sender' => [
        'minLength' => 1,
        'maxLength' => 15,
        'pattern' => '[0-9]+',
    ],
];

    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
}
