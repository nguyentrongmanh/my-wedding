@php
    $pronouce = 'chúng mình';
    if (isset($customer) && $customer->friend_of == 3) {
        $pronouce = 'con chúng mình';
    }
@endphp
<section class="py-5 invitation-section section-bg-affect" id="invitation">
    <div class="container-fluid">
        <div class="w-100">
            <div data-aos="fade-up" class="invation-title">
                <h3 class="text-center title m-0">Lời Ngỏ</h3>
                <p class="text-center m-0">

                </p>
            </div>
            <div>
                <div data-aos="fade-up" class="invitation-content my-5 text-center sub-title">
                   Chúng mình biết bạn rất bận rộn<br /> Nhưng thực sự sẽ rất tuyệt vời nếu như <br /> ngày Hạnh Phúc của {{ $pronouce }} <br /> có sự hiện diện của bạn.
                </div>
                <div data-aos="fade-up" class="couple-img mb-5">
                    <img
                        src="{{ asset('images/wedding/invitation.png') }}">
                </div>
                <div data-aos="fade-up" class="section-title invitation-couple text-center my-5 fs-4">
                    <p>*Groom/<span> Trọng Mạnh</span></p>
                    <p>*Bride/<span> Phạm Hiền</span></p>
                </div>
            </div>
        </div>
    </div>
</section>