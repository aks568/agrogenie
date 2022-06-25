<?php include 'setting/system.php'; ?>
<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>AGROGENIE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'theme/sidebar.php'; ?>
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="container" style="font-family: 'Quicksand',sans-serif;">

    <?php
        // $userIP = $_SERVER['REMOTE_ADDR'];
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        function IPtoLocation($ip){ 
            $apiURL = 'https://freegeoip.app/json/'.$ip; 
             
            // Make HTTP GET request using cURL 
            $ch = curl_init($apiURL); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $apiResponse = curl_exec($ch); 
            if($apiResponse === FALSE) { 
                $msg = curl_error($ch); 
                curl_close($ch); 
                return false; 
            } 
            curl_close($ch); 
             
            // Retrieve IP data from API response 
            $ipData = json_decode($apiResponse, true); 
             
            // Return geolocation data 
            return !empty($ipData)?$ipData:false; 
        }
        $userIP = '136.232.208.190'; 
        $locationInfo = IPtoLocation($userIP);
    ?>
    <center><h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Weather Tracker</h1>
    <hr style="border:0.5px solid grey;width: 75%;"></center>
    <div class="app-main" style="font-family: 'Quicksand', sans-serif;">
        <div class="searchInputBox">
            <input type="text" id="input-box" class="input-box" placeholder="Enter city name..." autocomplete="off" value="<?php echo 'Chennai'//$locationInfo['city'] ?>">
        </div>
        <div class="weather-body">
            <div class="location-details">
                <div class="city" id="city"></div>
                <div class="date" id="date"></div>
            </div>

            <div class="weather-status">
                <div class="temp" id="temp">&deg;</div>
                <div class="min-max" id="min-max">&deg;&deg;</div>
                <div class="weather" id="weather"></div>
                <div id="img"></div>
            </div>
        </div>
    </div>
    <script src="wapp.js"></script>
</body>
</html>