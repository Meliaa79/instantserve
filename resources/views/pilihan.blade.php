<!DOCTYPE html>
<html>
<head>
  <title>InstantServe Choice</title>
  <style>
    body {
      background-color: #80daeb;
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #fff;
      padding: 60px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      width: 95%;
      max-width: 1000px;
    }

    h1 {
      margin-bottom: 50px;
      font-size: 26px;
    }

    .button {
      background-color: #80daeb;
      color: #fff;
      padding: 20px 50px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s;
      margin: 0 50px;
    }

    .button:hover {
      background-color: #66c2e0;
    }

    .or {
      margin: 20px 0;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Apa tujuan kamu menggunakan InstantServe?</h1>
    <form action="{{ route('storeChoice') }}" method="POST">
      @csrf
      <button type="submit" name="choice" value="1" class="button">Untuk mencari jasa</button>
      <span class="or">atau</span>
      <button type="submit" name="choice" value="2" class="button">Untuk memberikan jasa</button>
    </form>
  </div>
</body>
</html>
