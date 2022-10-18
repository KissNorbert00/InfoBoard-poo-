function ValidAlarm(){
	var st1 = document.frm2.al.value.length;
	var err = document.getElementById("st1");
	if(st1>30){
		err.innerHTML = "Should not be longer than 30 characters!";
		return false;
	}
	else{
		err.innerHTML = "";
		return true;
	}
	
}


function ValiData(){
	return ValidAlarm();
}

function ValidDate(){
    re = ".";
    var st1 = document.frm3.da.value;
    var st2 = document.frm3.da.value.match(re);
	var err = document.getElementById("st2");
	if(st1 == '' && st2){
		err.innerHTML = "Inappropriate format (1999-01-01)";
		return false;
	}
	else{
		err.innerHTML = "";
		return true;
	}
	
}


function ValiData2(){
	return ValidSubject() && ValidLocation();
}

document.querySelectorAll('input[type=number]')
  .forEach(e => e.oninput = () => {
    
    if (e.value.length >= 2) e.value = e.value.slice(0, 2);
    
    if (e.value.length === 1) e.value = '0' + e.value;
    
    if (!e.value) e.value = '00';
  });


function do_resize(textbox) {

var maxrows=5; 
	var txt=textbox.value;
	var cols=textbox.cols;

var arraytxt=txt.split('\n');
	var rows=arraytxt.length; 

for (i=0;i<arraytxt.length;i++) 
	rows+=parseInt(arraytxt[i].length/cols);

if (rows>maxrows) textbox.rows=maxrows;
	else textbox.rows=rows;
}