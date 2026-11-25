<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Context\Resource1\Memories\Person;

final class ByPersonId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'direction' => 'direction',
            'orderBy' => 'orderBy',
            'page' => 'page',
            'size' => 'size',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 50,
            'format' => 'int32',
        ],
    ];

    public ?\InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\Direction $direction;
    public ?\InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemorySortField $orderBy;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
