<?php require 'assets/header.php'; ?>
   <div id='mth-loop' class='doc'>
    <h1>Method: loop.localStorage.get</h1>
    Get an element from a loop's local storage.<br>
    <h3>Description</h3>
    <pre>
     <code>
     loop.localStorage.get(
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>valueName</lb>
     ) <gg>return: <a href='/docs/language/string'>string</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define myArray array |......  ..... |
  
     for each myArray
       get var from method loop.localStorage.set('uwu')
     break
     </code>
    </pre>
   </div>
