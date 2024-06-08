<!DOCTYPE html>
<html>
<head>
  <title>Language Selection</title>
  <style>
    body {
      background-image: url(language.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .container {
      max-width: 400px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: center;
      color: #333333;
    }
    
    form {
      margin-top: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      color: #333333;
    }
    
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Language Selection</h1>

    <form>
      <label for="language">Please choose your preferred language:</label>
      <select id="language" name="language">
        <option value="en">English</option>
        <option value="es">Español</option>
        <option value="fr">Français</option>
        <option value="de">Deutsch</option>
        <option value="it">Italiano</option>
        <option value="pt">Português</option>
        <option value="ja">日本語</option>
        <option value="zh">中文</option>
        <option value="ko">한국어</option>
        <option value="hi">हिन्दी</option>
        <option value="ml">മലയാളം</option>
        <option value="ta">தமிழ்</option>
        <option value="mr">मराठी</option>
        <option value="pa">ਪੰਜਾਬੀ</option>
        <option value="sa">संस्कृतम्</option>
        <option value="gu">ગુજરાતી</option>
      </select>
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
