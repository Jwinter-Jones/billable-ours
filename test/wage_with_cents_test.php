
<?php
//hours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

    $this->setField("hours", "25");
		$this->setField("rate", "13.5");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You input 25 hours at a rate of $13.5 and your pay is $337.5");
	}

}
