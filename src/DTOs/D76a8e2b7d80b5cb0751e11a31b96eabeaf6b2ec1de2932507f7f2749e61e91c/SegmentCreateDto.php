<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * SegmentCreateDto
 */
final class SegmentCreateDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    /**
     * Segment description.
     * Example: "Persons named Alex with tag \"VIP Client\""
     */
    public string $description;
    /**
     * List of events that persons should match.
     */
    public \InfobipSDK\Collections\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentCreateDto\EventsCollection $events;
    /**
     * A unique segment name.
     * Example: "VIP Alex Clients"
     */
    public string $name;
    /**
     *
     * Allows to filter persons using simple queries.
     *
     * ##### Supported logical operators
     *
     * <table>
     *     <thead>
     *         <tr>
     *             <th>Operator</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#and</code></td>
     *         <td>All records that match the conditions of all clauses.</td>
     *         <td><code>{"#and":[{"firstName":"John"},{"lastName":"Smith"}]}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#or</code></td>
     *         <td>All records that match the conditions of any clause.</td>
     *         <td><code>{"#or":[{"firstName":"John"},{"firstName":"Jane"}]}</code></td>
     *     </tr>
     * </table>
     *
     * ##### Supported comparison operators
     *
     * <table>
     *     <thead>
     *         <tr>
     *             <th>Attributes</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#notExist</code></td>
     *         <td>Matches records that do not have given attribute.</td>
     *         <td><code>{"#notExist":"firstName"}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#exists</code></td>
     *         <td>Matches records that have given attribute.</td>
     *         <td><code>{"#exists":"firstName"}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Strings</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#eq</code></td>
     *         <td>Equals to a specified string.</td>
     *         <td><code>{"firstName":"John"}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#ne</code></td>
     *         <td>Not equal to a specified string.</td>
     *         <td><code>{"#ne":{"firstName":"John"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#startsWith</code></td>
     *         <td>Starts with a specified string.</td>
     *         <td><code>{"#startsWith":{"firstName":"John"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#endsWith</code></td>
     *         <td>Ends with a specified string.</td>
     *         <td><code>{"#endsWith":{"firstName":"John"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#contains</code></td>
     *         <td>Contains a specified string.</td>
     *         <td><code>{"#contains":{"firstName":"oh"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#notContain</code></td>
     *         <td>Does not contain a specified string.</td>
     *         <td><code>{"#notContain":{"firstName":"oh"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#in</code></td>
     *         <td>At least one of the strings in a list.</td>
     *         <td><code>{"#in":{"firstName":["John","Jane"]}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#notIn</code></td>
     *         <td>Not any of the strings in a list.</td>
     *         <td><code>{"#notIn":{"firstName":["John","Jane"]}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Dates</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#eq</code></td>
     *         <td>Equals to a specified date.</td>
     *         <td><code>{"birthDate":"1987-07-10"}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#ne</code></td>
     *         <td>Not equal to a specified date.</td>
     *         <td><code>{"#ne":{"birthDate":"1987-07-10"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#eq (relative)</code></td>
     *         <td>Will be in specified interval.</td>
     *         <td><code>{"#eq":{"birthDate":{"#relNow":"P1D"}}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lt (relative)</code></td>
     *         <td>Will be within a specified interval.</td>
     *         <td><code>{"#lt":{"birthDate":{"#relNow":"P1D"}}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gt (relative)</code></td>
     *         <td>Will be in more than a specified interval.</td>
     *         <td><code>{"#gt":{"birthDate":{"#relNow":"P1D"}}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#eq (relative) -</code></td>
     *         <td>Was a specified interval ago.</td>
     *         <td><code>{"#eq":{"birthDate":{"#relNow":"P-1D"}}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gt (relative) -</code></td>
     *         <td>Was within a specified interval ago.</td>
     *         <td><code>{"#gt":{"birthDate":{"#relNow":"P-1D"}}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gt (relative) -</code></td>
     *         <td>Was more than a specified interval ago.</td>
     *         <td><code>{"#gt":{"birthDate":{"#relNow":"P-1D"}}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lt</code></td>
     *         <td>Is before a specified date.</td>
     *         <td><code>{"#lt":{"birthDate":"1987-07-10"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lte</code></td>
     *         <td>Is before or equal to a specified date.</td>
     *         <td><code>{"#lte":{"birthDate":"1987-07-10"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gt</code></td>
     *         <td>Is after a specified date.</td>
     *         <td><code>{"#gt":{"birthDate":"1987-07-10"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gte</code></td>
     *         <td>Is after or equal to a specified date.</td>
     *         <td><code>{"#gte":{"birthDate":"1987-07-10"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#in</code></td>
     *         <td>Is equal to one of dates in a given list.</td>
     *         <td><code>{"#in":{"birthDate":["1987-07-10","1987-07-11"]}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#notIn</code></td>
     *         <td>Is not equal to any of dates in a given list.</td>
     *         <td><code>{"#notIn":{"birthDate":["1987-07-10","1987-07-11"]}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Integers</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#eq</code></td>
     *         <td>Equals to a specified integer.</td>
     *         <td><code>{"data\u0001counter":1}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#ne</code></td>
     *         <td>Not equal to a specified integer.</td>
     *         <td><code>{"#ne":{"data\u0001counter":1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lt</code></td>
     *         <td>Is less than a specified integer.</td>
     *         <td><code>{"#lt":{"data\u0001counter":1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lte</code></td>
     *         <td>Is less than or equal to a specified integer.</td>
     *         <td><code>{"#lte":{"data\u0001counter":1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gt</code></td>
     *         <td>Is greater than a specified integer.</td>
     *         <td><code>{"#gt":{"data\u0001counter":1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gte</code></td>
     *         <td>Is greater than or equal to a specified integer.</td>
     *         <td><code>{"#gte":{"data\u0001counter":1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#in</code></td>
     *         <td>Is equal to any of specified integers in a list.</td>
     *         <td><code>{"#in":{"data\u0001counter":[1,2,3]}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#notIn</code></td>
     *         <td>Is not equal to any of specified integers in a list.</td>
     *         <td><code>{"#notIn":{"data\u0001counter":[1,2,3]}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Decimals</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#eq</code></td>
     *         <td>Equals to a specified decimal.</td>
     *         <td><code>{"data\u0001price":1.1}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#ne</code></td>
     *         <td>Is not equal to a specified decimal.</td>
     *         <td><code>{"#ne":{"data\u0001price":1.1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lt</code></td>
     *         <td>Is less than a specified decimal.</td>
     *         <td><code>{"#lt":{"data\u0001price":1.1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#lte</code></td>
     *         <td>Is less than or equal to a specified decimal.</td>
     *         <td><code>{"#lte":{"data\u0001price":1.1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gt</code></td>
     *         <td>Is greater than a specified decimal.</td>
     *         <td><code>{"#gt":{"data\u0001price":1.1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#gte</code></td>
     *         <td>Is greater than or equal to a specified decimal.</td>
     *         <td><code>{"#gte":{"data\u0001price":1.1}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#in</code></td>
     *         <td>Is equal to any of specified decimals in a list.</td>
     *         <td><code>{"#in":{"data\u0001price":[1.1,2.1,3.0]}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#notIn</code></td>
     *         <td>Is not equal to any of specified decimals in a list.</td>
     *         <td><code>{"#notIn":{"data\u0001price":[1.1,2.1,3.0]}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Booleans</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#eq</code></td>
     *         <td>Equals to a specified boolean.</td>
     *         <td><code>{"data\u0001happy":true}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#ne</code></td>
     *         <td>Not equal to a specified boolean.</td>
     *         <td><code>{"#ne":{"data\u0001happy":true}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Tags</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#contains</code></td>
     *         <td>Contains a specified tag.</td>
     *         <td><code>{"#contains":{"tags":"SOME_TAG"}}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#notContain</code></td>
     *         <td>Does not contain a specified tag.</td>
     *         <td><code>{"#notContain":{"tags":"SOME_TAG"}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Gender</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#eq</code></td>
     *         <td>Equals a specified gender.</td>
     *         <td><code>{"gender":"MALE"}</code></td>
     *     </tr>
     *     <tr>
     *         <td><code>#ne</code></td>
     *         <td>Does not equal a specified gender.</td>
     *         <td><code>{"#ne":{"gender":"FEMALE"}}</code></td>
     *     </tr>
     *     <thead>
     *         <tr>
     *             <th>Lists</th>
     *             <th>Description</th>
     *             <th>Example</th>
     *         </tr>
     *     </thead>
     *     <tr>
     *         <td><code>#all</code></td>
     *         <td>All items in the list match.</td>
     *         <td><code>{"#all":{"data\u0001Cart":{"#and":[{"ProductName":"Laptop"},{"ProductPrice":2000}]}}}</code>
     *         </td>
     *     </tr>
     *     <tr>
     *         <td><code>#any</code></td>
     *         <td>Any item in the list match.</td>
     *         <td><code>{"#any":{"data\u0001Cart":{"#and":[{"ProductName":"Laptop"},{"ProductPrice":2000}]}}}</code>
     *         </td>
     *     </tr>
     * </table>
     *
     *
     * Example: {"#and":[{"firstName":"Alex"},{"#contains":{"tags":"VIP Client"}}]}
     */
    public \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentCreateDto\QueryMap $query;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->events = new \InfobipSDK\Collections\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentCreateDto\EventsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\EventClauseDto::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
