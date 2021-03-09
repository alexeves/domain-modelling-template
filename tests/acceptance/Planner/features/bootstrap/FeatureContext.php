<?php

namespace Tests\Acceptance\Planner\features\bootstrap;

use App\Planner\Service\PlannerService;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private PlannerService $plannerService;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(PlannerService $plannerService)
    {
        $this->plannerService = $plannerService;
    }

    /**
     * @Given there is a service with a dependency
     */
    public function thereIsAServiceWithADependency()
    {

    }
}
