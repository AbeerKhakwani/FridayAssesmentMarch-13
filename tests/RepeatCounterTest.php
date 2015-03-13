<?php
   require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_Repeat_Counter()
        {   //Arrange
            $test_RepeatCounter= new RepeatCounter;
            $input1 = "A";
            $input2 = "A";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1,$input2);
            //Assert
            $this->assertEquals(1,$result);
        }

    }
?>
