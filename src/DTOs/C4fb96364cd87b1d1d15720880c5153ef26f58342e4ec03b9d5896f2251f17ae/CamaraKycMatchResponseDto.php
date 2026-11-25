<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraKycMatchResponseDto
 *
 * Camara Know Your Customer Match response object
 */
final class CamaraKycMatchResponseDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'addressMatchScore' => [
        'format' => 'int32',
    ],
    'emailMatchScore' => [
        'format' => 'int32',
    ],
    'familyNameAtBirthMatchScore' => [
        'format' => 'int32',
    ],
    'familyNameMatchScore' => [
        'format' => 'int32',
    ],
    'givenNameMatchScore' => [
        'format' => 'int32',
    ],
    'localityMatchScore' => [
        'format' => 'int32',
    ],
    'middleNamesMatchScore' => [
        'format' => 'int32',
    ],
    'nameKanaHankakuMatchScore' => [
        'format' => 'int32',
    ],
    'nameKanaZenkakuMatchScore' => [
        'format' => 'int32',
    ],
    'nameMatchScore' => [
        'format' => 'int32',
    ],
    'regionMatchScore' => [
        'format' => 'int32',
    ],
    'streetNameMatchScore' => [
        'format' => 'int32',
    ],
    'streetNumberMatchScore' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $addressMatch;
    /**
     * Format: int32
     */
    public int $addressMatchScore {
        set {
            $this->assigning('addressMatchScore', $value);
            $this->addressMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $birthdateMatch;
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $countryMatch;
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $emailMatch;
    /**
     * Format: int32
     */
    public int $emailMatchScore {
        set {
            $this->assigning('emailMatchScore', $value);
            $this->emailMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $familyNameAtBirthMatch;
    /**
     * Format: int32
     */
    public int $familyNameAtBirthMatchScore {
        set {
            $this->assigning('familyNameAtBirthMatchScore', $value);
            $this->familyNameAtBirthMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $familyNameMatch;
    /**
     * Format: int32
     */
    public int $familyNameMatchScore {
        set {
            $this->assigning('familyNameMatchScore', $value);
            $this->familyNameMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $genderMatch;
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $givenNameMatch;
    /**
     * Format: int32
     */
    public int $givenNameMatchScore {
        set {
            $this->assigning('givenNameMatchScore', $value);
            $this->givenNameMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $houseNumberExtensionMatch;
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $idDocumentMatch;
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $localityMatch;
    /**
     * Format: int32
     */
    public int $localityMatchScore {
        set {
            $this->assigning('localityMatchScore', $value);
            $this->localityMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $middleNamesMatch;
    /**
     * Format: int32
     */
    public int $middleNamesMatchScore {
        set {
            $this->assigning('middleNamesMatchScore', $value);
            $this->middleNamesMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $nameKanaHankakuMatch;
    /**
     * Format: int32
     */
    public int $nameKanaHankakuMatchScore {
        set {
            $this->assigning('nameKanaHankakuMatchScore', $value);
            $this->nameKanaHankakuMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $nameKanaZenkakuMatch;
    /**
     * Format: int32
     */
    public int $nameKanaZenkakuMatchScore {
        set {
            $this->assigning('nameKanaZenkakuMatchScore', $value);
            $this->nameKanaZenkakuMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $nameMatch;
    /**
     * Format: int32
     */
    public int $nameMatchScore {
        set {
            $this->assigning('nameMatchScore', $value);
            $this->nameMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $postalCodeMatch;
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $regionMatch;
    /**
     * Format: int32
     */
    public int $regionMatchScore {
        set {
            $this->assigning('regionMatchScore', $value);
            $this->regionMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $streetNameMatch;
    /**
     * Format: int32
     */
    public int $streetNameMatchScore {
        set {
            $this->assigning('streetNameMatchScore', $value);
            $this->streetNameMatchScore = $value;
        }
    }
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult $streetNumberMatch;
    /**
     * Format: int32
     */
    public int $streetNumberMatchScore {
        set {
            $this->assigning('streetNumberMatchScore', $value);
            $this->streetNumberMatchScore = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'addressMatch' => is_string($value) ? $this->addressMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'addressMatchScore' => is_int($value) ? $this->addressMatchScore = $value : parent::assignMember($name, $value),
            'birthdateMatch' => is_string($value) ? $this->birthdateMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'countryMatch' => is_string($value) ? $this->countryMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'emailMatch' => is_string($value) ? $this->emailMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'emailMatchScore' => is_int($value) ? $this->emailMatchScore = $value : parent::assignMember($name, $value),
            'familyNameAtBirthMatch' => is_string($value) ? $this->familyNameAtBirthMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'familyNameAtBirthMatchScore' => is_int($value) ? $this->familyNameAtBirthMatchScore = $value : parent::assignMember($name, $value),
            'familyNameMatch' => is_string($value) ? $this->familyNameMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'familyNameMatchScore' => is_int($value) ? $this->familyNameMatchScore = $value : parent::assignMember($name, $value),
            'genderMatch' => is_string($value) ? $this->genderMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'givenNameMatch' => is_string($value) ? $this->givenNameMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'givenNameMatchScore' => is_int($value) ? $this->givenNameMatchScore = $value : parent::assignMember($name, $value),
            'houseNumberExtensionMatch' => is_string($value) ? $this->houseNumberExtensionMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'idDocumentMatch' => is_string($value) ? $this->idDocumentMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'localityMatch' => is_string($value) ? $this->localityMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'localityMatchScore' => is_int($value) ? $this->localityMatchScore = $value : parent::assignMember($name, $value),
            'middleNamesMatch' => is_string($value) ? $this->middleNamesMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'middleNamesMatchScore' => is_int($value) ? $this->middleNamesMatchScore = $value : parent::assignMember($name, $value),
            'nameKanaHankakuMatch' => is_string($value) ? $this->nameKanaHankakuMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'nameKanaHankakuMatchScore' => is_int($value) ? $this->nameKanaHankakuMatchScore = $value : parent::assignMember($name, $value),
            'nameKanaZenkakuMatch' => is_string($value) ? $this->nameKanaZenkakuMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'nameKanaZenkakuMatchScore' => is_int($value) ? $this->nameKanaZenkakuMatchScore = $value : parent::assignMember($name, $value),
            'nameMatch' => is_string($value) ? $this->nameMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'nameMatchScore' => is_int($value) ? $this->nameMatchScore = $value : parent::assignMember($name, $value),
            'postalCodeMatch' => is_string($value) ? $this->postalCodeMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'regionMatch' => is_string($value) ? $this->regionMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'regionMatchScore' => is_int($value) ? $this->regionMatchScore = $value : parent::assignMember($name, $value),
            'streetNameMatch' => is_string($value) ? $this->streetNameMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'streetNameMatchScore' => is_int($value) ? $this->streetNameMatchScore = $value : parent::assignMember($name, $value),
            'streetNumberMatch' => is_string($value) ? $this->streetNumberMatch = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\MatchResult::from($value) : parent::assignMember($name, $value),
            'streetNumberMatchScore' => is_int($value) ? $this->streetNumberMatchScore = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
