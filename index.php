<?php
echo'<hr/>';
echo'
NAME : SYED NUMAN AHMED </br>
Course: Web Development with PHP & Laravel </br>
Assignment: Module 3 </br>
';

echo'<hr/>';

// Task 1: String Manipulation

// Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.".
//  Write a PHP function which takes "$text" as an argument to:

echo '<hr>';
    echo '
    Task 1: String Manipulation

    Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.".
     Write a PHP function which takes "$text" as an argument to:
     Convert the string to all lowercase.

    Replace "brown" with "red" in the string.

    Print the modified text.
    ';

    echo '<hr>';

    $text = "The quick brown fox jumps over the lazy dog.";

    function stringManupulation($text){

        $lowercaseText = strtolower($text);

        $modiText = str_replace("brown", "red", $lowercaseText);

        echo $modiText;
    }
    
  
    stringManupulation($text);


    echo '<hr>';
    echo '
    Task 2: Array Manipulation
    Create an array called $numbers containing the numbers 1 to 10. 
    Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from 
    the array and print the resulting array.
    ';

    echo '<hr>';

    $numbers = [1,2,3,4,5,6,7,8,9,10];

    function findOddNum($numbers){

        // initial array
        $oddNumbers = array();

        foreach ($numbers as $number) {
            if ($number % 2 != 0) {
                // pupulate odd number 1 by 1 into $oddNumbers array veriable
                $oddNumbers[] = $number;
            }
        }
    
        // and last print $oddNumbers
        print_r($oddNumbers);
    }

    //$numbers = range(1, 10);

    // call the function
    findOddNum($numbers);

    echo '<hr>';
    echo '
    Task 3: Array Sorting  

    Create an array called $grades with the following values: 
    85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort 
    the array in descending order and print the sorted grades as array.

    ';

    echo '<hr>';

    // $grades = [85,92,78,88,95];
    $grades = [85,92,78,88,95];

    function sortArray($grades){

    // rsort() for descending 
    // sort() for Ascending 
       rsort($grades);

       // foreach loop
       foreach($grades as $grade){
        echo "$grade </br>";
       }

       // We can use for loop also
    //    $arrlength = count($grades);
    //    for($x = 0; $x < $arrlength; $x++) {
    //    echo $grades[$x];
    //    echo "<br>";
    //    }
       
    }

    //call the function
    sortArray($grades);

    echo '<hr>';
    echo '
    Task 4: Multidimensional Array

    Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science.
    Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

    ';

    echo '<hr>';


    $studentGrades = [
        'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
        'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
        'Student 3' => ['Math' => 75, 'English' => 80, 'Science' => 88]
    ];
    
   
    function AverageGrades($studentGrades) {

        foreach ($studentGrades as $student => $grades) {
            $total = array_sum($grades);
            $count = count($grades);
            $average = $total / $count;
            echo "Average grade for $student: $average\n";
        }
    }

    AverageGrades($studentGrades);


    echo '<hr>';
    echo '
    Task 5: Password Generator

    Create a PHP function called generatePassword($length) that generates a random password of the specified length.
     The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). 
    Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

    ';

    echo '<hr>';


    function generatePassword($length) {

        // Define character sets for different types of characters

        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0765746573';
        $specialChars = '!@#$%^&*()_+';
    
        
        $characters = $lowercase . $uppercase . $numbers . $specialChars;
    

        $password = '';
    

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $password .= $characters[$randomIndex];
        }
    
        return $password;
    }
    

    $generatedPassword = generatePassword(12);
    
 
    echo "Generated Password: $generatedPassword";
    
