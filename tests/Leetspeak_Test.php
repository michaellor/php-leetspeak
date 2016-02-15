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
            $input = "Don't you love these 'String' exercises? I do!";

            //Act
            $result = makeLeetspeak($input);

            //Assert
            $this->assertEquals("D0n't y0u l0v3 th3z3 'String' 3x3rciz3z? 1 d0!", $result);
        }
    }

?>
