<?php require 'assets/header.php'; ?>
   <div id='example' class='doc highlight'>
    <h1>Explode a var and do a loop</h1>
     Author: <a href='https://github.com/FoxWorn3365'>FoxWorn3365</a> for <a href='https://scpfoundation.it'>Foundation</a>.<br>
    <h2>Example</h2>
    <div class='aligned-at-1'>
      <pre><code class='borders'>
Parsing:()[
define url string 'https://list.example.com/test?key=500jsddsibhuv7'

get response from method HTTP.get(url)

get a1 from method string.split('Members:', response)
take exp1 a1.1
get a2 from method string.split('#Should Secret Lab development', exp1)
take list a2.0
get partialList from method string.split(' - ', list)
method headers.set('Content-Type', 'text/plain')

for each partialList
  get v from method loop.getValue(value)
  get v2 from method string.split(': ', v)
  take steamid v2.0
  take role v2.1
  replace [{steamid}:{role}] then result
  if role not '' so
    print result
  catch
break
     </code></pre>
     <br><br><br>
    </div>
  </div>

