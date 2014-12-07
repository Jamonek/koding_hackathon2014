<!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/-->
<div class="container col-sm-12 col-md-12">
	<div class="btn-group-vertical col-sm-3 col-md-3" role="group">
		<button id="chatBtn" type="button" class="btn btn-default" >ChatsWitGoats</button>
		<button id="codeBtn" type="button" class="btn btn-default" >GOATcodeLand</button>
		<button id="watBtn" type="button" class="btn btn-default" >Cheese</button>
	</div>
	<div class="col-sm-9 col-md-9">
		<textarea id="box" rows="4" cols="50" placeholder="booty butts"></textarea>
</div>

	<script type="text/javascript">
		var tab1 = document.getElementById('chatBtn');
		var tab2 = document.getElementById('codeBtn');
		var tab3 = document.getElementById('watBtn');
		var word = document.getElementById('box');
		
		var clearCol = function(){
			tab1.style.color = tab2.style.color = tab3.style.color = "black";
		}

		tab1.onclick = function(){
			clearCol();
			tab1.style.color = "blue";
			box.placeholder = "Chatty chats";
		}
		tab2.onclick = function(){
			clearCol();
			tab2.style.color = "blue";
			box.placeholder = "Codey wodes";
		};
		tab3.onclick = function(){
			clearCol();
			tab3.style.color = "blue";
			box.placeholder = "watchu doin here boi?!";
		};
	</script>
</div>