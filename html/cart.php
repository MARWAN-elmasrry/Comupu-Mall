<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
    <style>
        .cart-cont .card{
            justify-content: space-between;
            display: flex;
            border-bottom: 2px black solid;
        }
        .card button{
            background-color: #575757;
            color: aliceblue;
            border: 2px black solid;
            border-radius: 6px;
        }
        .card h3{
            margin: 4px;
        }
        .card .count{
            justify-content: center;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="head-cont">
                <h3>Compu Mall</h3>
                <div class="links">
                    <button><a href="./shopping.php">Shopping</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="cart">
        <div class="container">
            <div class="cart-cont">
                <div class="card">
                    <h2>Product</h2>
                    <h2>Price</h2>
                    <h2>.</h2>
                </div>
                <div class="card">
                    <h2>Product 1</h2>
                    <h2>200 $</h2>
                    <div class="count">
                        <button onclick="dec1()">-</button>
                        <h3 id="prod1-el">1</h3>
                        <button onclick="inc1()">+</button>
                    </div>
                </div>
                <div class="card">
                    <h2>Product 2</h2>
                    <h2>200 $</h2>
                    <div class="count">
                        <button onclick="dec2()">-</button>
                        <h3 id="prod2-el">1</h3>
                        <button onclick="inc2()">+</button>
                    </div>
                </div>
                <div class="card">
                    <h2>Product 3</h2>
                    <h2>200 $</h2>
                    <div class="count">
                        <button onclick="dec3()">-</button>
                        <h3 id="prod3-el">1</h3>
                        <button onclick="inc3()">+</button>
                    </div>
                </div>
                <div class="card">
                    <h2>Product 4</h2>
                    <h2>200 $</h2>
                    <div class="count">
                        <button onclick="dec4()">-</button>
                        <h3 id="prod4-el">1</h3>
                        <button onclick="inc4()">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../java/java2.js"></script>
</body>