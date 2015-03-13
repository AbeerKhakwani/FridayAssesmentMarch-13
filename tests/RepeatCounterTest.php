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

        function test_Repeat_Counter_With_NoMatches()
        {   //Arrange
            $test_RepeatCounter= new RepeatCounter;
            $input1 = "A";
            $input2 = "b";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1,$input2);
            //Assert
            $this->assertEquals(0,$result);
        }

        function test_Repeat_Counter_Word()
        {   //Arrange
            $test_RepeatCounter= new RepeatCounter;
            $input1 = "the";
            $input2 = "the";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1,$input2);
            //Assert
            $this->assertEquals(1,$result);
        }
        function test_Repeat_Counter_Word_noMatches()
        {   //Arrange
            $test_RepeatCounter= new RepeatCounter;
            $input1 = "the";
            $input2 = "you";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1,$input2);
            //Assert
            $this->assertEquals(0,$result);
        }
    }

?>
