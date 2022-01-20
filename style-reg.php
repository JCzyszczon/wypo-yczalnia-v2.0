/* Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;

}

:root{
    --main-color: #ff2c1f;
    --text-color: #020307;
    --bg-color: #fff;
}

html::-webkit-scrollbar{
    width: 0.5rem;
    background: var(--text-color);

}

html::-webkit-scrollbar-thumb{
    background: var(--main-color);
    border-radius: 5rem;
}

body{
    background-image: url("img/tlo_wyp.png");
    color: var(--bg-color);
}

.arrow{
    font-size: 100px;
    text-decoration: none;
    color: var(--main-color);
    margin-left: 30px;
    margin-top: 30px;
    transition: 0.3s all ease-in-out;
}

.arrow:hover{
    color: #fa1216;
}

/*#container {
    margin-left: auto;
    margin-right: auto;
    position: absolute;
    width: 500px;
    height: 500px;
    left: 37%;
    top: 20%;
    padding: 80px 40px 40px;
    background: rgba(0,0,0,0.7);
    border-radius: 10px;
    color: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.5);
  }*/

.log{
    margin-top: 50px;
}

h1{
    text-align: center;
    font-size: 3rem;
    color: var(--main-color);
    padding: 20px;
    margin-bottom: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.sub{
    margin-top: 30px;
}

input[type=text],
input[type=password],
input[type=email],
input[type=tel]
{
	width: 300px;
	background-color: #333;
	color: #efefef;
	border: 2px solid var(--bg-color);
	border-radius: 5px;
	font-size: 20px;
	padding: 10px;
	box-sizing: border-box;
	outline: none;
    margin-top: 20px;
}

.login-data{
    margin-top: 30px;
    margin-bottom: 50px;
}

input[type=text]:focus,
input[type=password]:focus,
input[type=email]:focus,
input[type=tel]:focus
{
	border: 3px solid #fa1216;
	background-color: #222;
	color: #fa1216;
}

input[type=submit]
{
    margin-left: 60px;
	width: 300px;
	background-color: var(--main-color);
	font-size:20px;
	color: var(--bg-color);
	padding: 15px 10px;
	margin-top: 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	letter-spacing: 2px;
	outline: none;
    transition: 0.2s all ease-in-out;
}

input[type=submit]:focus
{
	-webkit-box-shadow: 0px 0px 15px 5px rgba(204,204,204,0.9);
	-moz-box-shadow: 0px 0px 15px 5px rgba(204,204,204,0.9);
	box-shadow: 0px 0px 15px 5px rgba(204,204,204,0.9);
}

input[type=submit]:hover
{
	background-color: #fa1216;
}

input[type=reset]
{
    margin-left: 180px;
	width: 300px;
	background-color: var(--bg-color);
	font-size:20px;
	color: var(--main-color);
	padding: 15px 10px;
	margin-top: 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	letter-spacing: 2px;
	outline: none;
    transition: 0.2s all ease-in-out;
}

.pas{
    margin-top: 30px;
    font-size: 20px;
}

.pas a{
    text-decoration: none;
    color: var(--bg-color);
}

.pas a:hover{
    color: var(--main-color);
    text-decoration: underline;
}

.rej{
    font-size: 20px;
    margin-top: 30px;
}

.rej a{
    text-decoration: none;
    color: var(--main-color);
}

.rej a:hover{
    color: var(--bg-color);
    text-decoration: underline;
}

