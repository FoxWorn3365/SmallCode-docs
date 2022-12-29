<?php require 'assets/header.php'; ?>
   <div id='mth-head' class='doc'>
    <h1>Method: headers.get</h1>
    Get headers of the request.<br>
    <h3>Description</h3>
    <pre>
     <code>
     headers.get(
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>name</lb>
     ) <gg>return: <a href='/docs/language/string'>string</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     print method headers.get('HOST')  // Output: smallcode.cf
     </code>
    </pre>
   </div>
