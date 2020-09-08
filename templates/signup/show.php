<?php

?>
<form action="?type=signup&action=add" method="post" id="loginform">
    <label> Логин <input type="text" name="login" id="login"></label>
    <label> Пароль <input type="text" name="password"></label>
    <lablel>ФИО <input type="text" name="FIO"></label>
        <label>Вес <input type="text" name="weight"></label>
        <label> Рост <input type="text" name="growth"></label>
        <label>Пол<select name="gender">
                <option>М</option>
                <option>Ж</option>
            </select></label>
        <input type="submit" value="ok">
</form>
<div id="response"></div>

<!-- <script>
    document.getElementById('login').addEventListener("keyup", function() {
        alert(this.value);
        // let loginForm = document.getElementById("loginform");
     let xhr = new XMLHttpRequest();
        xhr.open("post", "?type=reg&action=checklogin&login=" + this.value);
        xhr.send();
        xhr.onload = function() {
            if (xhr.status == 200) {
                // console.log(xhr.response)
                var obj = JSON.parse(xhr.response);
                document.getElementById('response').innerHTML = obj.response;
                let input = document.getElementById('login');
                if (obj.response == "Yes") {
                    input.classList.add("logAlert")
                } else {
                    input.classList.remove("logAlert")
                }
            } else {
                console.log(xhr.statusText)
            }
        };
    }) -->
<!-- </script> -->
<div id="response"></div>
<script>
    document.getElementById('login').addEventListener("keyup", function() {
        // alert(this.value)
        let xhr = new XMLHttpRequest();
        // let  loginform=document.getElementById('loginform');
        xhr.open("post", "?type=signup&action=checklogin&login=" + this.value);
        xhr.send();

        xhr.onload = function() {
            if (xhr.status == 200) {
                let obj = JSON.parse(xhr.response);
                document.getElementById('response').innerHTML = obj.response;
                let input = document.getElementById('login');
                if (obj.response == "Yes") {
                    input.classList.add('logAlert')
                } else {
                    input.classList.remove('logAlert')
                }
            } else {
                console.log(xhr.statusText)
            }
        };
    })
</script>