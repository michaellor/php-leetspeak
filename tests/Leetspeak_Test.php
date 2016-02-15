<?php
    require_once "src/Leetspeak.php";

    class LeetspeakGenerator extends PHPUnit_Framework_TestCase
    {
        function test_Leetspeak_E()
        {
            //Arrange
            $input = "face";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("fac3", $result);
        }

        function test_Leetspeak_O()
        {
            //Arrange
            $input = "o";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("0", $result);
        }

        function test_Leetspeak_I()
        {
            //Arrange
            $input = "I";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_Leetspeak_S()
        {
            //Arrange
            $input = "s";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("z", $result);
        }
    }

?>
