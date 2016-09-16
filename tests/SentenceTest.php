<?php
    require_once 'src/Sentence.php';

    class SentenceTest extends PHPUnit_Framework_TestCase
    {
        function test_evaluateWords_return()
        {
            //Arrange
            $test_Sentence = new Sentence;
            $input1 = "hello world";
            $input2 = "world";

            //Act
            $result = $test_Sentence->evaluateWords($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
    }
?>
