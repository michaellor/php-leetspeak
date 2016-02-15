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
        // var_dump($initialArray);
        $modifiedArray = array();
        $newString = "";

        foreach ($initialArray as $letter)
        {
            echo $letter;
            if ($letter == "e")
                {   $eIndex = array_search($letter, $initialArray);
                    echo $eIndex;
                    // $input = "3";
                    // unset($initialArray[$eIndex]);
                    array_push($modifiedArray, "3");
                    // echo $eIndex;
                    // $modifiedArray = array($eIndex => "3");
                    var_dump($initialArray);

                }
            else {
                array_push($modifiedArray, $letter);
            }
        }
        $newString = implode($modifiedArray);

        return $newString;
    }
?>
