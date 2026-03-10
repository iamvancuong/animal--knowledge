<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thông báo nhận quà</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
  }
  .container {
    display: flex;
    justify-content: space-between;
    max-width: 800px;
    margin: 0 auto;
  }
  .notification {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    flex: 2; /* Chiếm 2/3 không gian */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .gift-box {
    flex: 1; /* Chiếm 1/3 không gian */
    text-align: center;
  }
  .gift-box img {
    max-width: 100%;
    height: auto;
  }
  h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
  }
  p {
    color: #666;
    font-size: 16px;
    margin-bottom: 5px;
  }
  .highlight {
    font-weight: bold;
    color: #007bff;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="notification">
      <h2>Chúc mừng bạn đã nhận quà thành công !!!</h2>
      <p>Người gửi: <span class="highlight">Diễn đàn động vật hoang dã</span></p>
      <p>Người nhận: <span class="highlight">{{Auth::user()->name}}</span></p>
      <p>Phần quà: <span class="highlight">{{$reward->reward_name}}</span></p>
      <p>Số điểm để nhận quà: <span class="highlight">{{$reward->reward_score}}</span></p>
      <p>Địa chỉ nhận quà: <span class="highlight">{{Auth::user()->address}}</span></p>
    </div>
    <div class="gift-box">
      <img src="https://saladowinery.com/wp-content/uploads/2017/12/gift.jpg" width="300" height="300" alt="Hộp quà">
    </div>
  </div>
</body>
</html>
