<?php require 'assets/header.php'; ?>
   <div id='example' class='doc highlight'>
    <h1>Creating a LIB with PHP and use it with SmallCode/h1>
     Author: <a href='https://github.com/FoxWorn3365'>FoxWorn3365</a>.<br>
    <h2>1 | PHP Part/h2>
    <div class='aligned-at-1'>
      <pre><code class='borders'>
<?php
class MyUsefulLib {
  public function http_request(array $args) {
    return json_decode(file_get_contents($args[0]));
  }
  
  public function http_print(array $args) {
    echo $args[0];
  }
}
?>
      </code></pre>
    </div>
    <h2>2 | SmallCode part</h2>
    <div class='aligned-at-1'>
      <pre><code class='borders'>
Parsing:()[
  lib_manager import mylibrary.php
  lib_manager use MyUsefulLib as HttpLib
  
  get response from lib HttpLib.http_request('https://ultratickets.xyz/')
  
  lib HttpLib.http_print(response)
],//
      </code></pre>
      <br><br><br>
     </div>
    </div>
