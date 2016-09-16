<?php
    class Sentence
    {
        function evaluateWords($input1, $input2)
        {
            $word_array = explode(" ", $input1);
            $output = 0;

            for($i=0; $i<count($word_array); $i++)
            {
                if($word_array[$i] == $input2)
                {
                    $output += 1;
                }
            }
            return $output;
        }
    }


?>
