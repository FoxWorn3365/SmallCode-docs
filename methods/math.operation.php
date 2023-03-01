<?php require 'assets/header.php'; ?>
   <div id='mth-math' class='doc'>
    <h1>Method: math.operation</h1>
    Do a math simple operation.<br>
    <h3>Description</h3>
    <pre>
     <code>
     math.operation(
        <a href='/docs/language/dis/string_var' class='g'>int|var</a> <lb>number1</lb>,
        <a href='/docs/language/dis/string_var' class='g'>string|var</a> <lb>operator</lb> [<y>+ - * /</y>],
        <a href='/docs/language/dis/string_var' class='g'>int|var</a> <lb>number2</lb>
     ) <gg>return: <a href='/docs/language/string'>int</a></gg>
     </code>
    </pre>
    <br><br>
    <h3>Example</h3>
    <pre>
     <code>
     define number1 int 20

     get res from method math.operation(number1, '+', '10')
     print res                // Output: 30
     </code>
    </pre>
   </div>
