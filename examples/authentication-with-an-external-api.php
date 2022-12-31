<?php require 'assets/header.php'; ?>
   <div id='example' class='doc highlight'>
    <h1>Authentication with SmallCode and an external API</h1>
     Author: <a href='https://github.com/FoxWorn3365'>FoxWorn3365</a> for <a href='https://scpfoundation.it'>Foundation</a>.<br>
    <h2>1 | Start parsing</h2>
    <div class='aligned-at-1'>
      <pre><code class='borders'>
Parsing:()[
import user from module module.url.post.username
import passwd from module module.url.post.password
if passwd empty so
  method redirect('/')
catch
get hashpasswd from method hash.combine('sha512', passwd)
// procediamo ad autenticare recuperando i file
replace [https://example.com/API/auth-challenge?username={user}&password={hashpasswd}] then url
get response from method HTTP.get(url)
method json.import(response)

take status response.status
if status not '200' so
  replace [ERRORE: Il server ha restituito una risposta negativa {status}. Errore in allegato allo status: ] then ok
  print ok
  take response.message message
  print message
  quit
catch

// Lo status è 200, procedo
take pp response.perm
method session.manager.inizialize()
method session.manager.set('user', user)
method session.manager.set('perm', pp)

method redirect('/dashboard/mep')
quit
]//,
      </code></pre>
      <br><br><br>
     </div>
    </div>
