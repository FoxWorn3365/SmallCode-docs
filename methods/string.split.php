<?php require 'assets/header.php'; ?>
   <div id='mth-string' class='doc'>
    <h1>Method: string.split</h1>
    Separate string into multiple strings based on one or more characters.<br>
    <h3>Description</h3>
    <pre>
     <code>
     string.replace(
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>oldChar</lb>,
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>newChar</lb>,
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>string</lb>
     ) <gg>return: <a href='/docs/language/string'>string</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define text string 'At first I was afraid, I was petrified'
     define new string 'scared'
  
     print method string.replace('afraid', new, text) // Output: At first I was scared, I was petrified
     </code>
    </pre>
   </div>
