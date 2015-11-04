Feature: html  
  Scenario:
    Given I am on "/html"
    Then I should see a "div" element
  Scenario:
    Given I am on "/html"
    Then I should see "This is" in the "p" element
  Scenario:
    Given I am on "/html"
    Then I should see "" in the "div" element
  Scenario:
    Given I am on "/html"
    Then I should see " " in the "div" element
  Scenario:
    Given I am on "/html"
    Then I should not see "e" in the "div" element
  Scenario:
    Given I am on "/html"
    Then I should not see "4" in the "div" element
    And should not see "3" in the "div" element
    And should see "2" in the "div" element
