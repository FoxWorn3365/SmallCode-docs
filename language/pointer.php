<?php require 'assets/header.php'; ?>
   <div id='lan-point' class='doc docMainNoHiglightExclusion'>
    <h1>Language: Pointers</h1>
    Pointers are used to make active associations between variables. Unlike defining one variable as another, which is a static method, when a pointer is used, if the initial variable changes, the value of the pointed variable also changes.<br><br>
    Here is a simple example:<br>
    <pre><code>
    define mario string 'thanks bro'    // In this case mario = thanks bro
    define test var mario               // in this case test = thanks bro
    
    link aaa with mario                 // aaa = thanks bro
    
    define mario string 'uwuw'          // Now mario is uwu
    print aaa                           // Output: uwuw
    print test                          // Output: thanks bro
    </code></pre>
    <br><br>
    <a href='/docs/functions/link'>Here you can find the link function documentation</a>
    <br><br>
   </div>
