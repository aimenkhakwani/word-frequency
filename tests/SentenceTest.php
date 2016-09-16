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

        function test_evaluateWords_add()
        {
            //Arrange
            $test_Sentence = new Sentence;
            $input1 = "jelly beans jelly beans jelly";
            $input2 = "jelly";

            //Act
            $result = $test_Sentence->evaluateWords($input1, $input2);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_evaluateWords_capitalization()
        {
            //Arrange
            $test_Sentence = new Sentence;
            $input1 = "hey You and you and You";
            $input2 = "You";

            //Act
            $result = $test_Sentence->evaluateWords($input1, $input2);

            //Assert
            $this->assertEquals(3, $result);
        }

    }
?>
