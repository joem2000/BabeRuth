<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="icon" href="/BabeRuth/img/baseball.jpg">

    <title>New Hartford Babe Ruth</title>

</head>
<body>

<hr>
<hr>

    <div class="header">
        <h1>New Hartford Babe Ruth</h1>
    </div>

<hr>
<hr>
    
    <!-- <h2><u>Sign Up</u></h2> -->
   

    <div class="center">
        <a href="index.html" target="_self"><button id="home" style="font-size:25px"><b>Home Page</b></button></a><br><br>
        <a href="signUp.php" target="_self"><button id="signUp" style="font-size:25px"><b>Sign up</b></button></a><br><br>
        <details>
            <summary><b>About Us</b></summary>
            <a href="coaches.html" target="_self"><button id="coachesB">Coaches</button></a><br>
            <a href="team.html" target="_self"><button id="teamB">Team</button></a>
            <a href="expect.html" target="_self"><button id="expect">What to Expect</button></a>
        </details>
    </div>
    
    <form class="form">
        <ul class="form-style-1">
            <li>
                <label>Player Name <span class="required">*</span></label>
                    <input type="text" id="first" name="field1" class="field-divided" placeholder="First" /> 
                        <input type="text" id="last" name="field2" class="field-divided" placeholder="Last" />
            </li>
            <li>
                <label>Age <span class="required">*</span></label>
                <input name="field4" id="ageBtn" class="field-select" placeholder="12-16"/>
            </li>
            <li>
                <label>Date of Birth <span class="required">*</span></label>
                <input type="text" id="DOB" placeholder="MM/DD/YYYY" name="field1" class="field-long" />
            </li>
            <li>
                <label>Parent/Guardian <span class="required" >*</span></label>
                    <input type="text" id="parent-first" name="field1" class="field-divided" placeholder="First" />
                        <input type="text" id="parent-last" name="field2" class="field-divided" placeholder="Last" />
            </li>
            <li>
                <label>Email <span class="required">*</span></label>
                <input type="email" id="email" name="field3" class="field-long" />
            </li>
            <li>
                <label>Phone Number <span class="required">*</span></label>
                <input type="tel" id="phone-number" name="field1" class="field-long" />
            </li>
        </ul>        
    </form>

        <input type="button" class="btn" onclick="signUp()" value="Submit">  

    <p id="demo"></p>

    

<script src="script.js"></script>

</body>
</html>