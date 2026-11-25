<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfUpdateCompaniesBody;

final class CompaniesBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of companies.
     */
    public \InfobipSDK\Collections\AllOfUpdateCompaniesBody\CompaniesBodyCompaniesCollection $companies;
}
