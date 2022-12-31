<?php require 'assets/header.php'; ?>
   <div id='mth-storage' class='doc'>
    <h1>Method: storage.get</h1>
    Get a value from a var in a storage.<br>
    <h3>Description</h3>
    <pre>
     <code>
     storage.get(
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>storageName</lb>,
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>valueName</lb>
     ) <gg>return: string|array</gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     get var from method storage.get('testStorage', 'ciao')
     </code>
    </pre>
   </div>
