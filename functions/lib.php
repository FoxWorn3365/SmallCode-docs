<?php require 'assets/header.php' ?>
   <div id='lib' class='doc'>
    <h1>lib</h1>
    Use functions of a specific library. If you need to import a library you must use <a href='/docs/functions/lib_manager'>lib_manager</a><br><br>
    <h2>Example:</h2>
    <code>
    lib <a href='/docs/language/lib'>[lib function]</a>
    </code>
    <br><br>
    <h4>Code examples</h4>
    <pre>
     <code>
    // Require lib "AdvancedMath"
    lib_manager require advmath.php
    lib_manager use AdvancedMath as Advmath
    
    lib Advmath.printAuthor()
     </code>
    </pre>
   </div>
