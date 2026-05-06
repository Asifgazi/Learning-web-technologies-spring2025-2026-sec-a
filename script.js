function insert(){

    let name = document.getElementById('name').value;
    let company = document.getElementById('company').value;
    let contact = document.getElementById('contact').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let data = {
        'action': 'insert',
        'name': name,
        'company': company,
        'contact': contact,
        'username': username,
        'password': password
    };

    let user = JSON.stringify(data);

    let xhttp = new XMLHttpRequest();
    xhttp.open('post', 'controller.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('data='+user);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('head').innerHTML = this.responseText;
        }
    }
}

function search(){

    let username = document.getElementById('username').value;

    let data = {
        'action': 'search',
        'username': username
    };

    let user = JSON.stringify(data);

    let xhttp = new XMLHttpRequest();
    xhttp.open('post', 'controller.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('data='+user);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){

            let users = JSON.parse(this.responseText);

            let output = "";
            for(let i=0; i<users.length; i++){
                output += users[i].employer_name + " - " + users[i].company_name + "<br>";
            }

            document.getElementById('result').innerHTML = output;
        }
    }
}