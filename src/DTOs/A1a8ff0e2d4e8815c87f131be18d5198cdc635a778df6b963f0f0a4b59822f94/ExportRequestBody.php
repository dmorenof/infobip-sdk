<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A1a8ff0e2d4e8815c87f131be18d5198cdc635a778df6b963f0f0a4b59822f94;

/**
 * ExportRequestBody
 */
final class ExportRequestBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bucket',
        'endTime',
        'region',
        'roleArn',
        'startTime',
    ];

    protected const array VALIDATION = [
        'definitionIdList' => [
            'maxItems' => 200,
            'uniqueItems' => true,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'bucket',
        'definitionIdList',
        'directoryPath',
        'endTime',
        'enrichWithMomentsInfo',
        'region',
        'roleArn',
        'startTime',
    ];

    /**
     * AWS S3 bucket name. Must only contain safe characters, as defined in [AWS documentation](https://docs.aws.amazon.com/AmazonS3/latest/userguide/object-keys.html).
     */
    public string $bucket;
    /**
     * An optional list of `definitionId`s to use as a whitelist filter for exported events. Accepted format: `["definitionId", "definitionId"]`, e.g. `["formSubmitted", "sms*"]`. A wildcard character '*' may be used to match any number of characters in the `definitionId`. A list of all valid `definitionId`s can be obtained from the [Get list of event definitions](https://www.infobip.com/docs/api#customer-engagement/people/get-events-definitions-for-export) endpoint. The total number of matched `definitionId`s, after wildcard expansion, may not exceed 200. To export all events without filtering, do not specify a `definitionIdList`.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $definitionIdList {
        set {
            $this->assigning('definitionIdList', $value);
            $this->definitionIdList = $value;
        }
    }
    /**
     * AWS S3 directory path. Use `directory/` or a nested directory path `dir1/dir2/directory/`. Must only contain safe characters or an equal sign, as defined in [AWS documentation](https://docs.aws.amazon.com/AmazonS3/latest/userguide/object-keys.html).
     */
    public string $directoryPath;
    /**
     * End time of the export query. Accepted format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g. `2022-03-01T01:00:00.000+0000`. Must be earlier than the current time, and later than `startTime`. `startTime` and `endTime` must be at most 24 hours apart.
     */
    public string $endTime;
    /**
     * If set to `true`, additional information, namely the campaign name, Flow's element name (if applicable), and the campaign start date and time are added to all existing events related to Moments. Defaults to `false`.
     */
    public bool $enrichWithMomentsInfo;
    /**
     * AWS S3 client region.
     */
    public string $region;
    /**
     * AWS role ARN for accessing S3 bucket. Accepted format: `arn:aws:iam::account:role/role-name-with-path`. Must apply character rules as referenced in [AWS documentation](https://docs.aws.amazon.com/IAM/latest/UserGuide/reference_iam-quotas.html).
     */
    public string $roleArn;
    /**
     * Start time of the export query. Accepted format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g. `2022-03-01T01:00:00.000+0000`. Must be earlier than the current time and `endTime`, but no more than 1 year ago. `startTime` and `endTime` must be at most 24 hours apart.
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bucket' => is_string($value) ? $this->bucket = $value : parent::assignMember($name, $value),
            'definitionIdList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->definitionIdList = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'directoryPath' => is_string($value) ? $this->directoryPath = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'enrichWithMomentsInfo' => is_bool($value) ? $this->enrichWithMomentsInfo = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'roleArn' => is_string($value) ? $this->roleArn = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
