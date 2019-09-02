<!-- mazherul islam
email:mazherulislam6@gmail.com  -->


<!doctype>
<html>

<head>
    <title>bullsy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="{{url('css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>

@include('layouts.nav')
<!--header part -->
<div class="header_wrapper  clearfix">
    <div class="header">
        <div class="logo floatleft">
            <div class="logo_text floatleft">
                <h2>Bullsy</h2>
                <p>rugged shoes store</p>
            </div>
            <div class="logo_image floatleft">
                <img alt="logo" src="{{url('image/boot.png')}}" height="88px" width="30px">
            </div>

        </div>
        <div class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li>/</li>
                <li><a href="#">Apparel</a></li>
                <li>/</li>
                <li><a href="#">Fashion</a></li>
                <li>/</li>
                <li><a href="#">contact us</a></li>

            </ul>

        </div>

        <div class="cart floatright">

            <div class="cart_image floatright">
                <img alt="logo" src="{{url('image/box.jpg')}}" height="47" width="42">

            </div>
            <div class="cart_text floatright">
                <p>10 items</p>
                <b>457.77$ cart</b>
            </div>


        </div>
    </div>
</div>

<!-- slider-->

<div class="slider_wrapper clearfix">
    <div class="slider">
        <div class="slider_position">
            <img alt="slider" src="{{url('image/slider_image.jpg')}}">

            <div class="slider_text">
                <h1>shoes</h1>
                <h1>snikers</h1>
                <h1>boots</h1>
                <h1>ruggedness</h1>
            </div>
            <div class="slider_image">
                <img alt="slider" src="{{url('image/slider_transperant_image.png')}}" height="64px" width="64">

            </div>

        </div>
    </div>

</div>

<!--start services-->
<div class="service_wrapper clearfix">
    <div class="service">
        <div class="shipping">
            <h1>Free shipping</h1>
            <p>all other abpve 99$</p>


        </div>
        <div class="collection">
            <h1>new shoes collection</h1>
            <p>brand new collection of bulls shoes</p></div>
        <div class="gurantee">
            <h1>money back guarantee</h1>
            <p>return policy on all order within 14 days</p>
        </div>

    </div>
</div>


<!-- start portfolio-->
<div class="portfolio_one_wrapper clearfix">
    <div class="portfolio_one">
        <div class="portfolio_heading">

            <h1> our shoes catagories</h1>
            <img src="{{url('image/line2.jpg')}}" alt="line">

        </div>
        <div class="one_wrapper">
            <img alt="portgolio" src="{{url('image/pic1.jpg')}}" width="350px" height="330px">

            <div class="one">
                <h1>snickers</h1>
                <p>loren ipsum dolor siot amet,consect at justo eget lorem port tincid ipsum lor</p>
                <a href="#"> view the category</a>
            </div>

        </div>

        <div class="one_wrapper">
            <img alt="portgolio" src="{{url('image/pic2.jpg')}}" width="350px" height="330px">

            <div class="one">
                <h1>running shoes</h1>
                <p>loren ipsum dolor siot amet,consect at justo eget lorem port tincid ipsum lor</p>
                <a href="#"> view the category</a>
            </div>

        </div>


        <div class="one_wrapper">
            <img alt="portgolio" src="{{url('image/pic3.jpg')}}" width="380px" height="330px">

            <div class="one">
                <h1>mountain shoes</h1>
                <p>loren ipsum dolor siot amet,consect at justo eget lorem port tincid ipsum lor</p>
                <a href="#"> view the category</a>
            </div>

        </div>
    </div>
</div>


<!--portfolio two-->

<div class="portfolio_two_wrapper clearfix">
    <div class="portfolio_two">
        <div class="portfolio_heading">
            <h1> our latest Arrival</h1>
            <img src="{{url('image/line2.jpg')}}" alt="line">

        </div>
        @foreach($product as $pdt)
            <div class="two_wrapper">
                <img alt="portgolio" src="image/pic<?php echo $pdt->id; ?>.jpg">
                <div class="two">
                    <p>{{$pdt->product_name}}</p>
                    <p><b>{{$pdt->price}} BDT</b></p>
                    <a href="user/item?id=<?php echo $pdt->id; ?>">Add to cart</a>
                </div>
            </div>
        @endforeach

    </div>
