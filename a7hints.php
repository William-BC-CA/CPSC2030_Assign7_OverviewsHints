<?php
// Global result of form validation
$valid = false;
// Global array of validation messages. For valid fields, message is ""
$val_messages = Array();

// Output the results if all fields are valid.
function the_results()
{
  global $valid;

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    // Task B
    // CHECK TO SEE IF THE PAGE HAS VALIDATED
    /**
     * 1. Check if $valid is true  i.e ALL form fields are valid
     * 2. If yes, output the <div class = 'results'> provided in sample-output.html
     * 3. Remember to update the hardcoded fields with PHP variables
     *      a. For date and email, you can simply echo the values stored in $_POST
     *      b. For favorite animals, you can loop through the animals array and print out an <ul> where each animal is an <li>
     **/
  }
}

// Check each field to make sure submitted data is valid. If no boxes are checked, isset() will return false
function validate()
{
    global $valid;
    global $val_messages;

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
      // Use the following patterns to validate email and date or come up with your own.
      // email: '#^(.+)@([^\.].*)\.([a-z]{2,})$#'
      // date: '#^\d{4}/((0[1-9])|(1[0-2]))/((0[1-9])|([12][0-9])|(3[01]))$#'

      // Task A start
      // Check if form in correct format
      /**
       * 1. Check if the "email" and "date" values aree set in $_POST: eg. if(isset($_POST["email"] ....))
       * 2. If yes, do the following:
       *    a. Loop through $_POST. For instance you could use foreach($_POST as $type => $value)
       *    b. if the $type is email, use the regex pattern provided to check if the form field is valid.
       *        i. If yes, set the $val_messages[$type] to "" - indicating that the field is valid.
       *        ii. Else, set the $val_messages[$type] to an error message - indicating that the field is invalid.
       *    c. Use the same approach for validating the $date field with the regex pattern provided.
       * 3. Else, echo an error message.
       * 4. Now finally validate the animals checkbox.
       *    a. Similar to date and email, check if $_POST['animals'] is set.
       *    b. Additionally, also check if >= 3 checboxes have been checked. Hint: you can use count() to get the length of $_POST['animals']
       *        i. If the above avaluates to true - this means the field is valid - so set an empty message in $val_messages['animals']
       *        ii. Otherwise, set an error message.
       * 5. If you code reaches this state, it means all fields are valid - we can set the global $valid variable to true and return.
       * */
    }
}

// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type) {

  global $val_messages;

  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    // Task C
    /**
     * 1. If the global val_messages array has a value set (e.g please choose at least three animals) for a particular $type, return a <p> tag with value stored: $val_messages[$type]
     * 2. For the <p> tag, you should use the 'failure-message' class provided in the CSS file.
     * */
  }
}
