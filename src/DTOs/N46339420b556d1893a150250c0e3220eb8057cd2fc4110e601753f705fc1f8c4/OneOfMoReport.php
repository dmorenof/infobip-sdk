<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4;

final class OneOfMoReport extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\InboundMessageData::class, \InfobipSDK\DTOs\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece\MoReport::class, \InfobipSDK\DTOs\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.InboundMessageData',
        ],
        [
            'kind' => 'reference',
            'ref' => '477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece.MoReport',
        ],
        [
            'kind' => 'reference',
            'ref' => '46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4.SimpleReport',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '033803db88cada38464c4e86c919c67cee20aa369072ec632b1c62ea0cc27514.ReferredProduct' => [
            'kind' => 'object',
            'properties' => [
                'catalogId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                    ],
                ],
                'productRetailerId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                    ],
                ],
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.ContactName' => [
            'kind' => 'object',
            'properties' => [
                'name' => [
                    'kind' => 'string',
                ],
                'parentUserId' => [
                    'kind' => 'string',
                ],
                'phoneNumber' => [
                    'kind' => 'string',
                ],
                'userId' => [
                    'kind' => 'string',
                ],
                'username' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'name',
                'parentUserId',
                'phoneNumber',
                'userId',
                'username',
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Context' => [
            'kind' => 'object',
            'properties' => [
                'from' => [
                    'kind' => 'string',
                ],
                'id' => [
                    'kind' => 'string',
                ],
                'referredProduct' => [
                    'kind' => 'reference',
                    'ref' => '033803db88cada38464c4e86c919c67cee20aa369072ec632b1c62ea0cc27514.ReferredProduct',
                ],
            ],
            'writeOnly' => [
                'from',
                'id',
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Identity' => [
            'kind' => 'object',
            'properties' => [
                'acknowledged' => [
                    'kind' => 'boolean',
                ],
                'createdAt' => [
                    'kind' => 'string',
                ],
                'hash' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'acknowledged',
                'createdAt',
                'hash',
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.InboundMessage' => [
            'kind' => 'object',
            'properties' => [
                'context' => [
                    'kind' => 'reference',
                    'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Context',
                ],
                'identity' => [
                    'kind' => 'reference',
                    'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Identity',
                ],
                'referral' => [
                    'kind' => 'reference',
                    'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Referral',
                ],
                'type' => [
                    'kind' => 'reference',
                    'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Type',
                ],
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.InboundMessageBase' => [
            'kind' => 'object',
            'properties' => [
                'from' => [
                    'kind' => 'string',
                ],
                'messageId' => [
                    'kind' => 'string',
                ],
                'price' => [
                    'kind' => 'reference',
                    'ref' => '3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8.Price',
                ],
                'receivedAt' => [
                    'kind' => 'string',
                ],
                'to' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'from',
                'messageId',
                'price',
                'receivedAt',
                'to',
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.InboundMessageData' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.InboundMessageBase',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'contact' => [
                            'kind' => 'reference',
                            'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.ContactName',
                        ],
                        'message' => [
                            'kind' => 'reference',
                            'ref' => '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.InboundMessage',
                        ],
                    ],
                    'writeOnly' => [
                        'contact',
                    ],
                ],
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Referral' => [
            'kind' => 'object',
            'properties' => [
                'body' => [
                    'kind' => 'string',
                ],
                'ctwaClickId' => [
                    'kind' => 'string',
                ],
                'headline' => [
                    'kind' => 'string',
                ],
                'referralMedia' => [
                    'kind' => 'reference',
                    'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMedia',
                ],
                'sourceId' => [
                    'kind' => 'string',
                ],
                'sourceType' => [
                    'kind' => 'string',
                    'enum' => [
                        'AD',
                        'POST',
                        'UNKNOWN',
                    ],
                ],
                'sourceUrl' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'body',
                'ctwaClickId',
                'headline',
                'sourceId',
                'sourceType',
                'sourceUrl',
            ],
        ],
        '0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99.Type' => [
            'kind' => 'string',
            'enum' => [
                'AUDIO',
                'BUTTON',
                'CONTACT',
                'DOCUMENT',
                'IMAGE',
                'INTERACTIVE_BUTTON_REPLY',
                'INTERACTIVE_LIST_REPLY',
                'INTERACTIVE_PAYMENT_CONFIRMATION',
                'LOCATION',
                'ORDER',
                'STICKER',
                'TEXT',
                'UNSUPPORTED',
                'VIDEO',
                'VOICE',
            ],
        ],
        '32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9.IntegrationType' => [
            'kind' => 'object',
            'properties' => [
                'integrationType' => [
                    'kind' => 'string',
                    'enum' => [
                        'FACEBOOK',
                        'VIBER',
                        'WHATSAPP',
                    ],
                ],
            ],
            'writeOnly' => [
                'integrationType',
            ],
        ],
        '32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9.MoReportBase' => [
            'kind' => 'object',
            'properties' => [
                'callbackData' => [
                    'kind' => 'string',
                ],
                'from' => [
                    'kind' => 'string',
                ],
                'messageId' => [
                    'kind' => 'string',
                ],
                'pairedMessageId' => [
                    'kind' => 'string',
                ],
                'price' => [
                    'kind' => 'reference',
                    'ref' => '3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8.Price',
                ],
                'receivedAt' => [
                    'kind' => 'string',
                ],
                'to' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'callbackData',
                'from',
                'messageId',
                'pairedMessageId',
                'price',
                'receivedAt',
                'to',
            ],
        ],
        '3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8.Price' => [
            'kind' => 'object',
            'properties' => [
                'currency' => [
                    'kind' => 'string',
                ],
                'pricePerMessage' => [
                    'kind' => 'number',
                ],
            ],
            'writeOnly' => [
                'currency',
                'pricePerMessage',
            ],
        ],
        '450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38.IntegrationType' => [
            'kind' => 'object',
            'properties' => [
                'integrationType' => [
                    'kind' => 'string',
                    'enum' => [
                        'VIBER',
                    ],
                ],
            ],
            'writeOnly' => [
                'integrationType',
            ],
        ],
        '450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38.Type' => [
            'kind' => 'string',
            'enum' => [
                'FILE',
                'TEXT',
            ],
        ],
        '46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4.SimpleReport' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9.IntegrationType',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'message' => [
                            'kind' => 'object',
                            'properties' => [
                                'text' => [
                                    'kind' => 'string',
                                ],
                                'type' => [
                                    'kind' => 'string',
                                    'enum' => [
                                        'TEXT',
                                    ],
                                ],
                            ],
                            'writeOnly' => [
                                'text',
                                'type',
                            ],
                        ],
                    ],
                ],
                [
                    'kind' => 'reference',
                    'ref' => '32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9.MoReportBase',
                ],
            ],
        ],
        '477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece.MoMessage' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38.Type',
                ],
            ],
        ],
        '477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece.MoReport' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38.IntegrationType',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'message' => [
                            'kind' => 'reference',
                            'ref' => '477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece.MoMessage',
                        ],
                    ],
                    'writeOnly' => [
                        'message',
                    ],
                ],
                [
                    'kind' => 'reference',
                    'ref' => '32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9.MoReportBase',
                ],
            ],
        ],
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.MediaType' => [
            'kind' => 'string',
            'enum' => [
                'IMAGE',
                'VIDEO',
            ],
        ],
        'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMedia' => [
            'kind' => 'anyOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaImage',
                ],
                [
                    'kind' => 'reference',
                    'ref' => 'a4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512.ReferralMediaVideo',
                ],
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
}
