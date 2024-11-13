@php
    $invitationRoute = 'javascript:void(0)';
    if (isset($customer)) {
        $invitationRoute = route('confirm', ['customer' => $customer->id]);
    }
@endphp

<div id="menu-access" class="">
    <div class="btn-menu-open">
        <i class="bi bi-list text-white"></i>
    </div>
    <div class="btn-menu-close">
        <i class="bi bi-x-lg text-white"></i>
    </div>
    <ul class="p-0 m-0 list-menu-icon">
        <li class="text-center">
            <a href="#wishes" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Gửi lời chúc</span>
                    <img class="access-icon" src="https://cdn.biihappy.com/ziiweb/images/static/common/wishes.png"
                        alt="">
                </span>
            </a>
        </li>
        <li class="text-center">
            <a href="{{ $invitationRoute }}" target="_blank" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Xác nhận tham dự</span>
                    <img class="access-icon" src="https://cdn.biihappy.com/ziiweb/images/static/common/rsvp4.png"
                        alt="">
                </span>
            </a>
        </li>

        <li class="text-center">
            <a href="javascript:void(0)" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Mừng cưới</span>
                    <img class="access-icon buttonDonate"
                        src="https://cdn.biihappy.com/ziiweb/images/static/common/money_bag.png" alt="">
                </span>
            </a>
        </li>
    </ul>
</div>