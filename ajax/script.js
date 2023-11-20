//name = "alamin";
//var name = "alamin";
//let name = "alamin";
//const name ="alamin";
//let std = [1, 'alamin', 'alamin@aiub.edu'];

// function abc(){

// }

// let f1 = (a, b)=>a+b;
// f1();

// if(){

// }else{

// }

// for(let i=0; i>10; i++){

// }

//console.log('test');
//alert('test...');
//document.write('<h2>testing JS dom...</h2>');
//document.getElementsByTagName('h1')[1].innerHTML = "TESTing DOM...";

function test(){
    document.getElementById('h1').innerHTML = "TESTing DOM...";
}

function abc(){
    let username = document.getElementById('username').value;
    
    if(username == ''){
        document.getElementById('h1').innerHTML = 'null username!';                    
    }else{
        document.getElementById('h1').innerHTML = username;
    }
}


function ajax(){
    //alert('test');
    let username = document.getElementById('username').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementById('h1').innerHTML = this.responseText;
        }
    }

    xhttp.send('uname='+username);
}