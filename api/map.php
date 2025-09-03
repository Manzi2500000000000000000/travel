<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>World Map - City Search</title>
  <link rel="icon" type="image/jpeg" href="images/travel2.jpeg">
  <style>
    :root {
      --main-color: #a226b3ff;
      --black: #222;
      --white: #fff;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      background: var(--white);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: var(--black);
      margin-bottom: 25px;
    }

    .search-bar {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    input[type="text"] {
      padding: 12px;
      width: 70%;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px 0 0 6px;
      outline: none;
    }

    button {
      padding: 12px 20px;
      font-size: 16px;
      background-color: var(--black);
      color: white;
      border: none;
      border-radius: 0 6px 6px 0;
      cursor: pointer;
    }

    button:hover {
      background-color: var(--main-color);
    }

    iframe {
      width: 100%;
      height: 500px;
      border: none;
      border-radius: 10px;
    }

    .tip {
      margin-top: 15px;
      font-size: 14px;
      color: #444;
      text-align: center;
    }   

    a{
      text-decoration: none;
      color: white;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Explore Cities, Roads & Tourism Worldwide</h2>

  <div class="search-bar">
    <input type="text" id="cityInput" placeholder="Search any city worldwide...">
    <button onclick="updateMap()">Search</button>
  </div>

  <iframe id="mapFrame" src="https://maps.google.com/maps?q=Kigali&output=embed"></iframe>

  <p class="tip">
    Tip: Use the search bar above to explore any city, see roads, tourist attractions, and satellite views.
  </p>
  <button> <a href="home.php"> Back to Home </a></button>
</div>



<script>
  function updateMap() {
    const city = document.getElementById("cityInput").value.trim();
    if (city !== "") {
      const url = "https://maps.google.com/maps?q=" + encodeURIComponent(city) + "&output=embed";
      document.getElementById("mapFrame").src = url;
    } else {
      alert("Please enter a city name.");
    }
  }
</script>

</body>
</html>
