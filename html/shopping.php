<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/shopping.css">
    <style>
        .info {
            justify-content: center;
            display: grid;
            align-items: center;
        }
        button{
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            border:2px solid;
            border-radius: 10px;
        }
        button p{
            margin: 0;
            padding: 4px;
            padding-bottom: 0;
            padding-top: 0;
            border-radius: 10px;
        }
        button{
            display: flex;
            justify-content: space-between;
        }
        .head-cont button p{
            background-color: black ;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="head-cont">
                <h3>Compu Mall</h3>
                <div class="links">
                    <button><a href="./cart.php">Cart</a><p id="p-el">0</p></button>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container">
            <h2 class="special-heading">Welcome To Compu Mall</h2>
        </div>
    </div>
    <div class="mother-b">
        <div class="container">
            <h2 class="special-heading">Mobiles & Tablets</h2>
            <div class="moth-cont">
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 1</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 2</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ports">
        <div class="container">
            <h2 class="special-heading">Labtops & Printers</h2>
            <div class="port-cont">
            <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 1</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 2</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="monitor">
        <div class="container">
            <h2 class="special-heading">Tv's</h2>
            <div class="mont-cont">
            <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 1</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 2</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="input-div">
        <div class="container">
            <h2 class="special-heading">Gaming</h2>
            <div class="input-cont">
            <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 1</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 2</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="connector">
        <div class="container">
            <h2 class="special-heading">Accessories</h2>
            <div class="connect-cont">
            <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 1</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 2</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="connector2">
        <div class="container">
            <h2 class="special-heading">Brands</h2>
            <div class="connect-cont">
            <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 1</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 2</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="../img/mother.png" >
                    </div>
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Price : 200 $</p>
                        <button id="btn-count" onclick="countbtn()">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="foot-cont">
                <h4>Copyrights <span>&copy;</span> To <a href="">CompuMall.com</a> </h4>
            </div>
        </div>
    </div>
    <script src="../java/java.js"></script>
</body>
</html>