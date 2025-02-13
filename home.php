<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="css/body.css">
</head>
<body>
    <header>
        <img src="img/ln.jpg" alt="" width="60px" height="50px">
        <nav>
            <ul>
                <a href="login.php" class="roop"><li class="ll">Log in</li></a>
                <li class="bbnn"><img src="img/download.png" alt="US" width="15px" height="10px" > US</li>
                <a href="Faza2.php" class="rooop"><li class="ll">Help</li></a>
            </ul>
        </nav>
    </header>

    <div class="progress-bar">
        <div class="progress-fill"></div>
        <div class="step completed">
            
            <div class="step-text">RENTAL LOCATION</div>
        </div>
        <div class="step active">
            <div class="step-number"></div>
            <div class="step-text">VEHICLES</div>
        </div>
        <div class="step">
            <div class="step-number"></div>
           <a href="plaani.php" class="plaaa"> <div class="step-text">PROTECTION, EXTRAS</div></a>
        </div>
        <div class="step">
            <div class="step-number"></div>
            <div class="step-text">REVIEW</div>
        </div>
    </div>
    
    

    <main>
        <h1>Choose your vehicle</h1>
        <div class="filters">
            <select class="tra">
                <option >Transmission</option>
            </select>
            <select class="tra">
                <option>Seats</option>
            </select>
            <select class="tra">
                <option>Vehicle type</option>
            </select>
            <select class="tra">
                <option>Price range</option>
            </select>
            <button class="tra1">Filters</button>
        </div>

        <div class="vehicle">
            <img src="img/smart-for-two.jpg" alt="Smart Fortwo">
            <div class="details">
                <h2>SMART FORTWO</h2>
                <p class="tags">Electric</p>
                <ul>
                    <li>Seats: 2</li>
                    <li>Average range: 135km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€34.03/day</p>
            </div>
            <a href="smart.php"><button class="select-btn">Select</button></a>
        </div>
        <br>
        <div class="vehicle">
            <img src="img/Renault-ZOE-PNG.jpg" alt="Renalut">
            <div class="details">
                <h2>RENAULT ZOE</h2>
                <p class="tags">Hybrid</p>
                <ul>
                    <li>Seats: 5</li>
                    <li>Fuel consumption: 5 l/100km</li>
                    <li>Electric range: 35km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€34.15/day</p>
            </div>
            <a href="renault.php"><button class="select-btn">Select</button></a>
        </div>
        <br>
        <div class="vehicle">
            <img src="img/53557_GWY_R.png" alt="Skoda">
            <div class="details">
                <h2>SKODA KAMIQ</h2>
                <p class="tags">Diesel</p>
                <ul>
                    <li>Seats: 5</li>
                    <li>Fuel consumption: 7 l/100km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€35.01/day</p>
            </div>
            <button class="select-btn">Select</button>
        </div>
        <br>
        <div class="vehicle">
            <img src="img/51565_GWY_R.png" alt="a3">
            <div class="details">
                <h2>AUDI A3 SPORTBACK</h2>
                <p class="tags">Diesel</p>
                <ul>
                    <li>Seats: 5</li>
                    <li>Fuel consumption: 8.2 l/100km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€46.07/day</p>
            </div>
            <button class="select-btn">Select</button>
        </div>
        <br>
        <div class="vehicle">
            <img src="img/54748_GWY_R.png" alt="trock">
            <div class="details">
                <h2>VOLKSWAGEN T-ROC</h2>
                <p class="tags">Diesel</p>
                <ul>
                    <li>Seats: 5</li>
                    <li>Fuel consumption: 7.3 l/100km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€40.28/day</p>
            </div>
            <button class="select-btn">Select</button>
        </div>
        <br>
        <div class="vehicle">
            <img src="img/52190_GWY_R.png" alt="i30">
            <div class="details">
                <h2>HYUNDAI I30</h2>
                <p class="tags">Diesel</p>
                <ul>
                    <li>Seats: 5</li>
                    <li>Fuel consumption: 5.4 l/100km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€41.86/day</p>
            </div>
            <button class="select-btn"><a href=""></a>Select</button>
        </div>
        <br>
        <div class="vehicle">
            <img src="img/24423_GWY_R.png" alt="golfvar">
            <div class="details">
                <h2>VOLKSWAGEN GOLF VARIANT</h2>
                <p class="tags">Diesel</p>
                <ul>
                    <li>Seats: 5</li>
                    <li>Fuel consumption: 6.7 l/100km</li>
                    <li>Basic protection included</li>
                </ul>
                <p class="price">€43.27/day</p>
            </div>
            <button class="select-btn">Select</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Car Rental Co.</p>
    </footer>
</body>
</html>
