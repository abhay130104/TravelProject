<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

    </script>
    <style>
    *{
    padding: 0px;
    margin: 0px;
}
body {
    background-color: lightgreen;
}
header {
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 15vh;
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
    background-size: cover;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-color: white;
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}
.info_div {
    letter-spacing: 1px;
}
.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
}
footer {
    height: 10vh;
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}
footer > p {
    text-align: center;
    font-family: 'system-ui';
    letter-spacing: 3px;
}
footer > p > a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
    </style>
<body>
    <header>
        <h1>Admin Login</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="logincheck.php" method="post">
            <div class="form_div">
                <label>Admin Id</label>
                <input class="field_class" name="id" type="text" placeholder="Enter id" autofocus>
                <label>Admin Name</label>
                <input class="field_class" name="user" type="text" placeholder="Enter name" autofocus>
                <label>Password</label>
                <input id="pass" class="field_class" name="pass" type="password" placeholder="Enter password">
                
                <input class="submit_class" type="submit" name="adminBt" value="Login" ></input>
            </div>
            <!-- <div class="info_div">
                <p>Ainda não é um usuário registrado? <a href="register/reg-form.php">Cadastre-se!</a></p>
            </div> -->
        </form>
    </main>
    <footer>
        <p>Welcome to <a href="#">Flavour of Travel&trade;</a></p>
    </footer>
</body>





<!-- <form action="logincheck.php" method="POST">
                    <div class="form-group">
							<label>ADMIN ID</label>
							<input type="text" name="id" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>USERNAME</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>PASSWORD</label>
							<input type="text" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" name="admimBt" >
				</form> -->