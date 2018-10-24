<?php

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;
use Slim\Http\Response;

class HealthCheckContext implements Context
{
    use AppTrait;

    /** @var Response */
    private $response;

    /**
     * @When I check the health of the service
     */
    public function iCheckTheHealthOfTheService()
    {
        $this->response = $this->request('GET', '/');
    }

    /**
     * @Then the service should be healthy
     */
    public function theServiceShouldBeHealthy()
    {
        Assert::assertEquals(200, $this->response->getStatusCode());
    }
}
