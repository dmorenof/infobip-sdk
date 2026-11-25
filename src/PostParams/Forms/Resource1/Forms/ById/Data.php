<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Forms\Resource1\Forms\ById;

final class Data extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'ib-submission-form-campaign' => 'ibSubmissionFormCampaign',
            'ib-submission-source' => 'ibSubmissionSource',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'ib-submission-form-campaign' => 'ibSubmissionFormCampaign',
        'ib-submission-source' => 'ibSubmissionSource',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'ibSubmissionFormCampaign' => 'ib-submission-form-campaign',
        'ibSubmissionSource' => 'ib-submission-source',
    ];

    public const bool OPERATION_BODY = true;

    public ?string $ibSubmissionFormCampaign;
    public ?string $ibSubmissionSource;
    public \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormDataPayloadMap $body;
}
