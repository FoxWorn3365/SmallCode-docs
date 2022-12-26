<?php require 'assets/header.php'; ?>
   <div id='mth-json' class='doc'>
    <h1>Method: json.export</h1>
    Export a JSON (or array) transforming it into a string.<br>
    <h3>Description</h3>
    <pre>
     <code>
     json.export(
        <a href='/docs/language/array' class='g'>array</a> <lb>array</lb>
     ) <gg>return: null</gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define test array |ilove of 'pizza' && ilike 'PHP'|

     from method json.export(test)
     
     // Now test is a string
     </code>
    </pre>
   </div>
