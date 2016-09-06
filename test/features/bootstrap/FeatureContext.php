<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

      // call currentDate() to fetch and format the date (month year)
    public function getCurrentDate() {
        return $this->currentdate = $this->currentDate()->format('D F Y');
    }

// Get current date time
    protected function currentDate() {
        return new DateTime();
    }

// date matcher does not take any arguments
    public function MonthYearDateMatcher()
    {
        $this->assertSession()->pageTextContains($this->fixStepArgument($this->getCurrentDate()));
    }
}
