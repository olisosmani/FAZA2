<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/plani.css">
  <title>Protection Plans</title>
</head>
<body>


    <header>
        <a href="home.php">
        <img src="img/ln.jpg" alt="" width="60px" height="50px">
    </a>
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
        <div class="step number">
            <div class="step-number"></div>
            <div class="step-text" ><a href="home.php" class="vhhh">VEHICLES</a></div>
        </div>
        <div class="step">
            <div  class="step-number"></div>
            <div id="sp1" class="step-text" >PROTECTION, EXTRAS</div>
        </div>
        <div class="step">
            <div class="step-number"></div>
            <div class="step-text">REVIEW</div>
        </div>
    </div>





  <div class="container">
    <h1>Choose your protection & Extra</h1>
    <div class="plans">
      
      <div class="plan basic selected">
        <div class="plan-header">
          <h2>Basic <span>★</span></h2>
          <p>Excess: €950.00</p>
        </div>
        <div class="plan-body">
          <p>Included</p>
          <ul>
            <li>✔ Collision Damage & Theft Protection</li>
            <li class="unavailable">✖ Windscreen, Glass, Lights & Tyres protection</li>
            <li class="unavailable">✖ Personal Accident Protection</li>
            <li class="unavailable">✖ Personal belongings protection</li>
          </ul>
        </div>
        <button class="btn disabled">Selected</button>
      </div>

      
      <div class="plan medium">
        <div class="plan-header">
          <h2>Medium <span>★★</span></h2>
          <p>Excess: €450.00</p>
        </div>
        <div class="plan-body">
          <p>€11.10 / day</p>
          <p>Total €210.95</p>
          <ul>
            <li>✔ Collision Damage & Theft Protection</li>
            <li>✔ Windscreen, Glass, Lights & Tyres protection</li>
            <li>✔ Personal Accident Protection</li>
            <li class="unavailable">✖ Personal belongings protection</li>
          </ul>
        </div>
        <button class="btn">Select</button>
      </div>

      
      <div class="plan premium">
        <div class="plan-header">
          <h2>Premium <span>★★★</span></h2>
          <p>Excess: €0.00</p>
        </div>
        <div class="plan-body">
          <p class="discount">€14.20 / day</p>
          <p><strike>€308.85</strike></p>
          <p>Total €269.74</p>
          <ul>
            <li>✔ Collision Damage & Theft Protection</li>
            <li>✔ Windscreen, Glass, Lights & Tyres protection</li>
            <li>✔ Personal Accident Protection</li>
            <li>✔ Personal belongings protection</li>
          </ul>
        </div>
        <button class="btn">Select</button>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body><br><br><br><br>
</html>
