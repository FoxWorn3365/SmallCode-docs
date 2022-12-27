<?php require 'assets/header.php'; ?>
   <div id='mth-dir' class='doc'>
    <h1>Method: dir.get</h1>
    Get the content of a directory. You can also use <a href='/docs/methods/dir.scan'>dir.scan</a> but its more difficult.<br>
    <h3>Description</h3>
    <pre>
     <code>
     dir.get(
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>dirName</lb>
     ) <gg>return: <a href='/docs/language/array'>array</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     method array.print(method dir.get('sus'))
     </code>
    </pre>
   </div>
