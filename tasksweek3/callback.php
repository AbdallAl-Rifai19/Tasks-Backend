<?php
  /*
  ! What is Callback function
   A callback function is a function that is passed as an argument to another function.
  */

  // Define a simple function to be used as a callback
  function sayHello($name) {
    return "Hello, " . $name;
}
// Define a function that accepts a callback
function User($callback, $name) {
  // Call the callback function
  return $callback($name);
}

echo User('sayHello', 'Abdullah');

?>