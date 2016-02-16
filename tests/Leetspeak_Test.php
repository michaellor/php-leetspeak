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
            $input = "octo";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("0ct0", $result);
        }

        function test_Leetspeak_I()
        {
            //Arrange
            $input = "Icelandic";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("1c3landic", $result);
        }

        function test_Leetspeak_S()
        {
            //Arrange
            $input = "swimmers";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("swimm3rz", $result);
        }

        function test_Leetspeak_sentence()
        {
            //Arrange
            $input = "The snake named super sam is from salem";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("Th3 snak3 nam3d sup3r sam iz fr0m sal3m", $result);
        }
    }

?>
