<?php require 'assets/header.php'; ?>
   <div id='lan-loop' class='doc highlight'>
    <h1>Language: Loop</h1>
    SmallCode provides a simple and efficient asynchronous cycle management system.<br>Compared to the previous version, we have only improved the syntax from the developer's point of view
    <h3>What has changed?</h3>
    Now the loops are no longer handled inefficiently with 100'000 randomly placed variables and a sucky code detection but rather have been implemented like methods.<br>Imagine that when you define a loop a method is defined and executed n times
    <h3>Old syntax</h3>
    <pre><code>
    for each ([ARRAY] per type) then
      // CODE
    break
    </code></pre>
    <h3>New syntax</h3>
    <pre><code>
    for each [ARRAY] so
      // CODE
    break
    </code></pre>
    <br><br>
