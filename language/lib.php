<?php require 'assets/header.php'; ?>
   <div id='lan-mth' class='doc'>
    <h1>Language: Libraries (lib)</h1>
    It is possible to create, import, and use libraries external to SmallCode that can add or simplify functions.
    Due to various limitations including speed of execution the libraries must be made in PHP and must be classes.
    <h3>Example</h3>
    <pre>
     <code>
     <?php
     class TestLib {
       public function testFunction() {
         echo 'test!';
       }
     }
     ?>
     </code>
    </pre>
    <h3>Return</h3>
    You can return values via libraries, and they can be retrieved using the <a href='/docs/functions/get'>get</a> function
   </div>
