<?php


class RepeatCounter{


    function countRepeats($input_word, $input_string)
    {

        $input_word1=strtolower($input_word);
        $input_string1=strtolower($input_string);

        $array_string_words= explode(" ", $input_string1);
        $adder=0;
        foreach($array_string_words as $word)
        {

            if (in_array($input_word1,$array_string_words ))
            {

                $adder+=1;

            }

        }
        return $adder;
    }

}





?>
