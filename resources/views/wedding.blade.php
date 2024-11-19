<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nguyễn Trọng Mạnh &amp; Phạm Thị Hiền Wedding!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Nguyễn Trọng Mạnh &amp; Phạm Thị Hiền - Our wedding date: 2024-12-08 | Điều tuyệt vời nhất mà bạn từng học là yêu và được yêu để đáp lại">
    <meta name="keywords" content="Wedding,Nguyễn Trọng Mạnh,Phạm Thị Hiền,Wedding website, Website đám cưới">
    <meta name="format-detection" content="telephone=no">
    <meta name="application-name" content="iWedding">
    <meta name="author" content="Biihappy.com">
    <meta property="og:site_name" content="Nguyễn Trọng Mạnh &amp; Phạm Thị Hiền">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nguyễn Trọng Mạnh &amp; Phạm Thị Hiền Wedding site!">
    <meta property="og:image"
        content="{{ asset('images/wedding/confirm.png') }}">
    <meta property="og:image:url"
        content="{{ asset('images/wedding/confirm.png') }}">
    <meta property="og:image:secure_url"
        content="{{ asset('images/wedding/confirm.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/wedding/logo_circle.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:opsz,wght@12..72,100&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://preview.iwedding.info/templates/template135/css/libs.css" />
    <link rel="stylesheet" href="https://preview.iwedding.info/templates/template135/css/style.css" />
    <link href="https://preview.iwedding.info/common/calendar.css?v=20241021" rel="stylesheet">
</head>
<script type="text/javascript">
    var photoGalleries = [];
</script>

