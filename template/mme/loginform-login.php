<?php
/*
 */

echo "
<div class='container'>
    <div class='row'>
        
<div class='container'>
  <div class='card'></div>
  <div class='card'>
    <h1 class='title'>Welcome!</h1>
    <form action='$loginpath' method='post' name='Login_Form'>
      <input type='hidden' name='challenge' value='$challenge'>
      <input type='hidden' name='uamip' value='$uamip'>
      <input type='hidden' name='uamport' value='$uamport'>
      <input type='hidden' name='userurl' value='$userurl'>
      <div class='input-container'>
        <input type='text' id='UserName' name='UserName' required='required'/>
        <label for='Username'>$centerUsername</label>
        <div class='bar'></div>
      </div>
      <div class='input-container'>
        <input type='password' id='Password' name='Password' required='required'/>
        <label for='Password'>$centerPassword</label>
        <div class='bar'></div>
      </div>
      <div class='button-container'>
        <input type='hidden' name='button' value='Login'>
        <button onClick=\'javascript:popUp('$loginpath?res=popup1&uamip=$uamip&uamport=$uamport')\'><span>Login</span></button>
      </div>
    </form>
  </div>
</div>

        <a id='portfolio' href='http://www.mme.com/' title='View our website!'><i class='fa fa-link'></i></a>
    </div>
</div>

";
