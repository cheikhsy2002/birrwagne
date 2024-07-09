
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <div id="poulet">
            <img src="images/IMG-20210927-WA0013.jpg" alt="">
            <p>&nbsp;</p>
            <button style="width: auto;"><b><a style="color: black;" href="?page=poulet">Poulet</a></b></button>
        </div>
        <div id="epices">
            <img src="images/téléchargement(1).jpeg" alt="">
            <p>&nbsp;</p>
            <button style="width: auto;"><b> <a style="color: black;" href="?page=nokoss">nokoss</a></b></button>

        </div>
        <div id="jus">
            <img src="images/telechargement-29.jpg" alt=" ">
            <p>&nbsp;</p>
            <button style="width: auto; "><b><a style="color: black; " href="?page=jus">Jus locaux</a></b></button>

        </div>
        <div id="legumes">
            <img src="images/IMG-20210927-WA0018.jpg" alt=" ">
            <p>&nbsp;</p>
            <button style="width: auto; "><b><a style="color: black; " href="?page=legumes">Legumes</a></b></button>
        </div>
        <div id="guedj">
            <img src="images/IMG-20210927-WA0011.jpg" alt=" ">
            <p>&nbsp;</p>
            <button style="width: auto; "><b><a style="color: black; " href="?page=guedj">guedj</a></b></button>
        </div>
        <div id="yett">
            <img src="images/IMG-20210927-WA0012.jpg" alt=" ">
            <p>&nbsp;</p>
            <button style="width: auto; "><b><a style="color: black; " href="?page=yett">yett</a></b></button>
        </div>
    </div>
       
</body>
</html>
<style>
    #menu_h {
        padding: 0px;
        margin: 0px;
        border-spacing: none;
        border-collapse: collapse;
        background: wheat;
        background-size: cover;
    }
    
    #menu_h {
        height: 100px;
        width: 100%;
        line-height: 100px;
        opacity: 0.8;
    }
    
    * {
        padding: 0px;
        margin: 0px;
    }
    
    #menu_h ul {
        text-align: center;
        position: relative;
        margin-right: 100px;
        line-height: 55px;
    }
    
    #menu_h ul li {
        list-style-type: none;
        display: inline-block;
    }
    
    #menu_h ul li a {
        padding: 22px;
        text-decoration: none;
        color: darkblue;
        display: block;
    }
    
    #menu_h ul li:hover {
        background: #CCEE66;
    }
    
    #menu_h ul li:hover ul {
        display: block;
    }
    
    #menu_h ul ul {
        display: none;
        width: 120px;
        position: absolute;
    }
    
    #menu_h ul li li {
        background: gray;
        display: block;
    }
    
    #poulet,
    #epices,
    #jus,
    #legumes,
    #guedj,
    #yett {
        padding: 2px;
        border: solid 2px;
        text-align: center;
        padding: 5px;
        margin: 50px;
    }
    
    #poulet,
    #epices {
        margin-top: 15%;
        height: 300px;
        display: inline-block;
        width: 40%;
    }
    
    #poulet img {
        width: 100%;
        height: 100%;
    }
    
    #poulet li {
        list-style-type: none
    }
    
    #epices li {
        list-style-type: none
    }
    
    #jus li {
        list-style-type: none
    }
    
    #legumes li {
        list-style-type: none
    }
    
    #guedj li {
        list-style-type: none
    }
    
    #yett li {
        list-style-type: none
    }
    
    #epices img {
        width: 100%;
        height: 100%;
    }
    
    #jus,
    #legumes {
        height: 300px;
        display: inline-block;
        width: 40%;
    }
    
    #jus img {
        width: 100%;
        height: 100%;
    }
    
    #legumes img {
        width: 100%;
        height: 100%;
    }
    
    #guedj,
    #yett {
        height: 300px;
        display: inline-block;
        width: 40%;
    }
    
    #guedj img {
        width: 100%;
        height: 100%;
    }
    
    #yett img {
        width: 100%;
        height: 100%;
    }
</style>