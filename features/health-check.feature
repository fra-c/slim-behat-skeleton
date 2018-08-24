Feature: Healthcheck

  Scenario: Successful healthcheck
    When I hit the "/" endpoint
    Then I should get a response with a 200 status
