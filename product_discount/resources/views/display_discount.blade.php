<?php include "../../routes/web.php"?>
<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giá thành của sản phẩm</title>
</head>
<body>
    <h1>DISCOUNT AMOUNT</h1>
    <p>
        Description: {{$productDescription}};
    </p>
    <p>
        List price: {{$listPrice}};
    </p>
    <p>
        Discount Percent: {{$discountPercent}};
    </p>
    <p>
        Discount Amount: {{$discountAmount}};
    </p>
    <p>
        Discount Price: {{$discountPrice}};
    </p>
</body>
</html>
