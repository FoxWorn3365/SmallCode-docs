<?php require 'assets/header.php'; ?>
   <div id='mth-dir' class='doc'>
    <h1>Method: dir.scan</h1>
    Get the content of a directory. Please use <a href='/docs/methods/dir.get'>dir.get</a> instead because is more simple and fast.<br>
    <h3>Description</h3>
    <pre>
     <code>
     dir.scan(
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>dirName</lb>
     ) <gg>return: <a href='/docs/language/array'>array</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     method array.print(method dir.scan('sus'))
     </code>
    </pre>
   </div>
