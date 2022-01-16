<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        *{
            padding: 0;
            margin: 0;
        }
        body{          
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            color: aqua;
            line-height: 1.15;  
        }
        #swapper{
            max-width: 1170px;
            margin: 0 auto;
        }
        .headline{
            text-align: center;
            margin: 40px 0px;
        }
        h3{
            font-size: 18px;
            color: #666;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid #666;
            display: inline-block;
            font-weight: 600;
        }
        ul.products{
            list-style: none;
            display: flex;      
            flex-wrap: wrap;
            justify-content: space-between;
        }
        ul.products li{
            flex-basis: 25%;
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }
        ul.products li img{
            max-width: 100%;
            height: auto;
        }
        ul.products li .product-top .product-thumb{
            position: relative;
            overflow: hidden;
        }
        ul.products li .product-top .product-thumb{
            display: block;
        }
        ul.products li:hover .product-top .product-thumb img{
            filter: opacity(80%);
        }
        ul.products li .product-top .product-thumb img{
            display: block;
        }
        ul.products li .product-top a.buy-now{
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: #446084;
            color: #fff;
            font-size: 30;
        }
        ul.products li:hover a.buy-now{
            bottom: 15px;
        }
        ul.products li .product-info{
            padding: 15px 0px;

        }
        ul.products li .product-info a{
            display: block;
            text-decoration: none;
        }
        ul.products li .product-info a.product-cat{
            font-size: 11px;
            text-transform: uppercase;
            color:blue;
            padding: 3px 0px;
        }
        ul.products li .product-info a.product-name{
            color:blueviolet;
            padding: 3px 0px;
        }
        ul.products li .product-info .product-price{
            color: #111;
            padding: 2px 0px;
            font-weight: 600;
        }
    </style>
    <div id="wrapper">
        <div class="headline">
            <h3>Điện thoại giá rẻ</h3>
        </div>
        <ul class="products">
            
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://hungmanhmobile.vn/pic/product/oppo-a9-t_637111748416597535_HasThumb.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Điện thoại OPPO A9</a>
                        <div class="product-price">4.230.000đ</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img width="100%" src="https://hungmanhmobile.vn/pic/product/vivo-y11_637113122325338591_HasThumb.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Điện thoại VIVO Y11</a>
                        <div class="product-price">2.900.000đ</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://img.websosanh.vn/v2/users/root_product/images/dien-thoai-mobiistar-zumbo-s2/9e9sffylx5pzc.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Điện thoại Mobistar</a>
                        <div class="product-price">3.400.000đ</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://mpay9505.vn/wp-content/uploads/2020/08/dien-thoai-smartphone-co-pin-khung-nhat-hien-nay-1.png" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">smartphone</a>
                        <div class="product-price">2.000.000</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://thuthuatcongnghe.com.vn/wp-content/uploads/2020/10/nokia-24-gia-bao-nhieu.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">smartphone</a>
                        <div class="product-price">2.000.000</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="http://s3.amazonaws.com/digitaltrends-uploads-prod/2016/09/iphone7plus-lineup.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Iphone 7Plus</a>
                        <div class="product-price">6.800.000</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://thuthuatcongnghe.com.vn/wp-content/uploads/2020/10/iphone-xs-max-696x464.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Điện thoại iphone XSmax</a>
                        <div class="product-price">9.250.000đ</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://fptshop.com.vn/uploads/originals/2020/9/20/637362422776106891_vinsmart-live-15.png" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Điện thoại Vsmart</a>
                        <div class="product-price">5.500.000</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="https://scontent.fhan5-7.fna.fbcdn.net/v/t39.30808-1/p100x100/270132996_1266163377204669_5538297325668134017_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=HeSZJJD4xFEAX-Il3iP&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan5-7.fna&oh=00_AT9kYmJNY8NSqC4TNhJGhWnt8q_EaJtk2c2jJ4ACLUqHRA&oe=61E97491" alt="">
                        </a>
                        <a href="" class="buy-now">Không bán</a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name">Trần Thu Phương</a>
                        <div class="product-price">Vô giá</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>