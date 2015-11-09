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

    /**
    * @Then /^the current date should match/
    */
    public function dateMatch()
    {
    date_default_timezone_set("America/New_York");
    $date = date('r');
    $this->assertSession()->pageTextContains($date);
    }

     /**
     * @Transform /^(\d+)$/
     */
    public function castStringToNumber($string)
    {
        return intval($string);
    }

    /**
    * @Then /^the date should match with plus (\d+) weeks$/
    */
    public function dateMatchPlusWeeks($numWeeks)
    {
    date_default_timezone_set("America/New_York");
    $date = date('r', strtotime("+".$numWeeks." week"));
    $this->assertSession()->pageTextContains($date);
    }

    /**
    * @Then /^the date should match with minus (\d+) weeks$/
    */
    public function dateMatchMinusWeeks($numWeeks)
    {
    date_default_timezone_set("America/New_York");
    $date = date('r', strtotime("-".$numWeeks." week"));
    $this->assertSession()->pageTextContains($date);
    }
}