</div>

<!-- portfolio three -->

<div class="portfolio_three_wrapper clearfix">
    <div class="portfolio_three">
        <div class="portfolio_heading">
            <h1> Features products</h1>
            <img src="{{url('image/line2.jpg')}}" alt="line">
        </div>
        @foreach($product as $pdt)
            @if($pdt->featured==1)
            <div class="two_wrapper">
                <img alt="portgolio" src="image/pic{{$pdt->id}}.jpg">
                <div class="two">
                    <p>{{$pdt->product_name}}</p>
                    <p><b>{{$pdt->price}} BDT</b></p>
                    <a href="user/item?id={{$pdt->id}}">Add to cart</a>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>


<!-- blog portfolio-->


<div class="portfolio_four_wrapper clearfix">
    <div class="portfolio_four">
        <div class="portfolio_heading">
            <h1> latest from the blog</h1>
            <img src="{{url('image/line2.jpg')}}" alt="line">

        </div>
        <div class="four_wrapper">
            <img alt="portgolio" src="{{url('image/pic12.jpg')}}">

            <div class="four">
                <p><b>extra rugges flip-flop will arrive soon </b></p>
                <p>loren ipsum dolor siot amet,consect at justo eget lorem port tincid ipsum lor</p>
                <a href="#"> read more</a>
            </div>

        </div>

        <div class="four_wrapper">
            <img alt="portgolio" src="{{url('image/pic13.jpg')}}">

            <div class="four">
                <p><b>new models of bullsysnickers just arrived</b></p>
                <p>loren ipsum dolor siot amet,consect at justo eget lorem port tincid ipsum lor</p>
                <a href="#"> read more</a>
            </div>

        </div>


        <div class="four_wrapper">
            <img alt="portgolio" src="{{url('image/pic14.jpg')}}">

            <div class="four">
                <p><b>extra rugged flip-flop will arive soon</b></p>
                <p>loren ipsum dolor siot amet,consect at justo eget lorem port tincid ipsum lor</p>
                <a href="#"> read more</a>
            </div>

        </div>
    </div>
</div>

<!--welcome-->
<div class="welcome_wrapper clearfix">
    <div class="welcome">
        <h1> bullsey- A Rugged store for ruggede people</h1>
        <p>read more about our store regulations and policy <a href="#">here</a></p>
    </div>
</div>


<!--footer wrapper-->

<div class="footer_wrapper clearfix">
    <div class="footer">
        <div class="footer_logo floatleft">
            <div class="footer_logo_text">
                <h1>Bullsy</h1>
                    <p>rugged shoes store</p>
            </div>
            <div class="footer_logo_image">
                <img alt="logo" src="{{url('image/boot2.png')}}" height="88px" width="30px">
            </div>

        </div>
        <div class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li>/</li>
                <li><a href="#">Apparel</a></li>
                <li>/</li>
                <li><a href="#">Fashion</a></li>
                <li>/</li>
                <li><a href="#">contact us</a></li>

            </ul>
            <p>&copy;2015 |All rights reserve by <a href="#">mazher<a/></p>
        </div>

        <div class="footer_top_icon floatleft ">

            <img alt="top_icon" src="image/arrow.png">

        </div>
    </div>
</div>

<!--footer bottom-->

<div class="footer_bottom_wrapper clearfix">
    <div class="footer_bottom">
        <div class="social floatleft">
            <ul>
                <li><a href="https//rss.com"><img src="image/facebook.png" alt="facebook logo"></a></li>


            </ul>
            <div class="design floatright ">

                <p>design & developed by <a href="#">mazher<a/></a></p>
            </div>

        </div>

    </div>
</div>


</body>
</html>
