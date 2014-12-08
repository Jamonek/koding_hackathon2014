
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
        <div id="co" class="well">
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
        <div id="chats">
          <div>
            <textarea rows="4" cols="50" id="chat" disabled></textarea>
          </div>  
          <div>
            <input id="msg" type="text"/>
            <input id="send" type="button" value="Send"/>
          </div>
        </div>
        <div id="msgs">
          Messages
        </div>
        <div id="logs">
          Log
        </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdn.pubnub.com/pubnub.min.js"></script>
<script type="text/javascript">
  //tab buttons
  var code = document.getElementById('code');
  var chat = document.getElementById('chat');
  var msg = document.getElementById('msg');
  var log = document.getElementById('log');

  //divs
  var co = document.getElementById('co');
  var ch = document.getElementById('chats');
  var ms = document.getElementById('msgs');
  var lo = document.getElementById('logs');

  ch.style.display = "none";
  ms.style.display = "none";
  lo.style.display = "none";

  var clear = function(btn, div){

    code.className = chat.className = msg.className = log.className = "";
    co.style.display = ch.style.display = ms.style.display = lo.style.display = "none";
    btn.className = "active";
    div.style.display = "inherit";
    
  };
  code.addEventListener("click", function(e){
    clear(code, co);
  });
  chat.addEventListener("click", function(e){
    clear(chat, ch);
  });
  msg.addEventListener("click", function(e){
    clear(msg, ms);
  });
  log.addEventListener("click", function(e){
    clear(log, lo);
  });
</script>
<script charset="utf-8" type="text/javascript">
    var text = "Hey!";
    

    $(document).ready(function(){
      var chat = $('#chat')[0];
      var send = $('#send')[0];
      var msg = $('#msg')[0];



       
        var GOAT = PUBNUB.init({
          publish_key: 'demo',
          subscribe_key: 'demo'
        });
        
        GOAT.subscribe({
          channel: 'demo_tutorial',
          message: function(m){
            console.log(m);
            chat.value = chat.value + "\n";
            chat.value += text;
            chat.scrollTop = chat.scrollHeight;
          },
          connect : publish
        });
        
        var publish = function () {
          GOAT.publish({
          channel: 'demo_tutorial',
          message: {"text": text}
          });
        }
      

      
      
      send.addEventListener("click", function(){
        text = msg.value;
        publish();
      });
      document.addEventListener("keydown", function(e){
        if (e.keyCode == 13)
        {
          text = msg.value;
          publish();
        }
      });
    });
    
    
    </script> 