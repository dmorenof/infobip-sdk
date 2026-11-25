<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512;

final class AnyOfReferralMedia extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\ReferralMediaImage::class, \InfobipSDK\DTOs\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\ReferralMediaVideo::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaImage',
        ],
        [
            'kind' => 'reference',
            'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaVideo',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.MediaType' => [
            'kind' => 'string',
            'enum' => [
                'IMAGE',
                'VIDEO',
            ],
        ],
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaImage' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.MediaType',
                ],
                'url' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'url',
            ],
        ],
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaVideo' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.MediaType',
                ],
                'url' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'url',
            ],
        ],
    ];
    protected const string DISCRIMINATOR_PROPERTY = 'type';
    protected const array DISCRIMINATOR_MAPPING = [
        'IMAGE' => 'InfobipSDK\\DTOs\\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\\ReferralMediaImage',
        'VIDEO' => 'InfobipSDK\\DTOs\\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\\ReferralMediaVideo',
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaImage' => 'InfobipSDK\\DTOs\\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\\ReferralMediaImage',
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaVideo' => 'InfobipSDK\\DTOs\\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\\ReferralMediaVideo',
    ];
}
