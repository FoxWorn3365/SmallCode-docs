<?php require 'assets/header.php'; ?>
   <div id='mth-loop' class='doc'>
    <h1>Method: loop.localStorage.set</h1>
    Set an element in a loop's local storage.<br>
    <h3>Description</h3>
    <pre>
     <code>
     loop.localStorage.set(
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>valueName</lb>
        <a href='/docs/dis/string_var' class='g'>string|var</a> <lb>value</lb>
     ) <gg>return: null</gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define myArray array |......  ..... |
  
     for each myArray
       method loop.localStorage.set('uwu', 'aaa')
     break
     </code>
    </pre>
   </div>
