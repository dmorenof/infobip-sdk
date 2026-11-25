<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesItem;

final class CompaniesItemUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'accountManager' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'country' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'customerStage' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'industry' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'notes' => [
            'minLength' => 0,
            'maxLength' => 1023,
        ],
        'region' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'segment' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'vatNumber' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'createdAt',
        'id',
        'modifiedAt',
        'modifiedFrom',
        'origin',
    ];

    /**
     * Account manager.
     */
    public string $accountManager {
        set {
            $this->assigning('accountManager', $value);
            $this->accountManager = $value;
        }
    }
    /**
     * Country.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Date and time of creation. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $createdAt;
    /**
     * List of custom attributes for the company.
     */
    public \InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesItem\AllOfUpdate\AttributesMapRequest $customAttributes;
    /**
     * Customer stage.
     */
    public string $customerStage {
        set {
            $this->assigning('customerStage', $value);
            $this->customerStage = $value;
        }
    }
    /**
     * List of domains for the company.
     */
    public \InfobipSDK\Collections\StringCollection $domains;
    /**
     * Unique ID for a company from your or another external system, 256 characters max
     */
    public string $externalId;
    /**
     * Unique id of the entity.
     * Format: int64
     */
    public int $id;
    /**
     * Industry.
     */
    public string $industry {
        set {
            $this->assigning('industry', $value);
            $this->industry = $value;
        }
    }
    /**
     * Date and time of last modification. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $modifiedAt;
    /**
     * The information which describes the source of the last modification of record.
     */
    public \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin $modifiedFrom;
    /**
     * Company name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Notes.
     */
    public string $notes {
        set {
            $this->assigning('notes', $value);
            $this->notes = $value;
        }
    }
    /**
     * The information which describes the origin of the record.
     */
    public \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin $origin;
    /**
     * Region.
     */
    public string $region {
        set {
            $this->assigning('region', $value);
            $this->region = $value;
        }
    }
    /**
     * Segment.
     */
    public string $segment {
        set {
            $this->assigning('segment', $value);
            $this->segment = $value;
        }
    }
    /**
     * Company's service information.
     */
    public \InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesItem\AllOfUpdate\DataMapRequest $serviceData;
    /**
     * List of tags for the company.
     */
    public \InfobipSDK\Collections\StringCollection $tags;
    /**
     * VAT number.
     */
    public string $vatNumber {
        set {
            $this->assigning('vatNumber', $value);
            $this->vatNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountManager' => is_string($value) ? $this->accountManager = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'customerStage' => is_string($value) ? $this->customerStage = $value : parent::assignMember($name, $value),
            'domains' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->domains = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'industry' => is_string($value) ? $this->industry = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'modifiedFrom' => is_string($value) ? $this->modifiedFrom = \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'notes' => is_string($value) ? $this->notes = $value : parent::assignMember($name, $value),
            'origin' => is_string($value) ? $this->origin = \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin::from($value) : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'segment' => is_string($value) ? $this->segment = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'vatNumber' => is_string($value) ? $this->vatNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