<body>
    <div class="wrapper">
        <header id="header" class="site-header header-style-1 d-none">
            <meta name="format-detection" content="telephone=no">
            <nav class="navbar bg-white shadow-sm py-1">
                <div class="container-fluid">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <a class="section-title navbar-brand" href="#">M & H</a>
                        <button class="navbar-toggler rounded-0 border-0 p-0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="bi bi-list fs-3 text-black"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </header>

        @include('wedding-sections.banner')

        @include('wedding-sections.action')

        @include('wedding-sections.bride-and-groom')

        <section class="py-5 story-section section-bg-affect" id="story">
            <div class="container-fluid">
                <h3 data-aos="fade-up" class="section-sub-title mb-4 text-center">
                    Sự hiện diện của quý khách là niềm vinh hạnh cho gia đình chúng tôi!
                </h3>
                <div class="story-content">
                    <img src="{{ asset('images/wedding/invitation-card-sp.png') }}" class="story-img" alt="story-img">
                    <div class="guest">QUÝ KHÁCH</div>
                </div>
            </div>
        </section>

        @include('wedding-sections.images')

        @include('wedding-sections.video')

        @include('wedding-sections.calendar')

        @include('wedding-sections.invitation')

        @include('wedding-sections.events')

        @include('wedding-sections.donate')

        <section class="py-5 wishes-section section-bg-affect" id="wishes">
            <div class="container-fluid">
                <h2 data-aos="fade-up" class="section-title text-center">
                    Sổ Lưu Bút
                </h2>
                <h3 data-aos="fade-up" class="section-sub-title mb-4 text-center">
                    Cảm ơn bạn rất nhiều vì đã gửi những lời chúc mừng tốt đẹp nhất đến đám cưới của chúng tôi!
                </h3>
                <div id="section-comment">
                    <form action="" id="wish-form" class="p-4 contact-validation-active">
                        <div class="col-auto mb-3 d-flex">
                            <div class="w-100">
                                <input name="name" id="name-comment" type="text" class="form-control border-0"
                                    placeholder="Nhập tên của bạn*" />
                            </div>
                            <input name="email" id="email-comment" type="hidden"/>
                        </div>
                        <div class="col-auto mb-3">
                            <div class="textarea-emoji-picker position-relative">
                                <div class="vitualTextarea form-control px-0">
                                    <textarea id="content" name="content" class="form-control border-0" id="detail-comment" rows="3"
                                        cols="" placeholder="Nhập lời chúc của bạn*"></textarea>
                                    <div class="textAreaIcons">
                                        <span class="show-autocomplete tooltip-custom" data-toggle="tooltip"
                                            data-placement="top" title="Lời chúc gợi ý">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                                <path
                                                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1" />
                                            </svg>
                                        </span>
                                        <span class="hide-autocomplete tooltip-custom" style="display: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-lightbulb-off" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M2.23 4.35A6 6 0 0 0 2 6c0 1.691.7 3.22 1.826 4.31.203.196.359.4.453.619l.762 1.769A.5.5 0 0 0 5.5 13a.5.5 0 0 0 0 1 .5.5 0 0 0 0 1l.224.447a1 1 0 0 0 .894.553h2.764a1 1 0 0 0 .894-.553L10.5 15a.5.5 0 0 0 0-1 .5.5 0 0 0 0-1 .5.5 0 0 0 .288-.091L9.878 12H5.83l-.632-1.467a3 3 0 0 0-.676-.941 4.98 4.98 0 0 1-1.455-4.405zm1.588-2.653.708.707a5 5 0 0 1 7.07 7.07l.707.707a6 6 0 0 0-8.484-8.484zm-2.172-.051a.5.5 0 0 1 .708 0l12 12a.5.5 0 0 1-.708.708l-12-12a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </span>
                                        <span class="emoji-picker-button tooltip-custom" data-toggle="tooltip"
                                            data-placement="top" title="Chèn biểu tượng">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                <path
                                                    d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5" />
                                            </svg>
                                        </span>
                                        <div class="wishes-autocomplete-content" style="display: none;">
                                            <input type="text" id="searchWishSuggestions"
                                                onkeyup="searchWishSuggestionsFunction()" placeholder="Tìm kiếm...">
                                            <ul id="wishSuggestions">
                                                <li><a class="showContent" href="#">Chúc mừng hạnh phúc! Chúc
                                                        hai bạn trăm năm hạnh phúc!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng ngày trọng đại tới
                                                        hai bạn. Hạnh phúc bền lâu và trọn vẹn nhé!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng hạnh phúc hai bạn.
                                                        Chúc hai bạn bên nhau đầu bạc răng long, sớm có thiên thần nhỏ
                                                        nhé!</a></li>
                                                <li><a class="showContent" href="#">Chúc hai bạn ngày vui hạnh
                                                        phúc. Hãy yêu thương nhau thật nhiều và sống thật hạnh phúc
                                                        nha!</a></li>
                                                <li><a class="showContent" href="#">Chúc hai bạn sớm có con đàn
                                                        cháu đống, cửa nhà lúc nào cũng đầm ấm, yên vui nhé!</a></li>
                                                <li><a class="showContent" href="#">Thật vui vì cuối cùng ngày
                                                        này cũng tới với bạn. Tôi thành tâm chúc hai bạn thật nhiều hạnh
                                                        phúc và sống đời vui vẻ cùng nhau mãi mãi!</a></li>
                                                <li><a class="showContent" href="#">Một chương mới đã mở ra với
                                                        hai bạn rồi. Tôi mong cuộc sống mới của cả hai sẽ tràn ngập hy
                                                        vọng, hạnh phúc và niềm vui!</a></li>
                                                <li><a class="showContent" href="#">Chúc đôi trai tài gái sắc
                                                        hạnh phúc trọn vẹn, luôn yêu thương nhau thật nhiều!</a></li>
                                                <li><a class="showContent" href="#">Chia vui cùng bạn trong ngày
                                                        trọng đại này. Cầu mong cuộc sống sau này của 2 vợ chồng thật
                                                        thuận hòa, may mắn, làm ăn phát tài nha.</a></li>
                                                <li><a class="showContent" href="#">Tôi mong tình yêu của hai
                                                        bạn thật bền chặt, gắn bó để xây dựng tổ ấm yên bình, hạnh
                                                        phúc!</a></li>
                                                <li><a class="showContent" href="#">Hai bạn của tôi chắc chắn sẽ
                                                        có được nhiều hạnh phúc. Mong hai bạn có sức khỏe dồi dào, làm
                                                        ăn phát đạt và sớm có cháu cho ông bà bồng bế nhé!</a></li>
                                                <li><a class="showContent" href="#">Gửi lời chúc mừng chân thành
                                                        nhất tới bạn của tôi. Chúc hai bạn một cuộc sống thật tuyệt vời,
                                                        hòa thuận, gắn bó son sắt, thủy chung, hạnh phúc lâu dài.</a>
                                                </li>
                                                <li><a class="showContent" href="#">Nơi nào có yêu thương nơi đó
                                                        chắc chắn hạnh phúc. Hai bạn đã tìm được nơi đủ đầy yêu thương
                                                        rồi, hãy cùng nắm tay nhau đi hết cuộc đời nhé!</a></li>
                                                <li><a class="showContent" href="#">Khởi đầu một cuộc sống mới,
                                                        nguyện ước cho bạn của tôi những ngày tháng hạnh phúc phía trước
                                                        để cùng xây dựng tổ ấm với người bạn đời. Happy ending!</a></li>
                                                <li><a class="showContent" href="#">Mình tin rằng đây sẽ là khởi
                                                        đầu cho những điều tốt đẹp sắp tới trong cuộc sống của hai bạn.
                                                        Hãy yêu thương và cùng nhau vượt qua mọi khó khăn trong cuộc
                                                        sống nhé.</a></li>
                                                <li><a class="showContent" href="#">Hôn nhân đánh dấu sự kết
                                                        thúc một câu chuyện tình yêu và bắt đầu một trận đấu vật. Chúc
                                                        bạn những điều tốt đẹp nhất.</a></li>
                                                <li><a class="showContent" href="#">Tôi sẽ nói cho bạn bí mật
                                                        của một cuộc hôn nhân hạnh phúc. Đó vẫn là … một bí mật cho tất
                                                        cả! Chúc bạn tất cả những điều tốt đẹp nhất của thời gian phía
                                                        trước.</a></li>
                                                <li><a class="showContent" href="#">Hôn nhân thật đẹp. Cuối cùng
                                                        bạn đã tìm thấy một người mà bạn bị làm phiền suốt cuộc đời.</a>
                                                </li>
                                                <li><a class="showContent" href="#">Hai trở thành một: Một
                                                        giường, một điều khiển từ xa, một phòng tắm! Xin chúc mừng đám
                                                        cưới hai bạn.</a></li>
                                                <li><a class="showContent" href="#">Chúc đôi trai tài gái sắc
                                                        nhà mình hạnh phúc vẹn tròn, cung hỷ cung hỷ!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng anh trai của em đã
                                                        có người rước nhé. Em mong anh chị có cuộc sống vui vẻ, hạnh
                                                        phúc phía trước, làm ăn phát tài phát lộc.</a></li>
                                                <li><a class="showContent" href="#">Anh chị là một cặp trời
                                                        sinh, chắc chắn sau này sẽ rất hạnh phúc. Em chúc anh chị sức
                                                        khỏe dồi dào, làm ăn phát đạt và sớm có thiên thần nhỏ cho vui
                                                        cửa vui nhà.</a></li>
                                                <li><a class="showContent" href="#">Hôm nay là ngày vui của anh
                                                        chị và cũng là ngày em rất hạnh phúc. Chúc anh chị mãi yêu
                                                        thương nhau như bây giờ và đạt được mọi ước nguyện trong cuộc
                                                        sống.</a></li>
                                                <li><a class="showContent" href="#">Chúc anh/chị/em trăm năm
                                                        hạnh phúc, thuận vợ thuận chồng.</a></li>
                                                <li><a class="showContent" href="#">Hôm nay chú rể đẹp trai, cô
                                                        dâu xinh gái. Chúc mừng ngày thành hôn hai bạn tôi!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng đôi bạn trẻ nhé!
                                                        Mãi yêu thương nhau đến đầu bạc răng long bạn nha!</a></li>
                                                <li><a class="showContent" href="#">Thay mặt team (tên nhóm)
                                                        chúc hai bạn ngày ngày ân ái, bên nhau trọn đời.</a></li>
                                                <li><a class="showContent" href="#">Happy wedding! Chúc hai bạn
                                                        có cuộc sống mới ngập tràn tiếng cười và niềm vui, sớm có thiên
                                                        thần nhỏ bồng bé!</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="emoji-picker">
                                    <emoji-picker style="max-width: 100%;max-height: 350px;"
                                        class="light"></emoji-picker>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <button type="submit" class="p-2 w-50 btn btn-danger border-0" id="btn-submit-comment">
                                Gửi lời chúc
                            </button>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.</div>
                        </div>
                    </form>
                    <div class="mt-3 px-4 py-3 " id="show-comments">
                        @foreach ($wishes as $wish)
                            <div class="box-comment pb-3">
                                <h4 id="user-name-comment" class="mt-1">{{ $wish->name }}</h4>
                                <p id="comment-detail" class="m-0">
                                    {{ $wish->content }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>

        @include('wedding-sections.thank')
    </div>

    @include('wedding-sections.menu')

    @include('wedding-sections.donate-modal')

    @include('wedding-sections.menu-access')

    <script type="text/javascript">
        function parseJsonRecursively(jsonString) {
            let parsed = JSON.parse(jsonString);
            Object.keys(parsed).forEach(function(key) {
                try {
                    let checkValue = JSON.parse(parsed[key]);
                    if (checkValue && checkValue.constructor === Object) {
                        parsed[key] = checkValue;
                    }
                } catch (e) {

                }
            });
            return parsed;
        }
        let biicore = parseJsonRecursively(
            '{"template_id":"643d7aa30be61636f4051958","templatePremium":true,"themeRoot":"https:\/\/preview.iwedding.info\/templates\/template135","webroot":"https:\/\/preview.iwedding.info","coreSite":"https:\/\/biihappy.com","webToken":"61990349db8f76231c132068","isPremium":true,"bgMusic":"https:\/\/cdn.biihappy.com\/ziiweb\/wedding-musics\/IDo-911.mp3","alert":"{\\\"title\\\":\\\"L\\\\u1eddi c\\\\u1ea3m \\\\u01a1n t\\\\u1eeb D\\\\u00e2u & R\\\\u1ec3\\\",\\\"content\\\":\\\"Xin ch\\\\u00e2n th\\\\u00e0nh c\\\\u1ea3m \\\\u01a1n to\\\\u00e0n th\\\\u1ec3 m\\\\u1ecdi ng\\\\u01b0\\\\u1eddi \\\\u0111\\\\u00e3 g\\\\u1eedi l\\\\u1eddi ch\\\\u00fac cho v\\\\u1ee3 ch\\\\u1ed3ng ch\\\\u00fang em!\\\",\\\"timeout\\\":5000,\\\"status\\\":2,\\\"cancel_button_text\\\":\\\"\\\"}","effect":"{\\\"type\\\":\\\"snow\\\"}","logo":"https:\/\/iwedding.info\/common\/imgs\/bii.png?v=20210131","url_landing_page":"https:\/\/biihappy.com\/iwedding","isAutoPlay":true,"footer_title":"iWedding | N\u1ec1n t\u1ea3ng t\u1ea1o website \u0111\u00e1m c\u01b0\u1edbi mi\u1ec5n ph\u00ed t\u1eeb Biihappy","footer_title_mobile":"T\u1ea1o website \u0111\u00e1m c\u01b0\u1edbi mi\u1ec5n ph\u00ed"}'
        );
    </script>
    <script src="https://preview.iwedding.info/common/calendar.js?v=20241021"></script>
    <script src="https://preview.iwedding.info/common/biicommon.min.js?v=20241021"></script>
    <script src="https://preview.iwedding.info/templates/template135/js/libs.js"></script>
    <script src="https://preview.iwedding.info/templates/template135/js/script.js"></script>
    <script src="https://preview.iwedding.info/common/emoji-picker/js/insertTextAtCursor.js?v=20241021"></script>
    <script type="module" src="https://preview.iwedding.info/common/emoji-picker/js/init.js?v=20241021"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</body>

</html>
