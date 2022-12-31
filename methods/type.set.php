<?php require 'assets/header.php'; ?>
   <div id='mth-type' class='doc'>
    <h1>Method: type.set</h1>
    Set a var type.<br>
    <h3>Description</h3>
    <pre>
     <code>
     type.set(
        <a href='/docs/language/var' class='g'>var</a> <lb>var</lb>,
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>type</lb>
     ) <gg>return: null</gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define uwu string '50'
     // Type of uwu: string

     method type.set(uwu, 'int')
     
     // Type of uwu: integer
     </code>
    </pre>
   </div>
