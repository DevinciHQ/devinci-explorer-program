Feature: url-arg
Scenario:
Given I am on "/url-arg/?age=20"
Then I should see "20 years old"
Scenario:
Given I am on "/url-arg/?age=20&sport=basketball"
Then I should see "and you still play basketball!"
Scenario:
Given I am on "/url-arg/?sport=tennis"
Then I should not see "old"
