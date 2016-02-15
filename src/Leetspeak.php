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

        foreach ($initialArray as $key=>$letter)
        {
            if ($letter == "e")
                {   $eIndex = array_search($letter, $initialArray);
                    array_push($modifiedArray, "3");
                }
            elseif ($letter == "o")
                {   $eIndex = array_search($letter, $initialArray);
                    array_push($modifiedArray, "0");
                }
            elseif ($letter == "I")
                {   $eIndex = array_search($letter, $initialArray);
                    array_push($modifiedArray, "1");
                }
            elseif (($letter == "s") && ($key != 0))

                {   $eIndex = array_search($letter, $initialArray);
                    echo $eIndex;
                    array_push($modifiedArray, "z");
                }



            else {
                array_push($modifiedArray, $letter);
            }
        }
        $newString = implode($modifiedArray);

        return $newString;
    }
?>
