Feature: urlinput
  Scenario:
    Given I am on "/urlinput/?age=20"
    Then I should see "20 years old"
  Scenario:
    Given I am on "/urlinput/?age=20&sport=basketball"
    Then I should see "and you still play basketball!"
  Scenario:
    Given I am on "/urlinput/?sport=tennis"
    Then I should not see "old"
