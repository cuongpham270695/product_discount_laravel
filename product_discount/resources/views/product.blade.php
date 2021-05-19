<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang sản phẩm</title>
</head>
<body>
    <h1>Trang sản phẩm</h1>
    <form action="/product_discount_laravel" method="post">
        @csrf
        <p>
            <input type="text" name="description" placeholder="Nhập mô tả sản phẩm">
        </p>
        <p>
            <input type="number" name="listprice" placeholder="Nhập giá">
        </p>
        <p>
            <input type="number" name="discount" placeholder="Nhập tỷ lệ chiết khấu">
        </p>
        <p>
            <button type="submit">Tính chiết khấu</button>
        </p>
    </form>
</body>
</html>
