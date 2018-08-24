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
     * @When I hit the :endpoint endpoint
     */
    public function iHitTheEndpoint($endpoint)
    {
        $this->response = $this->request('GET', $endpoint);
    }

    /**
     * @Then I should get a response with a :responseStatus status
     */
    public function iShouldGetAResponseWithAStatus($responseStatus)
    {
        Assert::assertEquals($responseStatus, $this->response->getStatusCode());
    }
}
