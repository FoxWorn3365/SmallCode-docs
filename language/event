<?php require 'assets/header.php'; ?>
   <div id='lan-event' class='doc'>
    <h1>Language: Events</h1>
    SmallCode implements a complete but obviously reduced system due to its server-side nature of handling external events.<br>Currently, there are only two types of events that can be called with <a href='/docs/functions/event'>event</a>.<br>
    <h2>Asynchronous event</h2>
    These events turn out to be useful in some cases. They are distinguished from synchronous events in that they wait for it to happen before continuing to execute code.<br>From the <a href='/docs/language/config'>configuration of SmallCode</a> it is possible to implement a timeout and a frequency of time with which they are performed.<br>
    <h2>Synchronous events</h2>
    These events follow the execution of the code without interrupting it and eventually call the callback function if the event is triggered before the end of the code.<br>
    <h2>Event types</h2>
    By its nature, SmallCode only implements "onChange" events which therefore indicate a change of something.<br>
    Here is a complete list of supported events:<br>
    <ul>
     <li><b>change:file</b>  Called when a file changes (not the content, just its presence)</li>
     <li><b>change:content</b>  Called when a file changes content</li>
     <li><b>change:http</b>   Called when the content of an HTTP(S) site's response changes</li>
    </ul>
    <h2>Important Notice</h2>
    The events slow down the execution of the code because, like for example the change: http must execute a request every n time and therefore could cause a slowness of the code.<br>Being still in alpha they are not fully optimized
  </div>
 </body>
</html>
