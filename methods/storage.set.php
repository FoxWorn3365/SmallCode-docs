<?php require 'assets/header.php'; ?>
   <div id='mth-storage' class='doc'>
    <h1>Method: storage.set</h1>
    Define an element in a storage with a value.<br>
    <h3>Description</h3>
    <pre>
     <code>
     storage.set(
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>storageName</lb>,
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>valueName</lb>,
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>value</lb>
     ) <gg>return: null</gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define uwu string 'hello :D'
     
     method storage.define('test')
     method storage.set('test', 'hola', uwu)
     </code>
    </pre>
   </div>
