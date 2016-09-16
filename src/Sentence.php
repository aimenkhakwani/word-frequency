<?php
    class Sentence
    {
        function evaluateWords($input1, $input2)
        {
            $input1 = str_replace(array(',', '.', '?', '!'), '', $input1);
            $word_array = explode(" ", $input1);
            $output = 0;

            for($i=0; $i<count($word_array); $i++)
            {
                if(strtolower($word_array[$i]) == strtolower($input2))
                {
                    $output += 1;
                }
            }
            return $output;
        }
    }


?>
