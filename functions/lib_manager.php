<?php require 'assets/header.php' ?>
   <div id='lib_manager' class='doc'>
    <h1>lib_manager</h1>
    Import and require libraries for SmallCode. If you need to use a library you must use <a href='/docs/functions/lib'>lib</a><br><br>
    <h2>Example:</h2>
    <code>
    lib_manager [use|require] <a href='/docs/language/string'>[lib dir]</a>
    </code>
    <br><br>
    <h4>Code examples</h4>
    <pre>
     <code>
    // Require lib "AdvancedMath"
    lib_manager require advmath.php
    lib_manager use AdvancedMath as Advmath
     </code>
    </pre>
   </div>
