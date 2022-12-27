<?php require 'assets/header.php'; ?>
   <div id='version-0.9' class='doc noOutParsingFromJS'>
    <h1>SmallCode Version: 0.9</h1>
    One of SmallCode's biggest updates
    <h2>What's new</h2>
    - Now you can define methods.<br>
    - New method class operator.<br>
    - Now you can use methods in input
    <h2>Examples</h2>
    <pre>
    <code>
    make method fox.greet(name) 
      import n from method value name
      combine (n) [Hello, my name is {0}!] the result
      print result
    end
    
    define b array |name1 of 'Federico' && name2 of 'Fox'|
    
    method fox.greet(method array.getValue(b, 'name1'))   // Output: Hello, my name is Federico
    </code>
    </pre>
