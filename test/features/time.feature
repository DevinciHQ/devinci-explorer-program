Feature: time
   Scenario:
     Given I am on "/time"
     Then the current date should match
   Scenario:
     Given I am on "/time"
     Then the date should match with plus 4 weeks
   Scenario:
     Given I am on "/time"
     And the date should match with minus 4 weeks
