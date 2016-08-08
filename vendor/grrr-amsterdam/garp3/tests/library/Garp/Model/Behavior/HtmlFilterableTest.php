<?php
/**
 * Garp_Model_Behavior_HtmlFilterableTest
 *
 * @author Harmen Janssen <harmen@grrr.nl>
 */
class Garp_Model_Behavior_HtmlFilterableTest extends Garp_Test_PHPUnit_TestCase {

    /**
     * @test
     */
    public function should_filter_non_existent_tags() {
        $filterable = new Garp_Model_Behavior_HtmlFilterable(array());

        $test = '<banana>This tag does not exist</banana>';
        $this->assertEquals('This tag does not exist', $filterable->filter($test));
    }

}
