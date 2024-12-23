<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Biihappy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Trọng Mạnh & Phạm Hiền - Xác nhận tham dự</title>
    <meta property="og:site_name" content="Nguyễn Trọng Mạnh &amp; Phạm Hiền Wedding site!">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trọng Mạnh & Phạm Hiền - Xác nhận tham dự" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/wedding/logo_circle.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Coiny&family=Jura:wght@300&family=MonteCarlo&family=Tourney:wght@100&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .container {
            max-width: 650px;
        }

        #search-form h1 {
            font-family: 'Jura', sans-serif;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0;
        }

        #search-form h1 span {
            padding: 0 15px;
        }

        @media only screen and (max-width: 410px) {
            #search-form h1 {
                font-size: 30px !important;
            }
        }

        @media only screen and (max-width: 374px) {
            #search-form h1 {
                font-size: 22px !important;
            }
        }

        .error {
            color: red;
        }

        .bg-gray-200 {
            background-color: #f1f4f8 !important;
        }

        .bg-gray-300 {
            background-color: #d9e2ef !important;
        }

        .text-gray-700 {
            color: #506690 !important;
        }

        .form-select.is-invalid,
        .was-validated .form-select:invalid {
            border-color: #dc3545 !important;
        }
    </style>
</head>

<body>
    <div class="border-bottom rounded-0 bg-gray-200 p-3 py-4">
        <div class="text-center m-auto" style="max-width:150px;">
            <img class="w-100 border p-1 border-2 rounded-circle border-danger"
                src="{{ asset('images/wedding/confirm.png') }}" />
        </div>
        <div>
            @if ($customer->response == 1)
                <h2 class="text-center mt-3 mb-0 fs-3 text-uppercase" style="font-family: 'Coiny', cursive;">Cám ơn
                    {{ $customer->name }} đã xác nhận tham dự</h2>
            @endif
            @if ($customer->response == 2)
                <h2 class="text-center mt-3 mb-0 fs-3 text-uppercase" style="font-family: 'Coiny', cursive;">Cả ơn
                    {{ $customer->name }} đã phản hồi lại</h2>
            @endif
            @if ($customer->response == 0)
                <h2 class="text-center mt-3 mb-0 fs-3 text-uppercase" style="font-family: 'Coiny', cursive;">
                    {{ $customer->name }} ơi, Hãy đến chung vui cùng </h2>
            @endif

            <p class="text-center mb-0" style="font-family: 'Jura', sans-serif;font-size: 22px;">Đám cưới của</p>
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <h1 class="mb-0 fs-4"><span>Trọng Mạnh</span> <img height="50"
                        src="https://preview.iwedding.info/album/heart.gif"> <span>Phạm Hiền</span></h1>
            </div>
            @if ($customer->response == 1 || $customer->response == 0)
                <h2 class="text-center mt-3 mb-0 fs-3 text-uppercase" style="font-family: 'Coiny', cursive;">
                    nha!</h2>
            @endif
            @if ($customer->response == 2)
                <h5 class="text-center mt-3 mb-0 text-uppercase" style="font-family: 'Coiny', cursive;">
                    Nếu sắp xếp được thời gian, {{ $customer->name }} hãy quay lại để thay đổi xác nhận nhé!</h5>
            @endif

        </div>
    </div>
    <main class="container my-3">
        <div>
            <form id="free-confirm-form" method="POST" class=""
                action="{{ route('confirm.post', ['customer' => $customer]) }}">

                @if ($customer->response == 0)
                    <button type="submit" type="submit" name="confirm" value="1"
                        class="btn btn-lg btn-danger text-center w-100 mt-2"
                        style="font-family: 'Jura', sans-serif;">Xác
                        nhận<small class="d-block fs-6">Confirm</small></button>
                    <button type="submit" type="submit" name="confirm" value="2"
                        class="btn btn-lg btn-secondary text-center w-100 mt-2"
                        style="font-family: 'Jura', sans-serif;">Xin
                        lỗi tôi bận mất rồi :(</button>
                @endif

                @if ($customer->response == 2)
                    <button type="submit" type="submit" name="confirm" value="1"
                        class="btn btn-lg btn-danger text-center w-100 mt-2"
                        style="font-family: 'Jura', sans-serif;">Xác
                        nhận tham dự<small class="d-block fs-6">Confirm</small></button>
                @endif


            </form>
        </div>
        <div>
            <div class="row gx-3 mt-3">
                <a href="{{ route('invitation', ['customer' => $customer->id]) }}" class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                    Về website đám cưới </a>
            </div>
        </div>
    </main>
</body>

</html>
