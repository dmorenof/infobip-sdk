<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Platform\Resource1;

final class Blocklists extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'accountKey' => 'accountKey',
            'campaign' => 'campaign',
            'channel' => 'channel',
            'createdDateFrom' => 'createdDateFrom',
            'createdDateTo' => 'createdDateTo',
            'destination' => 'destination',
            'getAllAccountKeysBlocklists' => 'getAllAccountKeysBlocklists',
            'page' => 'page',
            'sender' => 'sender',
            'size' => 'size',
            'sourceType' => 'sourceType',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'campaign' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'destination' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'page' => [
            'minimum' => 0,
        ],
        'sender' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 1000,
        ],
    ];

    public ?string $accountKey;
    public ?string $campaign {
        set {
            $this->assigning('campaign', $value);
            $this->campaign = $value;
        }
    }
    public ?\InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\ViewableChannel $channel;
    public ?string $createdDateFrom;
    public ?string $createdDateTo;
    public ?string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
        }
    }
    public ?bool $getAllAccountKeysBlocklists;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?\InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\SourceType $sourceType;
}
