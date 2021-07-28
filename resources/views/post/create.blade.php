<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="my-form mt-5 w-50 mx-auto">
        <h3 class="text-center">فرم تستی ما</h3>
        <hr>
        <form class="" dir="rtl">
            <div class="form-group">
                <label for="one" class="my-2">عنوان</label>
                <input class="form-control" name="title" id="one">

            </div>
            <div class="form-group">
                <label for="two" class="my-2">توضیحات</label>
                <textarea class="form-control" name="dec" id="two"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3 w-100">ارسال</button>
        </form>
    </div>
</div>
</body>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
