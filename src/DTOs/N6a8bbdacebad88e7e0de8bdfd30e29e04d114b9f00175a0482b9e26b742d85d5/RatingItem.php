<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * RatingItem
 *
 * Rating items for each rate level. Must contain exactly 3 or 5 items depending on chosen option (one for each rate level).
 */
final class RatingItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'rate',
        'thanks',
        'title',
    ];

    protected const array VALIDATION = [
        'answers' => [
            'minItems' => 1,
            'maxItems' => 5,
        ],
        'description' => [
            'minLength' => 1,
            'maxLength' => 200,
        ],
        'question' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'rate' => [
            'pattern' => '^[1-5]$',
        ],
        'thanks' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'title' => [
            'minLength' => 1,
            'maxLength' => 50,
        ],
    ];

    /**
     * Optional list of predefined answers.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\RatingItem\AnswersCollection $answers {
        set {
            $this->assigning('answers', $value);
            $this->answers = $value;
        }
    }
    /**
     * Rating description.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Optional question to ask.
     */
    public string $question {
        set {
            $this->assigning('question', $value);
            $this->question = $value;
        }
    }
    /**
     * Rate level.
     */
    public string $rate {
        set {
            $this->assigning('rate', $value);
            $this->rate = $value;
        }
    }
    /**
     * Thank you message.
     */
    public string $thanks {
        set {
            $this->assigning('thanks', $value);
            $this->thanks = $value;
        }
    }
    /**
     * Rating title.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->answers = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\RatingItem\AnswersCollection($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'question' => is_string($value) ? $this->question = $value : parent::assignMember($name, $value),
            'rate' => is_string($value) ? $this->rate = $value : parent::assignMember($name, $value),
            'thanks' => is_string($value) ? $this->thanks = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
