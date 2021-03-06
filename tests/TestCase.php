<?php

namespace BFilters\Tests;

use BFilters\Filter;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Request;
use Tests\CreatesApplication;

abstract class TestCase extends BaseTestCase
{
    public $filterCompleteCasesJson;
    public $filter;

    /**
     * @throws \JsonException
     */
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $request = \request();
        $request->merge(['filter' => $this->filterCompleteCasesJson]);
        $this->filter = new Filter($request);

    }

    use CreatesApplication;
}
