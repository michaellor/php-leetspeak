<?php

    class Leetspeak
    {
        private $word;

        function __construct($new_word)
        {
            $this->word = $new_word;
        }

        function setWord($new_word)
        {
            $this->word = $new_word;
        }

        function getWord()
        {
            return $this->word;
        }


    }

    function makeLeetspeak($input)
    {
        $initialArray = str_split($input);
        $modifiedArray = array();

        if (in_array("e", $initialArray))
            {
                $eIndex = array_search("e", $initialArray);
            }

        // $eIndex = array_search("e", $initialArray);

    }
?>
