<?php require 'assets/header.php'; ?>
   <div id='mth-json' class='doc'>
    <h1>Method: json.import</h1>
    Import a JSON transforming it into an array.<br>
    <h3>Description</h3>
    <pre>
     <code>
     json.import(
        <a href='/docs/language/string' class='g'>string</a> <r>only formatted json</r> <lb>jsonInString</lb>
     ) <gg>return: null</gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define test string '{"ilove":"pizza", "ilike":"PHP"}'

     method json.import(test)
     
     // test now is an array
     </code>
    </pre>
   </div>
