<?php require 'assets/header.php' ?>
   <div id='make' class='doc'>
    <h1>make</h1>
    Define a new method with arguments.<br><br>
    <h2>Example:</h2>
    <pre>
     <code>
    make method [METHOD NAME] (arg1, arg2, arg3)
      .....
    end
     </code>
    </pre>
    <br><br>
    <h4>Code examples</h4>
    <pre>
    <code>
    // let's define a method
    make method fox.test (name)
      import n from method value name
      replace [hello, my name is {n}!] then out
      print out
    end
    
    method fox.test('Federico')  // Output:  hello, my name is Federico!
    </code>
    </pre>
