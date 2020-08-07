var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


    

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  function sideBar_open(){
    var x = document.getElementById("mediaNavBar");
    var navBar = document.getElementsByClassName("navBar");
    var icon = navBar[0].childNodes[1];
    icon.style.position = "absolute";
    icon.style.display = "block";
    x.style.display= "block";
    x.style.width= "200px";
    x.style.height = "auto";
    x.style.transition ="all 1.5s";
}
function sideBar_close(){
    var x = document.getElementById("mediaNavBar");
    var navBar = document.getElementsByClassName("navBar");
    var icon = navBar[0].childNodes[1];
    icon.style.position = "relative";
    icon.style.display = "none";
    x.style.width= "0px";
    x.style.transition ="all 1.5s";
}
function getPosition_Width(){
  var searchBar = document.getElementById("SearchBar");
  var searchValue = document.getElementById("SearchValue")
  var left = searchBar.getBoundingClientRect().left;
  var width = searchBar.getBoundingClientRect().width;
  searchValue.style.left = left;
  searchValue.style.width = width;
  searchValue.style.top ="44px";
}

    var checkBox = document.getElementsByName('agree');
		var wrongMessage=["You forgot to fill in your first name !","You forgot to fill in your last name !","You forgot to fill in your ID !","You forgot to fill in your Contact Number !",
                 "You forgot to fill in your Email address !","You forgot to fill in your Password !","You forgot to fill in your Re-type password!"];
                 
     /* prompt empty message*/
		function emptyMessage(row){
			var input = document.getElementsByClassName('reg-input100');
			var inputRow = document.getElementsByClassName('register-input');
			if(input[row].value.length<=0 && inputRow[row].childNodes.length ==5){
        var span = document.createElement("SPAN");
				span.innerHTML=wrongMessage[row];
				span.style.color = "red";
				inputRow[row].appendChild(span);
			}
		}

		/*input number only*/
		function numberOnly(evt) {
			var theEvent = evt || window.event;

			// Handle paste
			if (theEvent.type === 'paste') {
				key = event.clipboardData.getData('text/plain');
			} else {
			// Handle key press
				var key = theEvent.keyCode || theEvent.which;
				key = String.fromCharCode(key);
			}
			var regex = /[0-9]|\./;
			if( !regex.test(key) ) {
				theEvent.returnValue = false;
				if(theEvent.preventDefault) theEvent.preventDefault();
			}

		}

		function registerAccount(){
			var isInputFilled = false;
	  var form = document.forms.item(1);
	  table = form.childNodes[3];
			var input = document.getElementsByClassName('reg-input100');
			var inputRow = document.getElementsByClassName('register-input');
			//Remove message
			for(var i=0; i<7; i++){
				if(inputRow[i].childNodes.length ==6){
					inputRow[i].removeChild(inputRow[i].childNodes[5]);
				}
			}
			//Remove message
			if(table.rows[7].cells[0].childNodes.length==6){
				table.rows[7].cells[0].removeChild(table.rows[7].cells[0].childNodes[5]);
			}

			//Prompt error message
			for(var i =0; i<7;i++){
				emptyMessage(i);
			}
		

			
			
			/*Email Validation*/
			var input = document.getElementsByClassName('reg-input100')[4];
			var inputRow = document.getElementsByClassName('register-input')[4];
			var isEmail = false;
			var atSign = false;
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input.value)){
				isEmail = true;
			}
			else {
				if(input.value.length>0){
					span = document.createElement("SPAN");
					span.innerHTML= "Email format is incorrect!";
					span.style.color = "red";
					inputRow.appendChild(span);
				}
				
			}
			/*-------------*/

			/*Re-type password*/
			var password = document.getElementsByClassName('reg-input100')[5];
			var repassword = document.getElementsByClassName('reg-input100')[6];
			var inputRow = document.getElementsByClassName('register-input')[6];
			if(password.value != repassword.value){
				if(inputRow.childNodes.length !=6){
					span = document.createElement("SPAN");
						span.innerHTML= "Password is not matched !";
						span.style.color = "red";
						inputRow.appendChild(span);
				}
	  }
			if(checkBox[0].checked==false){
			span = document.createElement("SPAN");
			span.innerHTML="<br>You must tick the checkbox !";
			span.style.color="red";
			table.rows[7].cells[0].appendChild(span);
			}
			var inputRow = document.getElementsByClassName('register-input');
			for(var i =0; i<7; i++){
				if(inputRow[i].childNodes.length ==6){
          			isInputFilled = false
					break
				}
				isInputFilled=true;
			}
			var submit = false;
			if(isInputFilled == true && checkBox[0].checked==true){
				submit = true;
			}
			console.log(submit);
			$("form[name='registerform']").submit(function(e){
				
				if(submit != true){
					e.preventDefault();
					return true;
				}
			});
			  
		}