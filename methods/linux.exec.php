<?php require 'assets/header.php'; ?>
   <div id='mth-linux' class='doc'>
    <h1>Method: linux.exec</h1>
    Run a command in command prompt.<br>
    <h3>Description</h3>
    <pre>
     <code>
     array.getValue(
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>command</lb>
     ) <gg>return: <a href='/docs/language/string'>string</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     print method linux.exec('echo ciao') // Output: ciao
     </code>
    </pre>
