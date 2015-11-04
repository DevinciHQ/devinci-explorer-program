Feature: link
  Scenario:
    Given I am on "/link"
    When I follow "Go to Link 2"
    Then I should see "link2"
  Scenario:
    Given I am on "/link"
    When I follow "Go to Link 3"
    Then I should not see "link4"
  Scenario:
    Given I am on "/link"
    When I follow "Go to Link 4"
    And I move backward one page
    Then I should be on "/link/"
    When I move forward one page
    Then I should be on "/link/link4/"
 
