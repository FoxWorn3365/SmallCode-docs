   <div id='lan-var' class='doc'>
    <h1>Language: Active Variables</h1>
    From v1.0 on SmallCode you can define public methods that are absolute and can be applied to all variables and be able to retrieve the value of the last one.
    <h2>Example</h2>
    <pre>
     <code>
     make method {var}.method.name ()
       import n from method startValue
       replace [hi, my name is {n}] the opt
       print opt
     end
     
     define name string 'Federico'
     
     name.method.name()      // Output: hi, my name is Federico
     </code>
    </pre>
