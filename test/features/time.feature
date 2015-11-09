Feature: time
  Scenario:
    Given I am on "time"
    Then I should see "Mon, 09 Nov 2015"
  Scenario:
    Given I am on "/time"
    And the current date should match
    And the date should match with plus 4 weeks
    And the date should match with minus 4 weeks
