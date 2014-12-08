
<div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li id="code" class="active"><a href=#"">Code</a></li>
            <li id="chat"><a href="#">Chat</a></li>
            <li id="msg"><a href="#">Messages</a></li>
            <li id="log"><a href="#">Log</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="well">
          <h1 class="page-header">My Work</h1>
          
          <ul class="nav nav-tabs nav-justified">
	      	<li role="presentation" class="active"><a href="#">zippityzoop.js</a></li>
          	<li role="presentation"><a href="#">site.js</a></li>
          	<li role="presentation"><a href="#">login.java</a></li>
          </ul>
          <br /> 
          <div class="row placeholders">
            <canvas id="canGoat" width="200" height="100" style="border:1px solid #000000;">

            </canvas>
            
            canvas here
          </div>
        </div>
        <div class="chats">
          <div>
            <textarea rows="4" cols="50" id="chat"></textarea>
          </div>  
          <div>
            <input id="msg" type="text"/>
            <input id="send" type="button" value="Send"/>
          </div>
        </div>
        <div class="msgs">
          Messages
        </div>
        <div class="logs">
          Log
        </div>
</div>
<script type="text/javascript">
  //tab buttons
  var code = document.getElementById('code');
  var chat = document.getElementById('chat');
  var msg = document.getElementById('msg');
  var log = document.getElementById('log');

  //divs
  var co = document.getElementById('well');
  var ch = document.getElementById('chats');
  var ms = document.getElementById('msgs');
  var lo = document.getElementById('logs');

  ch.style.display = "none";
  ms.style.display = "none";
  lo.style.display = "none";

  var clear = function(btn){

    code.className = chat.className = msg.className = log.className = "";
    //co.style.display = ch.style.display = ms.style.display = lo.style.display = "none";
    btn.className = "active";
  };
  code.addEventListener("click", function(e){
    clear(code);
  });
  chat.addEventListener("click", function(e){
    clear(chat);
  });
  msg.addEventListener("click", function(e){
    clear(msg);
  });
  log.addEventListener("click", function(e){
    clear(log);
  });
</script>