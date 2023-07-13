<!DOCTYPE html>
<html>
<head>
    <title>Maintenance Page</title>
    <style>
        body {
            background: linear-gradient(135deg, #F14E95, #4286f4);
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        
        .container {
            max-width: 90%;
            padding: 40px;
            background: transparent;
            border: 10px solid transparent;
            border-image: linear-gradient(135deg, #F14E95, #4286f4) 1;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        
        h1 {
            color: #fff;
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        p {
            color: #fff;
            font-size: 24px;
            margin-bottom: 30px;
        }
        
        .logo {
            max-width: 300px;
            width: 100%;
            margin: 0 auto 30px;
            display: block;
        }
        
        .creativity {
            margin-top: 30px;
        }
        
        .creativity p {
            font-style: italic;
            color: #fff;
            font-size: 20px;
        }
        
        @media only screen and (max-width: 600px) {
            .container {
                padding: 20px;
                border-width: 5px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            p {
                font-size: 18px;
            }
            
            .logo {
                max-width: 200px;
            }
            
            .creativity p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.eggpricetracker.com/assets/eggrate-logo.png" alt="Logo" class="logo">
        <h1>Website Under Maintenance</h1>
        <p>We apologize for the inconvenience. Our website is currently undergoing scheduled maintenance.</p>
        <p>Please check back later.</p>
        <div class="creativity">
            <p>Meanwhile, imagine all the eggs waiting to be counted...</p>
        </div>
    </div>
</body>
</html>
