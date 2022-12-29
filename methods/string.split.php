<?php require 'assets/header.php'; ?>
   <div id='mth-string' class='doc'>
    <h1>Method: string.split</h1>
    Separate string into multiple strings based on one or more characters.<br>
    <h3>Description</h3>
    <pre>
     <code>
     string.replace(
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>splitChar</lb>,
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>string</lb>
     ) <gg>return: <a href='/docs/language/array'>array</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define text string 'I`ve got all my life to live, and I`ve got all my love to give'
  
     get splitted from method string.split('`', text) // Output: Array: [0] => 'I', [1] => 've got all my life to live, and I', [2] => 've got all my love to give'
     </code>
    </pre>
   </div>
