<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Merdu Music CD Shop</title>
<link rel="stylesheet" href="LabCSS\mystyle.css">     
<script type="text/javascript">
    function Calculate()
    {
        var price=25.60;
        var number= document.getElementById("quantity").value;
        var subtotal=price*number;
        var shipping =0;
        var totalprice=0;
        let stotal = subtotal.toFixed(2);
        document.getElementById("subtotal").innerHTML = "SubTotal: RM "+stotal;

        if (subtotal > 100) 
        {
            document.getElementById("shipping").innerHTML = "Postage Fee: RM "+shipping;
        }

        if (subtotal <= 100)
        {
            shipping = 10;
            document.getElementById("shipping").innerHTML = "Postage Fee: RM "+shipping;
            totalprice+=10;
        }

        if (number>=5 && number<=10)
        {
            var discount = stotal*5/100;
            d = discount.toFixed(2);
            document.getElementById("discount").innerHTML = "Discount: - RM "+d;
        }

        if (number>10)
        {
            var discount = stotal*15/100;
            d = discount.toFixed(2);
            document.getElementById("discount").innerHTML = "Discount: - RM "+d;
        }

        if (number<5)
        {
            var discount = 0;
            document.getElementById("discount").innerHTML = "Discount: - RM "+discount;
        }

        totalprice += stotal+shipping-discount;
        tprice = totalprice.toFixed(2);
        document.getElementById("total").innerHTML = "Total Price: RM "+tprice;
        
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
        <a href="#about">About Us</a>
        <a href="registration.php">Register</a>
    </div>
</header>
<body>
    <div class="sidenav">
        <b>Categories</b><br>
        <a href="kpop.php">K-pop</a>
        <a href="jpop.php">J-pop</a>
        <a class="active"  href="anime.php">Anime</a>
        <a href="soundtrack.php">Soundtrack</a>
        <a href="western.php">Western Music</a>
      </div>
    <br>
    <h2 style="border-bottom: solid; ">Vivid Bad Squad - Ready Steady/Forward</h2>
    <div class="row">
    <div class="column">
        <br>
        <br>
        <img src="https://cf.shopee.com.my/file/093cb6cb3481549aa4329514c27d5bd7" style="width: 300px; height:300px;" > 
    </div>
    <div class="column">
        <h3 style="color: rgb(209, 20, 152);">Price: <span style="font-size: 28px;">RM25.60</span></h3>
        <h4 style="color: rgb(184, 45, 29);">Product Code : A00001</h4>
        <h3>Status:  <span style="color: green; font-size: 30px;" >In Stock</span></h3>
        <form name="add" id="add">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" placeholder="">
        <h3 style="font-style: italic;">Description</h3>
        <p>The first single from "Vivid Bad Squad" from the samrtphone game "Project Sekai: Colorful Stage! 
        feat. Hatsune Miku. There are two tracks included in this CD which are <b>"Forward"</b> and <b>"Ready Steady"</b></p>
        <input type="button" value="Calculate" onclick="Calculate()"/>
        </form>
        <p id="subtotal"></p>
        <p id="shipping"></p>
        <p id="discount"></p>
        <p id="total"></p>
    </div>
    </div>
    <br>
    <br>
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