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

        $wordArr = explode(" ", $input);
        $modifiedArray = array();

        foreach ($wordArr as $key=>$word)
        {

            $initialArray = str_split($word, 1);
            // var_dump($initialArray);

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
                    {
                        array_push($modifiedArray, "z");
                    }

                else {
                    array_push($modifiedArray, $letter);
                }

            }
            array_push($modifiedArray, " ");
            // $newWord = implode($modifiedArray);
        }
        array_pop($modifiedArray);
        $newSentence = implode($modifiedArray);

        return $newSentence;
    }
?>
