<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Merdu Music CD Shop</title>
<link rel="stylesheet" href="LabCSS\mystyle.css"> 
<script type="text/JavaScript">
    //Javascript form validation
    function Calculate()
    {
        var quantity = document.forms["order"]["quantity"];
        var option = document.getElementById("CD").value;
        var CTprice=0;

        if (option == 1) 
        {
           text = "RM25.60";
           document.getElementbyid("price").innerHTML=text;
        }
    }
</script>
</head>
<header>
    <h1><img src="LabCSS\musicicon.png" style="width: 30px; height:30px;">
    Merdu Music CD Shop
    <a href="#cart" style="float: right; text-decoration: none;">Shopping Cart</a>
    <img src="https://i.pinimg.com/originals/15/4f/df/154fdf2f2759676a96e9aed653082276.png" style="width: 30px; height:30px; float: right;" >
    </h1>
    <div class="topnav">
        <a href="CDShop.php">Home</a>
        <a class="active" href="CDList.php">CDs</a>
        <a href="#events">Events</a>
        <a href="#about">About</a>
        <a href="registration.php">Register</a>
    </div>
</header>
<body>
    <div class="sidenav">
        <b>Categories</b><br>
        <a href="kpop.php">K-pop</a>
        <a href="jpop.php">J-pop</a>
        <a href="anime.php">Anime</a>
        <a href="soundtrack.php">Soundtrack</a>
        <a href="western.php">Western Music</a>
      </div>
    <br>
    <h2 style="border-bottom: solid; ">Anime</h2>
    <table style="width: 100%; table-layout: fixed;" >
        <tr>
            <td>
                <img src="https://cf.shopee.com.my/file/093cb6cb3481549aa4329514c27d5bd7" style="width: 300px; height:300px;" ><br>
                <a href="VBS.php">Vivid Bad Squad - Ready Steady/Forward</a>
            </td>
            <td>
                <img src="https://m.media-amazon.com/images/I/81kWAhuJutL._SS500_.jpg" style="width: 300px; height:300px;" ><br>
                <a href="Bump.php">Bump Of Chicken - Acacia</a>
            </td>
            <td>
                <img src="https://m.media-amazon.com/images/I/61xfn7JsWGL._SY355_.jpg" style="width: 300px; height:300px;" ><br>
                <a href="kon.html">K-On : Houkago Teatime</a>
            </td>
        </tr>
    </table>
    <br>
    <h2 style="border-bottom: solid; ">K-pop</h2>
    <table style="width: 100%; table-layout: fixed;">
        <tr>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/en/9/90/Twice_-_Eyes_Wide_Open.png" style="width: 300px; height:300px;" ><br>
                <a href="Twice.html">TWICE - 2nd Album: EYES WIDE OPEN   </a>
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/en/2/21/BTS_-_Map_of_the_Soul_7.png" style="width: 300px; height:300px;" ><br>
                <a href="BTS.html">BTS - Map of the Soul: 7</a>
            </td>
            <td>
                <img src="https://cf.shopee.com.my/file/8306e42fcc35852d6635408c1509575a" style="width: 300px; height:300px;" ><br>
                <a href="EXO.html">EXO 2021 Season's Greetings</a>
            </td>
        </tr>
    </table>
    <br>
    <h2 style="border-bottom: solid; ">J-pop</h2>
    <table style="width: 100%; table-layout: fixed;">
        <tr>
            <td>
                <img src="https://m.media-amazon.com/images/I/418jDGqdoqL.jpg" style="width: 300px; height:300px;" ><br>
                <a href="Sekai.html">Earth - Sekai No Owari Album</a>
            </td>
            <td>
                <img src="https://st.cdjapan.co.jp/pictures/l/04/30/AZCS-1074.jpg?v=3" style="width: 300px; height:300px;" ><br>
                <a href="OneOkRock.html">Eye of the Storm - ONE OK ROCK</a>
            </td>
            <td>
                <img src="https://m.media-amazon.com/images/I/71nRHTIxYfL._SL1044_.jpg" style="width: 300px; height:300px;" ><br>
                <a href="Spyair.html">Million - Spyair</a>
            </td>
        </tr>
    </table>
    <br>
    <h2 style="border-bottom: solid; ">Soundtrack</h2>
    <table style="width: 100%; table-layout: fixed;">
        <tr>
            <td>
                <img src="https://static.wikia.nocookie.net/finalfantasy/images/a/ab/Final_Fantasy_VII_Remake_Original_Soundtrack_Cover.jpg/revision/latest?cb=20200527013722" style="width: 300px; height:300px;" ><br>
                <a href="FF7.html">Final Fantasy VII Remake Original Soundtrack</a>
            </td>
            <td>
                <img src="https://colopl.co.jp/magicianwiz/release/img/2021/20210317_1_02.jpg" style="width: 300px; height:300px;" ><br>
                <a href="blackcat.html">The World of Mystic Wiz 7th Anniversary Original Soundtrack</a>
            </td>
            <td>
                <img src="https://www.game-ost.com/static/covers_soundtracks/1/9/190237_143649.jpg" style="width: 300px; height:300px;" ><br>
                <a href="whitecat.html">Zero Chronicle ~Hajimari no tsumi ~ Original Soundtrack</a>
            </td>
        </tr>
    </table>
    <br>
    <h2 style="border-bottom: solid; ">Western Music</h2>
    <table style="width: 100%; table-layout: fixed;">
        <tr>
            <td>
                <img src="https://static.wikia.nocookie.net/onedirection/images/7/75/Singlewmyb.png/revision/latest?cb=20180126230753" style="width: 300px; height:300px;" ><br>
                <a href="OneDirection.html">One Direction - Up All Night</a>
            </td>
            <td>
                <img src="https://static.wikia.nocookie.net/ladygaga/images/7/75/TheFame.jpg/revision/latest/scale-to-width-down/2000?cb=20110410191050" style="width: 300px; height:300px;" ><br>
                <a href="LadyGaga.html">The Fame - Lady Gaga</a>
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/en/f/fd/Thisisacting_albumcover.png" style="width: 300px; height:300px;" ><br>
                <a href="sia.html">This is Acting - Sia</a>
            </td>
            
        </tr>
    </table>
</body>
<footer>
    <ul>
            <li><a href="CDShop.html">Home</a></li>
            <li><a href="CDList">CDs</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="registration.html">Register</a></li>
    </ul>
</footer>
</html>