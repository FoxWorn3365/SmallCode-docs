<?php require 'assets/header.php' ?>
   <div id='event' class='doc'>
    <h1>event</h1>
    Define an event and start it<br><br>
    <h2>Example:</h2>
    <code>
    event <a href='/docs/language/event'>[TYPE of listener]</a> <a href='/docs/language/event'>[sync/async]</a> [src (var)] [callback (method name)]
    </code>
    <br>
    <h4>Code examples</h4>
    <pre>
     <code>
    // Define callback method
    make method testcallback.lol()
      print 'oh callback triggered!'
    end
    
    define file string 'test.txt'
    event change:content async file testcallback.lol()
     </code>
    </pre>
   </div>
