<!DOCTYPE html><script type="text/javascript">
    var old = 1;
function switchTab(id)
    {
        document.getElementById(id).classList.toggle('active');
        document.getElementById(old).classList.toggle('active');
        old = id;
    }
</script>
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
	      	<li role="presentation" class="active"><a onClick='switchTab(this.id)' href="#" id="0">zippityzoop.js</a></li>
          	<li role="presentation"><a onClick='switchTab(this.id)' href="#" id="1">site.js</a></li>
          	<li role="presentation"><a onClick='switchTab(this.id)' href="#" id="2">login.java</a></li>
            <li role="presentation"><a onClick='switchTab(this.id)' href="#" id="3">extra.tcl</a></li>
            <li role="presentation"><a onClick='switchTab(this.id)' href="#" id="4">input.go</a></li>
            <li role="presentation"><a onClick='switchTab(this.id)' href="#" id="5">memcached.ruby</a></li>
            <li role="presentation"><a onClick='switchTab(this.id)' href="#" id="6">twister.py</a></li>
          </ul>
          <br /> 
          <div class="row placeholders">
            <canvas id="canGoat" width="200" height="100" style="border:1px solid #000000;">

            </canvas>
            
          </div>
        </div>
        <div id="chats">
          <div>
            <textarea rows="4" cols="50" id="chatBox" disabled></textarea>
          </div>  
          <div>
            <input id="talk" type="text"/>
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
<script src="https://cdn.pubnub.com/pubnub-crypto.min.js"></script>
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
      var cb = $('#chatBox')[0];
      var send = $('#send')[0];
      var talk = $('#talk')[0];
      cb.value = "Hey!";


       
        var auth_key = PUBNUB.uuid();
        var GOAT = PUBNUB.init({
          publish_key: 'pub-c-60f05496-69e7-4b5f-9615-b12ac200492b',
          subscribe_key: 'sub-c-c192f52c-7dd5-11e4-9173-02ee2ddab7fe',
          secret_key: 'sec-c-M2Y0ZDhjYmUtODNkYy00ZjBlLWFkYTktMzZlNjk4NzBlOGQ5',
          auth_key: auth_key
        });

        GOAT.grant({
          channel: 'koding_hack',
          auth_key: auth_key,
          read: true,
          write: true,
          ttl: 60,
          callback: function(m){console.log(m)}
        });
        
        GOAT.subscribe({
          channel: 'koding_hack',
          message: function(m){
            console.log(m);
            cb.value = cb.value + "\n";
            cb.value += text;
           
            cb.scrollTop = cb.scrollHeight;
          },
          connect : publish,
          error: function(error) {
            console.log(error);
          }
        });
        
        var publish = function (text) {
          GOAT.publish({
          channel: 'koding_hack',
          message: {"text": text}
          });
        };
      


      send.addEventListener("click", function(){
        text = talk.value;
        publish(text);
      });
      document.addEventListener("keydown", function(e){
        if (e.keyCode == 13)
        {
          text = talk.value;
          publish(text);
        }
      });

    });

    
    
    
    </script> 