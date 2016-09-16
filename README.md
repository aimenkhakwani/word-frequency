# Word Frequency

#### A web app that determines how many times a particular word is used in a sentence.

#### By _**Aimen Khakwani**_

## Description

This website takes two inputs from the user, a sentence and a word, and returns the number of times the word appears in the sentence.

## Setup/Installation Requirements

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications

* The program takes two user inputs and returns a number
    * Example Input: "Hello world", "Hello"
    * Example Output: 1

* The program evaluates user input and returns the correct number of times the word is used in the sentence
    * Example Input: "Hello world world", "world"
    * Example Output: 2

* The program is able to evaluate user input regardless of capitalization
    * Example Input: "Hello World world", "world"
    * Example Output: 2

# Known Bugs

There are no known bugs at this time.

## Technologies Used

* _PHP_
* _Silex_
* _Twig_
* _Bootstrap_
* _HTML_
* _CSS_

## License

*This website is licensed under the MIT license.*
Copyright (c) 2016  **_Aimen Khakwani_**
