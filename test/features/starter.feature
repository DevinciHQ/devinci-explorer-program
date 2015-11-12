@api
Feature: Starter
  In order to test my code
  As an explorer
  I need to be able to start with a working test.

  Scenario:
    Given I am on the homepage
    Then I should see "Site-Install"

  Scenario:
    Given I am logged in as a user with the "authenticated user" role

  Scenario:
    Given users:
      | name   | mail             | roles               |
      | Joe    | joe@example.com  | authenticated user  |
    Given I am logged in as "Joe"