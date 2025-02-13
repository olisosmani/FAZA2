<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="css/smart.css">
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
            <div class="step-number"></div>
            <a href="plaani.php" class="plaaa"> <div class="step-text">PROTECTION, EXTRAS</div></a>
        </div>
        <div class="step">
            <div class="step-number"></div>
            <div class="step-text">REVIEW</div>
        </div>
    </div>




    <div class="container">
        <h1>Confirm your booking</h1>
        <div class="form-container">
            <div class="form-section">
                <h2>1. Driver details</h2>
                <form>
                    <label for="first-name">First name*</label>
                    <input type="text" id="first-name" placeholder="First name" required>

                    <label for="last-name">Last name*</label>
                    <input type="text" id="last-name" placeholder="Last name" required>

                    <label for="dob">Date of birth*</label>
                    <input type="date" id="dob" required>

                    <label for="email">Email*</label>
                    <input type="email" id="email" placeholder="Email" required>

                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox">
                            I consent to receive news and special offers from Europcar International.
                        </label>
                        <label>
                            <input type="checkbox">
                            I wish to receive news and special offers from Europcar Group's business partners.
                        </label>
                    </div>

                    <label for="phone">Phone number*</label>
                    <div class="phone-input">
                        <select>
                            <option value="+1">CA +1</option>
                            <option value="+44">UK +44</option>
                            <option value="+91">IN +91</option>
                            <option value="+91">KS +383</option>
                        </select>
                        <input type="text" id="phone" placeholder="Phone number" required>
                    </div>

                    <div class="frequent-traveler">
                        <label for="traveler-program">Do you have a frequent traveler program?</label>
                        <input type="text" id="traveler-program" placeholder="Frequent traveler number">
                    </div>
                </form>
            </div>
            <div class="summary-section">
                <div class="vehicle-summary">
                    <h3>Vehicle</h3>
                    <div class="vehicle-details">
                        <img src="img/smart-for-two.jpg" alt="Vehicle" class="vehicle-image" width="80px">
                        <div>
                            <p><strong>SMART FORTWO</strong></p>
                            <p>Or Similar Mini</p>
                            <p>⚡ Electric</p>
                        </div>
                    </div>
                    <p><strong>€646.49</strong> (for 19 days)</p>
                    <p>Pick up: Diez Germany (2024-12-28, 10:00)</p>
                    <p>Return: Diez Germany (2025-01-16, 10:15)</p>
                </div>
                <div class="pricing-summary">
                    <p><strong>Protections & Extras</strong>: €0.00</p>
                    <p><strong>Total</strong>: €646.49</p>
                    <p><em>To pay at desk</em></p>
                </div>
            </div>
        </div>
    </div>

    <form>
    
    
        <div class="button-container">
            <button type="submit" class="confirm-button">Confirm</button>
        </div>
    </form>
    
</body>
<br><br><br>    
</html>
