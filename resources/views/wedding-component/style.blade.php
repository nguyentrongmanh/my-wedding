<style id="style_ladi" type="text/css">
    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    button,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    iframe,
    img,
    input,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    select,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    textarea,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block
    }

    body {
        line-height: 1
    }

    a {
        text-decoration: none
    }

    ol,
    ul {
        list-style: none
    }

    blockquote,
    q {
        quotes: none
    }

    blockquote:after,
    blockquote:before,
    q:after,
    q:before {
        content: '';
        content: none
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    .ladi-loading {
        z-index: 900000000000;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, .1)
    }

    .ladi-loading .loading {
        width: 80px;
        height: 80px;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        overflow: hidden;
        position: absolute
    }

    .ladi-loading .loading div {
        position: absolute;
        width: 6px;
        height: 6px;
        background: #fff;
        border-radius: 50%;
        animation: ladi-loading 1.2s linear infinite
    }

    .ladi-loading .loading div:nth-child(1) {
        animation-delay: 0s;
        top: 37px;
        left: 66px
    }

    .ladi-loading .loading div:nth-child(2) {
        animation-delay: -.1s;
        top: 22px;
        left: 62px
    }

    .ladi-loading .loading div:nth-child(3) {
        animation-delay: -.2s;
        top: 11px;
        left: 52px
    }

    .ladi-loading .loading div:nth-child(4) {
        animation-delay: -.3s;
        top: 7px;
        left: 37px
    }

    .ladi-loading .loading div:nth-child(5) {
        animation-delay: -.4s;
        top: 11px;
        left: 22px
    }

    .ladi-loading .loading div:nth-child(6) {
        animation-delay: -.5s;
        top: 22px;
        left: 11px
    }

    .ladi-loading .loading div:nth-child(7) {
        animation-delay: -.6s;
        top: 37px;
        left: 7px
    }

    .ladi-loading .loading div:nth-child(8) {
        animation-delay: -.7s;
        top: 52px;
        left: 11px
    }

    .ladi-loading .loading div:nth-child(9) {
        animation-delay: -.8s;
        top: 62px;
        left: 22px
    }

    .ladi-loading .loading div:nth-child(10) {
        animation-delay: -.9s;
        top: 66px;
        left: 37px
    }

    .ladi-loading .loading div:nth-child(11) {
        animation-delay: -1s;
        top: 62px;
        left: 52px
    }

    .ladi-loading .loading div:nth-child(12) {
        animation-delay: -1.1s;
        top: 52px;
        left: 62px
    }

    @keyframes ladi-loading {
        0%,
        100%,
        20%,
        80% {
            transform: scale(1)
        }
        50% {
            transform: scale(1.5)
        }
    }

    .ladipage-message {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 10000000000;
        background: rgba(0, 0, 0, .3)
    }

    .ladipage-message .ladipage-message-box {
        width: 400px;
        max-width: calc(100% - 50px);
        height: 160px;
        border: 1px solid rgba(0, 0, 0, .3);
        background-color: #fff;
        position: fixed;
        top: calc(50% - 155px);
        left: 0;
        right: 0;
        margin: auto;
        border-radius: 10px
    }

    .ladipage-message .ladipage-message-box span {
        display: block;
        background-color: rgba(6, 21, 40, .05);
        color: #000;
        padding: 12px 15px;
        font-weight: 600;
        font-size: 16px;
        line-height: 16px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px
    }

    .ladipage-message .ladipage-message-box .ladipage-message-text {
        display: -webkit-box;
        font-size: 14px;
        padding: 0 20px;
        margin-top: 10px;
        line-height: 18px;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-word
    }

    .ladipage-message .ladipage-message-box .ladipage-message-close {
        display: block;
        position: absolute;
        right: 15px;
        bottom: 10px;
        margin: 0 auto;
        padding: 10px 0;
        border: none;
        width: 80px;
        text-transform: uppercase;
        text-align: center;
        color: #000;
        background-color: #e6e6e6;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        line-height: 14px;
        font-weight: 600;
        cursor: pointer;
        outline: 0
    }

    .lightbox-screen {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        z-index: 9000000080;
        background: rgba(0, 0, 0, .5)
    }

    .lightbox-screen .lightbox-close {
        position: absolute;
        z-index: 9000000090;
        cursor: pointer
    }

    .lightbox-screen .lightbox-hidden {
        display: none
    }

    .lightbox-screen .lightbox-close {
        width: 16px;
        height: 16px;
        margin: 10px;
        background-repeat: no-repeat;
        background-position: center center;
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
    }

    body {
        font-size: 12px;
        -ms-text-size-adjust: none;
        -moz-text-size-adjust: none;
        -o-text-size-adjust: none;
        -webkit-text-size-adjust: none;
        background-color: #fff;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .ladi-transition {
        transition: all 150ms linear 0s;
    }

    .z-index-1 {
        z-index: 1;
    }

    .opacity-0 {
        opacity: 0;
    }

    .height-0 {
        height: 0 !important;
    }

    .pointer-events-none {
        pointer-events: none;
    }

    .transition-parent-collapse-height {
        transition: height 150ms linear 0s;
    }

    .transition-parent-collapse-top {
        transition: top 150ms linear 0s;
    }

    .transition-readmore {
        transition: height 350ms linear 0s;
    }

    .transition-collapse {
        transition: height 150ms linear 0s;
    }

    body.grab {
        cursor: grab;
    }

    .ladi-wraper {
        width: 100%;
        min-height: 100%;
        overflow: hidden;
    }

    .ladi-container {
        position: relative;
        margin: 0 auto;
        height: 100%;
    }

    .ladi-overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        pointer-events: none;
    }

    .ladi-element {
        position: absolute;
    }

    @media (hover: hover) {
        .ladi-check-hover {
            opacity: 0;
        }
    }

    .ladi-section {
        margin: 0 auto;
        position: relative;
    }

    .ladi-section[data-tab-id] {
        display: none;
    }

    .ladi-section.selected[data-tab-id] {
        display: block;
    }

    .ladi-section .ladi-section-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        overflow: hidden;
    }

    .ladi-gallery {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .ladi-gallery .ladi-gallery-view {
        position: absolute;
        overflow: hidden;
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 100%;
        height: 100%;
        position: relative;
        display: none;
        transition: transform 500ms ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px;
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video {
        cursor: pointer;
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 60px;
        height: 60px;
        background: url(https://w.ladicdn.com/source/ladipage-play.svg?v=1.0) no-repeat center center;
        background-size: contain;
        pointer-events: none;
        cursor: pointer;
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.right {
        left: 0;
        transform: translate3d(100%, 0, 0);
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.left {
        left: 0;
        transform: translate3d(-100%, 0, 0);
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next.left,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev.right,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected {
        left: 0;
        transform: translate3d(0, 0, 0);
    }

    .ladi-gallery .ladi-gallery-view>.selected,
    .ladi-gallery .ladi-gallery-view>.next,
    .ladi-gallery .ladi-gallery-view>.prev {
        display: block;
    }

    .ladi-gallery .ladi-gallery-view>.selected {
        left: 0;
    }

    .ladi-gallery .ladi-gallery-view>.next,
    .ladi-gallery .ladi-gallery-view>.prev {
        position: absolute;
        top: 0;
        width: 100%;
    }

    .ladi-gallery .ladi-gallery-view>.next {
        left: 100%;
    }

    .ladi-gallery .ladi-gallery-view>.prev {
        left: -100%;
    }

    .ladi-gallery .ladi-gallery-view>.next.left,
    .ladi-gallery .ladi-gallery-view>.prev.right {
        left: 0;
    }

    .ladi-gallery .ladi-gallery-view>.selected.left {
        left: -100%;
    }

    .ladi-gallery .ladi-gallery-view>.selected.right {
        left: 100%;
    }

    .ladi-gallery .ladi-gallery-control {
        position: absolute;
        overflow: hidden;
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow {
        position: absolute;
        top: calc(50% - (33px) / 2);
        cursor: pointer;
        z-index: 90000040;
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left {
        left: 5px;
        transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right {
        right: 5px;
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow {
        position: absolute;
        cursor: pointer;
        z-index: 90000040;
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box {
        position: relative;
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        float: left;
        position: relative;
        cursor: pointer;
        filter: invert(15%);
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 30px;
        height: 30px;
        background: url(https://w.ladicdn.com/source/ladipage-play.svg?v=1.0) no-repeat center center;
        background-size: contain;
        pointer-events: none;
        cursor: pointer;
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover {
        filter: none;
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected {
        filter: none;
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child {
        margin-right: 0 !important;
        margin-bottom: 0 !important;
        ;
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow,
    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow {
        width: 33px;
        height: 33px;
        background-repeat: no-repeat;
        background-position: center center;
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M7.00015%200.585938L18.4144%2012.0002L7.00015%2023.4144L5.58594%2022.0002L15.5859%2012.0002L5.58594%202.00015L7.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-view {
        top: 0;
        width: 100%;
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control {
        width: 100%;
        bottom: 0;
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow {
        top: calc(50% - (33px) / 2);
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left {
        left: 0px;
        transform: rotateY(180deg) scale(0.6);
        -webkit-transform: rotateY(180deg) scale(0.6);
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right {
        right: 0px;
        transform: scale(0.6);
        -webkit-transform: scale(0.6);
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box {
        display: -webkit-inline-flex;
        display: inline-flex;
        left: 0;
        transition: left 150ms ease-in-out;
    }

    .ladi-box {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    #SECTION_POPUP .ladi-container {
        z-index: 90000070;
    }

    #SECTION_POPUP .ladi-container>.ladi-element {
        z-index: 90000070;
        position: fixed;
        display: none;
    }

    #SECTION_POPUP .ladi-container>.ladi-element[data-fixed-close="true"] {
        position: relative !important;
    }

    #SECTION_POPUP .ladi-container>.ladi-element.hide-visibility {
        display: block !important;
        visibility: hidden !important;
    }

    #SECTION_POPUP .popup-close {
        position: absolute;
        right: 0px;
        top: 0px;
        z-index: 9000000080;
        cursor: pointer;
        width: 16px;
        height: 16px;
        margin: 10px;
        background-repeat: no-repeat;
        background-position: center center;
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
    }

    .ladi-popup {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .ladi-popup .ladi-popup-background {
        height: 100%;
        width: 100%;
        pointer-events: none;
    }

    .ladi-countdown {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
    }

    .ladi-countdown .ladi-countdown-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
        display: table;
        pointer-events: none;
    }

    .ladi-countdown .ladi-countdown-text {
        position: absolute;
        width: 100%;
        height: 100%;
        text-decoration: inherit;
        display: table;
        pointer-events: none;
    }

    .ladi-countdown .ladi-countdown-text span {
        display: table-cell;
        vertical-align: middle;
    }

    .ladi-countdown>.ladi-element {
        text-decoration: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
        position: relative;
        display: inline-block;
    }

    .ladi-countdown>.ladi-element:last-child {
        margin-right: 0px !important;
    }

    .ladi-button {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .ladi-button:active {
        transform: translateY(2px);
        transition: transform 0.2s linear;
    }

    .ladi-button .ladi-button-background {
        height: 100%;
        width: 100%;
        pointer-events: none;
        transition: inherit;
    }

    .ladi-button>.ladi-button-headline,
    .ladi-button>.ladi-button-shape {
        width: 100% !important;
        height: 100% !important;
        top: 0 !important;
        left: 0 !important;
        display: table;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .ladi-button>.ladi-button-shape .ladi-shape {
        margin: auto;
        top: 0;
        bottom: 0;
    }

    .ladi-button>.ladi-button-headline .ladi-headline {
        display: table-cell;
        vertical-align: middle;
    }

    .ladi-form {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .ladi-form>.ladi-element {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form .ladi-button>.ladi-button-headline {
        color: initial;
        font-size: initial;
        font-weight: initial;
        text-transform: initial;
        text-decoration: initial;
        font-style: initial;
        text-align: initial;
        letter-spacing: initial;
        line-height: initial;
    }

    .ladi-form>.ladi-element .ladi-form-item-container {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form>[data-quantity="true"] .ladi-form-item-container {
        overflow: hidden;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item-background {
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-size: 9px 6px !important;
        background-position: right .5rem center;
        background-repeat: no-repeat;
        padding-right: 24px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2 {
        width: calc(100% / 2 - 5px);
        max-width: calc(100% / 2 - 5px);
        min-width: calc(100% / 2 - 5px);
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2:nth-child(3) {
        margin-left: 7.5px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3 {
        width: calc(100% / 3 - 5px);
        max-width: calc(100% / 3 - 5px);
        min-width: calc(100% / 3 - 5px);
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3) {
        margin-left: 7.5px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4) {
        margin-left: 7.5px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option {
        color: initial;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select) {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
        text-transform: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]) {
        text-decoration: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
        vertical-align: middle;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-box-item {
        display: inline-block;
        width: fit-content;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span {
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked="true"] {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked="false"] {
        text-transform: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
    }

    .ladi-form .ladi-form-item-container {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .ladi-form .ladi-form-item-title-value {
        font-weight: bold;
        word-break: break-word;
    }

    .ladi-form .ladi-form-label-container {
        position: relative;
        width: 100%;
    }

    .ladi-form .ladi-form-control-file {
        background-repeat: no-repeat;
        background-position: calc(100% - 5px) center;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item {
        display: inline-block;
        cursor: pointer;
        position: relative;
        border-radius: 0px !important;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.image {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.no-value {
        display: none !important;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.text.disabled {
        opacity: 0.35;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.image.disabled {
        opacity: 0.2;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.color.disabled {
        opacity: 0.15;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:before {
        content: '';
        width: 0;
        height: 0;
        bottom: -1px;
        right: -1px;
        position: absolute;
        border-width: 0 0 15px 15px;
        border-color: transparent;
        border-style: solid;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:after {
        content: '';
        background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 12 12' viewBox='0 0 12 12' x='0' fill='%23fff' y='0'%3E%3Cg%3E%3Cpath d='m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: bottom right;
        width: 7px;
        height: 7px;
        bottom: 0;
        right: 0;
        position: absolute;
    }

    .ladi-form .ladi-form-item {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .ladi-form .ladi-form-item-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox {
        height: auto;
    }

    .ladi-form .ladi-form-item .ladi-form-control {
        background-color: transparent;
        min-width: 100%;
        min-height: 100%;
        max-width: 100%;
        max-height: 100%;
        width: 100%;
        height: 100%;
        padding: 0 5px;
        color: inherit;
        font-size: inherit;
        border: none;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox {
        padding: 0 5px;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item {
        margin-top: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        display: flex;
        align-items: center;
        border: none;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item {
        margin-top: 0 !important;
        margin-left: 0 !important;
        margin-right: 10px !important;
        display: inline-flex;
        align-items: center;
        border: none;
        position: relative;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input {
        margin-right: 5px;
        display: block;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
        cursor: default;
        word-break: break-word;
    }

    .ladi-form .ladi-form-item textarea.ladi-form-control {
        resize: none;
        padding: 5px;
    }

    .ladi-form .ladi-button {
        cursor: pointer;
    }

    .ladi-form .ladi-button .ladi-headline {
        cursor: pointer;
        user-select: none;
    }

    .ladi-form .ladi-element .ladi-form-otp::-webkit-outer-spin-button,
    .ladi-form .ladi-element .ladi-form-otp::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .ladi-form .ladi-element .ladi-form-item .button-get-code {
        display: none;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto 0;
        line-height: initial;
        padding: 5px 10px;
        height: max-content;
        cursor: pointer;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .ladi-form .ladi-element .ladi-form-item .button-get-code.hide-visibility {
        display: block !important;
        visibility: hidden !important;
    }

    .ladi-form .ladi-form-item.otp-resend .button-get-code {
        display: block;
    }

    .ladi-form .ladi-form-item.otp-countdown:before {
        content: attr(data-countdown-time) "s";
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto 0;
        height: max-content;
        line-height: initial;
    }

    .ladi-form [data-variant="true"] select option[disabled] {
        background: #fff;
        color: #b8b8b8 !important;
    }

    .ladi-google-recaptcha-checkbox {
        position: absolute;
        display: inline-block;
        transform: translateY(-100%);
        margin-top: -5px;
        z-index: 90000010;
    }

    .ladi-element[data-form-checkout-item] {
        padding: 0;
    }

    .ladi-form .ladi-form-checkout-title {
        margin-bottom: 8px;
    }

    .ladi-form .ladi-element[data-form-checkout-item] .ladi-form-item-container,
    .ladi-form .ladi-element[data-form-checkout-item] .ladi-form-item {
        height: auto !important;
        position: unset !important;
    }

    .ladi-form .ladi-form-checkout-box {
        gap: 12px;
        display: flex;
        flex-flow: column;
        margin: 8px 12px;
        margin-top: 14px !important;
        padding-bottom: 14px;
        border-left: none !important;
        border-right: none !important;
        border-top: none !important;
        border-radius: 0 !important;
    }

    .ladi-form .ladi-form-checkout-box:last-child {
        border: none !important;
        padding-bottom: 4px;
    }

    .ladi-form .ladi-form-checkout-box:first-child {
        margin-top: 0;
    }

    .ladi-form .ladi-form-checkout-payment-item {
        display: flex;
        flex-flow: row;
        gap: 12px;
        align-items: center;
        --check-size: 18px;
        --width-quantity: 60px;
    }

    .ladi-form .ladi-form-checkout-payment-check {
        --border-size: 1px;
        width: var(--check-size);
        height: var(--check-size);
        flex: 0 0 var(--check-size);
        border: var(--border-size) solid;
        border-radius: 100%;
        display: block;
        position: relative;
    }

    .ladi-form .ladi-form-checkout-payment-check.checked:before {
        content: "";
        width: calc(var(--check-size) / 2);
        height: calc(var(--check-size) / 2);
        border-radius: inherit;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(calc(50% - var(--border-size)), calc(50% - var(--border-size)));
    }

    .ladi-form .ladi-form-checkout-payment-check.multiple {
        border-radius: 4px;
    }

    .ladi-form .ladi-form-checkout-payment-check.multiple.checked:before {
        content: "";
        --url: url("data:image/svg+xml,%0A%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Cpath%20d%3D%22M18.71%207.20998C18.617%207.11625%2018.5064%207.04186%2018.3846%206.99109C18.2627%206.94032%2018.132%206.91418%2018%206.91418C17.868%206.91418%2017.7373%206.94032%2017.6154%206.99109C17.4936%207.04186%2017.383%207.11625%2017.29%207.20998L9.84%2014.67L6.71%2011.53C6.61348%2011.4367%206.49954%2011.3634%206.37468%2011.3142C6.24983%2011.265%206.1165%2011.2409%205.98232%2011.2432C5.84814%2011.2455%205.71573%2011.2743%205.59265%2011.3278C5.46957%2011.3812%205.35824%2011.4585%205.265%2011.555C5.17176%2011.6515%205.09845%2011.7654%205.04924%2011.8903C5.00004%2012.0152%204.97591%2012.1485%204.97823%2012.2827C4.98055%2012.4168%205.00928%2012.5492%205.06277%2012.6723C5.11627%2012.7954%205.19348%2012.9067%205.29%2013L9.13%2016.84C9.22296%2016.9337%209.33356%2017.0081%209.45542%2017.0589C9.57728%2017.1096%209.70799%2017.1358%209.84%2017.1358C9.97201%2017.1358%2010.1027%2017.1096%2010.2246%2017.0589C10.3464%2017.0081%2010.457%2016.9337%2010.55%2016.84L18.71%208.67998C18.8115%208.58634%2018.8925%208.47269%2018.9479%208.34619C19.0033%208.21969%2019.0319%208.08308%2019.0319%207.94498C19.0319%207.80688%2019.0033%207.67028%2018.9479%207.54378C18.8925%207.41728%2018.8115%207.30363%2018.71%207.20998Z%22%20fill%3D%22%231852FA%22%2F%3E%0A%3C%2Fsvg%3E%0A");
        -webkit-mask-image: var(--url);
        mask-image: var(--url);
        width: var(--check-size);
        height: var(--check-size);
        -webkit-mask-size: var(--check-size);
        mask-size: var(--check-size);
        pointer-events: none;
        background-color: #fff;
        position: absolute;
        top: -1px;
        left: -1px;
        transform: none;
    }

    .ladi-form .ladi-form-checkout-payment-content {
        display: flex;
        flex-flow: row;
        --gap: 10px;
        gap: var(--gap);
        align-items: center;
        width: calc(100% - var(--width-quantity) - var(--check-size) - var(--gap) * 2);
    }

    .ladi-form .ladi-form-checkout-payment-content img {
        width: 36px;
        max-height: 36px;
        border-radius: 4px;
    }

    .ladi-form .ladi-form-checkout-payment-content div {
        display: flex;
        flex-flow: column;
    }

    .ladi-form .ladi-form-checkout-payment-content div>span {
        font-size: inherit;
    }

    .ladi-form .ladi-form-checkout-payment-content div>span.small {
        font-size: 80%;
        opacity: 0.8;
    }

    .ladi-form .ladi-form-checkout-payment-content div .price.price-compare {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-direction: row !important;
    }

    .ladi-form .ladi-form-checkout-payment-quantity {
        position: relative;
        --icon-size: calc(var(--check-size) * 0.8);
    }

    .ladi-form .ladi-form-checkout-payment-quantity input {
        padding: 4px calc(var(--check-size) + 10px) 4px 8px;
        border-radius: 8px;
        position: relative;
        width: var(--width-quantity);
        min-height: 34px;
        border: 1px solid;
        background-color: transparent;
        top: 0;
        left: 0;
        display: block;
    }

    .ladi-form .ladi-form-checkout-payment-quantity input::-webkit-outer-spin-button,
    .ladi-form .ladi-form-checkout-payment-quantity input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .ladi-form .ladi-form-checkout-payment-quantity .up {
        width: var(--icon-size);
        height: var(--icon-size);
        top: -1px;
        right: 5px;
        cursor: pointer;
        display: block;
        position: absolute;
    }

    .ladi-form .ladi-form-checkout-payment-quantity .up:before {
        content: '';
        --url: url("data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M3.14645%206.14645C3.34171%205.95118%203.65829%205.95118%203.85355%206.14645L8%2010.2929L12.1464%206.14645C12.3417%205.95118%2012.6583%205.95118%2012.8536%206.14645C13.0488%206.34171%2013.0488%206.65829%2012.8536%206.85355L8.35355%2011.3536C8.15829%2011.5488%207.84171%2011.5488%207.64645%2011.3536L3.14645%206.85355C2.95118%206.65829%202.95118%206.34171%203.14645%206.14645Z%22%20fill%3D%22black%22%20transform%3D%22rotate(180%208%208)%22%2F%3E%3C%2Fsvg%3E");
        -webkit-mask-image: var(--url);
        mask-image: var(--url);
        display: block;
        position: absolute;
        width: var(--icon-size);
        height: var(--icon-size);
        pointer-events: none;
        top: 4px;
        left: 2px;
        -webkit-mask-size: var(--icon-size);
        mask-size: var(--icon-size);
    }

    .ladi-form .ladi-form-checkout-payment-quantity .down {
        width: var(--icon-size);
        height: var(--icon-size);
        right: 5px;
        cursor: pointer;
        display: block;
        position: absolute;
        bottom: 3px;
    }

    .ladi-form .ladi-form-checkout-payment-quantity .down:before {
        content: '';
        --url: url("data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M3.14645%206.14645C3.34171%205.95118%203.65829%205.95118%203.85355%206.14645L8%2010.2929L12.1464%206.14645C12.3417%205.95118%2012.6583%205.95118%2012.8536%206.14645C13.0488%206.34171%2013.0488%206.65829%2012.8536%206.85355L8.35355%2011.3536C8.15829%2011.5488%207.84171%2011.5488%207.64645%2011.3536L3.14645%206.85355C2.95118%206.65829%202.95118%206.34171%203.14645%206.14645Z%22%20fill%3D%22black%22%2F%3E%0A%3C%2Fsvg%3E");
        -webkit-mask-image: var(--url);
        mask-image: var(--url);
        display: block;
        position: absolute;
        width: var(--icon-size);
        height: var(--icon-size);
        pointer-events: none;
        left: 2px;
        -webkit-mask-size: var(--icon-size);
        mask-size: var(--icon-size);
    }

    .ladi-form [data-form-checkout-item="payment"] .ladi-form-item {
        display: table;
    }

    .ladi-form [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content {
        width: calc(100% - 18px);
    }

    .ladi-form [data-form-checkout-item="payment"] .ladi-form-checkout-payment-content div>span {
        display: block;
    }

    .ladi-form [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content div {
        display: table-cell;
        vertical-align: middle;
        padding: 0 6px;
        cursor: pointer;
        width: 100%;
        position: relative;
    }

    .ladi-form [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content div.arrow:before {
        content: '';
        --url: url("data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M6.14645%203.14645C6.34171%202.95118%206.65829%202.95118%206.85355%203.14645L11.3536%207.64645C11.5488%207.84171%2011.5488%208.15829%2011.3536%208.35355L6.85355%2012.8536C6.65829%2013.0488%206.34171%2013.0488%206.14645%2012.8536C5.95118%2012.6583%205.95118%2012.3417%206.14645%2012.1464L10.2929%208L6.14645%203.85355C5.95118%203.65829%205.95118%203.34171%206.14645%203.14645Z%22%20fill%3D%22black%22%2F%3E%0A%3C%2Fsvg%3E");
        -webkit-mask-image: var(--url);
        mask-image: var(--url);
        position: absolute;
        width: 20px;
        height: 20px;
        top: 0;
        right: 0;
        bottom: 0;
        display: block;
        margin: auto;
        -webkit-mask-size: 100%;
        mask-size: 100%;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgb(0%2C%200%2C%200)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
    }

    .ladi-video {
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
        overflow: hidden;
    }

    .ladi-video .ladi-video-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .button-unmute {
        cursor: pointer;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .button-unmute div {
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2036%2036%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22m%2021.48%2C17.98%20c%200%2C-1.77%20-1.02%2C-3.29%20-2.5%2C-4.03%20v%202.21%20l%202.45%2C2.45%20c%20.03%2C-0.2%20.05%2C-0.41%20.05%2C-0.63%20z%20m%202.5%2C0%20c%200%2C.94%20-0.2%2C1.82%20-0.54%2C2.64%20l%201.51%2C1.51%20c%20.66%2C-1.24%201.03%2C-2.65%201.03%2C-4.15%200%2C-4.28%20-2.99%2C-7.86%20-7%2C-8.76%20v%202.05%20c%202.89%2C.86%205%2C3.54%205%2C6.71%20z%20M%209.25%2C8.98%20l%20-1.27%2C1.26%204.72%2C4.73%20H%207.98%20v%206%20H%2011.98%20l%205%2C5%20v%20-6.73%20l%204.25%2C4.25%20c%20-0.67%2C.52%20-1.42%2C.93%20-2.25%2C1.18%20v%202.06%20c%201.38%2C-0.31%202.63%2C-0.95%203.69%2C-1.81%20l%202.04%2C2.05%201.27%2C-1.27%20-9%2C-9%20-7.72%2C-7.72%20z%20m%207.72%2C.99%20-2.09%2C2.08%202.09%2C2.09%20V%209.98%20z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
        width: 60px;
        height: 60px;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 100%;
        background-size: 90%;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .ladi-group {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .ladi-shape {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .ladi-cart-number {
        position: absolute;
        top: -2px;
        right: -7px;
        background: #f36e36;
        text-align: center;
        width: 18px;
        height: 18px;
        line-height: 18px;
        font-size: 12px;
        font-weight: bold;
        color: #fff;
        border-radius: 100%;
    }

    .ladi-image {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .ladi-image .ladi-image-background {
        background-repeat: no-repeat;
        background-position: left top;
        background-size: cover;
        background-attachment: scroll;
        background-origin: content-box;
        position: absolute;
        margin: 0 auto;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .ladi-headline {
        width: 100%;
        display: inline-block;
        word-break: break-word;
        background-size: cover;
        background-position: center center;
    }

    .ladi-headline a {
        text-decoration: underline;
    }

    .ladi-paragraph {
        width: 100%;
        display: inline-block;
        word-break: break-word;
    }

    .ladi-paragraph a {
        text-decoration: underline;
    }

    .ladi-line {
        position: relative;
    }

    .ladi-line .ladi-line-container {
        border-bottom: 0 !important;
        border-right: 0 !important;
        width: 100%;
        height: 100%;
    }


    .ladi-notify {
        display: none !important;
    }

    a[data-action] {
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        cursor: pointer
    }

    a:visited {
        color: inherit
    }

    a:link {
        color: inherit
    }

    [data-opacity="0"] {
        opacity: 0
    }

    [data-hidden="true"] {
        display: none
    }

    [data-action="true"] {
        cursor: pointer
    }

    .ladi-hidden {
        display: none
    }

    .ladi-animation-hidden {
        visibility: hidden !important;
        opacity: 0 !important
    }

    .element-click-selected {
        cursor: pointer
    }

    .is-2nd-click {
        cursor: pointer
    }

    .ladi-button-shape.is-2nd-click,
    .ladi-accordion-shape.is-2nd-click {
        z-index: 1
    }

    .backdrop-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 90000060
    }

    .backdrop-dropbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 90000040
    }

    .ladi-lazyload {
        background-image: none !important;
    }

    .ladi-list-paragraph ul li.ladi-lazyload:before {
        background-image: none !important;
    }

    @media (min-width: 768px) {
        .ladi-gallery-fullwidth {
            width: 100vw !important;
            left: calc(-50vw + 50%) !important;
            box-sizing: border-box !important;
            transform: none !important;
        }
        .ladi-gallery-fullwidth .ladi-gallery-view-item {
            transition-duration: 1500ms;
        }
    }

    @media (max-width: 767px) {
        .ladi-element.ladi-auto-scroll {
            overflow-x: auto;
            overflow-y: hidden;
            width: 100% !important;
            left: 0 !important;
            -webkit-overflow-scrolling: touch;
        }
        [data-hint]:not([data-timeout-id-copied]):before,
        [data-hint]:not([data-timeout-id-copied]):after {
            display: none !important;
        }
        .ladi-section.ladi-auto-scroll {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }
        .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item {
            transition: transform 300ms ease-in-out;
        }
    }
</style>
<style type="text/css" id="style_animation">
    @media (min-width: 768px) {
        #HEADLINE8,
        #HEADLINE10,
        #IMAGE12,
        #IMAGE40,
        #IMAGE42,
        #IMAGE43,
        #IMAGE44,
        #IMAGE45,
        #IMAGE46,
        #IMAGE47,
        #BOX48,
        #BOX50,
        #IMAGE53,
        #IMAGE105,
        #SHAPE144,
        #IMAGE95,
        #GROUP274,
        #GROUP277,
        #SHAPE288,
        #SHAPE292,
        #SHAPE300,
        #GROUP316,
        #BUTTON336,
        #BUTTON339,
        #BUTTON340,
        #IMAGE30,
        #HEADLINE23,
        #GROUP256,
        #HEADLINE337,
        #VIDEO335,
        #PARAGRAPH335,
        #COUNTDOWN335,
        #PARAGRAPH336,
        #PARAGRAPH337,
        #PARAGRAPH338,
        #PARAGRAPH339,
        #SECTION339,
        #GROUP335,
        #HEADLINE339,
        #PARAGRAPH345,
        #HEADLINE340,
        #SHAPE337,
        #SHAPE338,
        #SHAPE342,
        #IMAGE340,
        #IMAGE341,
        #GROUP348,
        #GROUP349,
        #PARAGRAPH350,
        #PARAGRAPH355,
        #HEADLINE353,
        #PARAGRAPH359,
        #BOX345,
        #IMAGE345,
        #SHAPE353,
        #IMAGE354,
        #IMAGE355,
        #IMAGE356,
        #IMAGE361,
        #IMAGE362,
        #PARAGRAPH364,
        #SHAPE355,
        #IMAGE364,
        #SHAPE356,
        #SHAPE357,
        #HEADLINE367,
        #PARAGRAPH366,
        #PARAGRAPH370,
        #SHAPE363,
        #IMAGE374,
        #POPUP348,
        #GROUP394,
        #GROUP395,
        #GROUP396,
        #GROUP397,
        #SHAPE377,
        #SHAPE378,
        #GROUP400,
        #IMAGE378,
        #PARAGRAPH395,
        #PARAGRAPH396,
        #HEADLINE386,
        #BOX373,
        #GROUP406,
        #BOX374,
        #GROUP407,
        #BOX375,
        #GROUP408,
        #BOX376,
        #GROUP412,
        #BOX377,
        #GROUP413,
        #BOX378,
        #GROUP414,
        #SHAPE386,
        #GROUP416,
        #GROUP418,
        #GROUP421,
        #HEADLINE390,
        #PARAGRAPH401,
        #FORM339,
        #BOX383,
        #BOX384,
        #HEADLINE393,
        #SHAPE395,
        #PARAGRAPH404,
        #FORM340,
        #HEADLINE395,
        #HEADLINE396,
        #IMAGE385,
        #GROUP426,
        #SHAPE396,
        #VIDEO339,
        #PARAGRAPH407,
        #PARAGRAPH408,
        #SHAPE397,
        #HEADLINE397,
        #SHAPE398,
        #PARAGRAPH409,
        #SHAPE401,
        #PARAGRAPH410,
        #GROUP428,
        #SHAPE402,
        #GROUP429,
        #PARAGRAPH411,
        #HEADLINE398,
        #IMAGE391,
        #GROUP432,
        #GROUP435,
        #GROUP436 {
            opacity: 0 !important;
            pointer-events: none !important;
        }
    }

    @media (max-width: 767px) {
        #HEADLINE8,
        #HEADLINE10,
        #IMAGE12,
        #IMAGE40,
        #IMAGE42,
        #IMAGE43,
        #IMAGE44,
        #IMAGE45,
        #IMAGE46,
        #IMAGE47,
        #BOX48,
        #BOX50,
        #IMAGE53,
        #IMAGE105,
        #SHAPE144,
        #GROUP147,
        #IMAGE95,
        #GROUP274,
        #GROUP277,
        #SHAPE288,
        #SHAPE292,
        #SHAPE300,
        #GROUP316,
        #BUTTON336,
        #BUTTON339,
        #BUTTON340,
        #IMAGE30,
        #HEADLINE23,
        #GROUP256,
        #HEADLINE337,
        #VIDEO335,
        #PARAGRAPH335,
        #COUNTDOWN335,
        #PARAGRAPH336,
        #PARAGRAPH337,
        #PARAGRAPH338,
        #PARAGRAPH339,
        #SECTION339,
        #GROUP335,
        #HEADLINE339,
        #PARAGRAPH345,
        #HEADLINE340,
        #SHAPE337,
        #SHAPE338,
        #SHAPE342,
        #IMAGE340,
        #IMAGE341,
        #GROUP348,
        #GROUP349,
        #PARAGRAPH350,
        #PARAGRAPH355,
        #GROUP355,
        #HEADLINE353,
        #PARAGRAPH359,
        #BOX345,
        #IMAGE345,
        #SHAPE353,
        #GROUP359,
        #IMAGE354,
        #IMAGE355,
        #IMAGE356,
        #IMAGE361,
        #IMAGE362,
        #PARAGRAPH364,
        #SHAPE355,
        #IMAGE364,
        #SHAPE356,
        #SHAPE357,
        #HEADLINE367,
        #PARAGRAPH366,
        #PARAGRAPH370,
        #SHAPE363,
        #GROUP375,
        #IMAGE374,
        #POPUP348,
        #GROUP394,
        #GROUP395,
        #GROUP396,
        #GROUP397,
        #SHAPE377,
        #SHAPE378,
        #GROUP400,
        #IMAGE378,
        #GROUP364,
        #PARAGRAPH395,
        #PARAGRAPH396,
        #HEADLINE386,
        #BOX373,
        #GROUP406,
        #BOX374,
        #GROUP407,
        #BOX375,
        #GROUP408,
        #BOX376,
        #GROUP412,
        #BOX377,
        #GROUP413,
        #BOX378,
        #GROUP414,
        #SHAPE386,
        #GROUP416,
        #GROUP415,
        #GROUP418,
        #GROUP417,
        #GROUP421,
        #HEADLINE390,
        #PARAGRAPH401,
        #FORM339,
        #BOX383,
        #BOX384,
        #HEADLINE393,
        #SHAPE395,
        #PARAGRAPH404,
        #FORM340,
        #HEADLINE395,
        #HEADLINE396,
        #IMAGE385,
        #GROUP426,
        #SHAPE396,
        #VIDEO339,
        #PARAGRAPH407,
        #PARAGRAPH408,
        #SHAPE397,
        #HEADLINE397,
        #SHAPE398,
        #PARAGRAPH409,
        #SHAPE401,
        #PARAGRAPH410,
        #GROUP428,
        #SHAPE402,
        #GROUP429,
        #PARAGRAPH411,
        #HEADLINE398,
        #IMAGE391,
        #GROUP432,
        #GROUP435,
        #GROUP436 {
            opacity: 0 !important;
            pointer-events: none !important;
        }
    }
</style>
<style id="style_page" type="text/css">
    body {
        direction: ltr;
    }

    @media (min-width: 768px) {
        .ladi-section .ladi-container {
            width: 960px;
        }
    }

    @media (max-width: 767px) {
        .ladi-section .ladi-container {
            width: 420px;
        }
    }

    @font-face {
        font-family: "VkJIDIIExvdmUudHRm";
        src: url("https://w.ladicdn.com/5c728619c417ab07e5194baa/vni-24-love-20240502170958-gghl8.ttf") format("truetype");
    }

    @font-face {
        font-family: "VVZOTWpSGuZyUVEY";
        src: url("https://w.ladicdn.com/5c728619c417ab07e5194baa/uvnmoihong-20240502170800-ouaqa.ttf") format("truetype");
    }

    @font-face {
        font-family: "VVZORGluaEhvbiUVEY";
        src: url("https://w.ladicdn.com/5c728619c417ab07e5194baa/uvndinhhon-20240502170745-gov6r.ttf") format("truetype");
    }

    body {
        font-family: Prata, serif
    }
</style>
<style id="style_element" type="text/css">
    #GALLERY340 {
        width: 420px;
    }

    #GALLERY340 .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow,
    #GALLERY340 .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow,
    #GALLERY340>.ladi-gallery>.ladi-gallery-control,
    #GALLERY337>.ladi-gallery>.ladi-gallery-control,
    #GALLERY338>.ladi-gallery>.ladi-gallery-control,
    #GALLERY339>.ladi-gallery>.ladi-gallery-control {
        display: none;
    }

    #GALLERY340>.ladi-gallery>.ladi-gallery-view,
    #GALLERY337>.ladi-gallery>.ladi-gallery-view,
    #GALLERY338>.ladi-gallery>.ladi-gallery-view,
    #GALLERY339>.ladi-gallery>.ladi-gallery-view {
        height: calc(100% + 0px);
    }

    #GALLERY340>.ladi-gallery>.ladi-gallery-control,
    #SECTION_POPUP,
    #GALLERY337>.ladi-gallery>.ladi-gallery-control,
    #GALLERY338>.ladi-gallery>.ladi-gallery-control,
    #GALLERY339>.ladi-gallery>.ladi-gallery-control {
        height: 0px;
    }

    #GALLERY340>.ladi-gallery>.ladi-gallery-control>.ladi-gallery-control-box>.ladi-gallery-control-item,
    #GALLERY337>.ladi-gallery>.ladi-gallery-control>.ladi-gallery-control-box>.ladi-gallery-control-item,
    #GALLERY338>.ladi-gallery>.ladi-gallery-control>.ladi-gallery-control-box>.ladi-gallery-control-item,
    #GALLERY339>.ladi-gallery>.ladi-gallery-control>.ladi-gallery-control-box>.ladi-gallery-control-item {
        width: 0px;
        height: 0px;
        margin-right: 0px;
    }

    #GALLERY340 .ladi-gallery .ladi-gallery-control-item[data-index="0"],
    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="0"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/fee21b86-2840-4d6c-8cd0-142656f08619-20240608165012-wa9qh.jpg");
    }

    #GALLERY340 .ladi-gallery .ladi-gallery-control-item[data-index="1"],
    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="9"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/610915a2-612e-4b4b-8c11-f5f01e4bdb21-20240608165002-f8yvl.jpg");
    }

    #GALLERY340 .ladi-gallery .ladi-gallery-control-item[data-index="2"],
    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="5"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/cf0e3bd8-300c-4eb8-91f4-4b2b0e3511f5-20240608165011-nj81p.jpg");
    }

    #GROUP392,
    #BOX366,
    #BOX367,
    #BOX368,
    #BOX369,
    #BOX370,
    #BOX371,
    #BOX372,
    #BOX349,
    #IMAGE352>.ladi-image>.ladi-image-background,
    #IMAGE12>.ladi-image>.ladi-image-background,
    #BUTTON336,
    #BUTTON_SHAPE336,
    #BUTTON_SHAPE339,
    #IMAGE149>.ladi-image>.ladi-image-background,
    #IMAGE150>.ladi-image>.ladi-image-background,
    #IMAGE148>.ladi-image>.ladi-image-background,
    #BOX25,
    #IMAGE30>.ladi-image>.ladi-image-background,
    #IMAGE355>.ladi-image>.ladi-image-background,
    #GROUP432,
    #BOX388,
    #IMAGE391>.ladi-image>.ladi-image-background,
    #BOX299,
    #BOX143,
    #BOX287,
    #BOX291,
    #BOX97,
    #IMAGE101>.ladi-image>.ladi-image-background,
    #BOX389,
    #IMAGE392>.ladi-image>.ladi-image-background,
    #BOX233,
    #IMAGE245>.ladi-image>.ladi-image-background,
    #BOX391,
    #IMAGE393>.ladi-image>.ladi-image-background,
    #IMAGE153>.ladi-image>.ladi-image-background,
    #IMAGE45>.ladi-image>.ladi-image-background,
    #IMAGE52>.ladi-image>.ladi-image-background,
    #IMAGE152>.ladi-image>.ladi-image-background,
    #HEADLINE358,
    #GROUP345,
    #BOX340,
    #GROUP346,
    #BOX341,
    #GROUP340,
    #BOX337,
    #GROUP339,
    #BOX336,
    #COUNTDOWN336,
    #IMAGE387,
    #IMAGE387>.ladi-image>.ladi-image-background,
    #IMAGE388,
    #IMAGE388>.ladi-image>.ladi-image-background,
    #IMAGE364>.ladi-image>.ladi-image-background,
    #IMAGE378>.ladi-image>.ladi-image-background,
    #SHAPE343,
    #GROUP406,
    #BOX373,
    #BOX374,
    #BOX375,
    #SHAPE344,
    #GROUP412,
    #BOX376,
    #BOX377,
    #BOX378,
    #GROUP316,
    #GROUP416,
    #GROUP418,
    #IMAGE383,
    #BOX382,
    #FORM_ITEM350,
    #HEADLINE393,
    #FORM_ITEM354,
    #IMAGE386,
    #BOX385,
    #POPUP247,
    #IMAGE252,
    #IMAGE252>.ladi-image>.ladi-image-background,
    #IMAGE251>.ladi-image>.ladi-image-background,
    #DROPBOX338,
    #POPUP342,
    #IMAGE367,
    #IMAGE367>.ladi-image>.ladi-image-background,
    #IMAGE368>.ladi-image>.ladi-image-background,
    #POPUP346,
    #IMAGE374>.ladi-image>.ladi-image-background,
    #GROUP380,
    #BOX360,
    #GROUP381,
    #BOX361,
    #POPUP348,
    #THIEP,
    #MUNGCUOI,
    #LOICHUC,
    #XNTD,
    #POPUP353,
    #GALLERY337,
    #CHURE,
    #GALLERY338,
    #CODAU,
    #GALLERY339,
    #POPUP356,
    #HEADLINE397,
    #THIEPMOI,
    #IMAGE397>.ladi-image>.ladi-image-background,
    #BUTTON378,
    #GROUP444,
    #IMAGE394,
    #IMAGE394>.ladi-image>.ladi-image-background,
    #FORM_ITEM364,
    #GROUP438 {
        top: 0px;
        left: 0px;
    }

    #GROUP393,
    #BUTTON339,
    #BUTTON340,
    #IMAGE150,
    #IMAGE52,
    #IMAGE379,
    #IMAGE340,
    #HEADLINE348,
    #GROUP407,
    #GROUP408,
    #IMAGE341,
    #HEADLINE349,
    #GROUP413,
    #GROUP414,
    #IMAGE324,
    #IMAGE324>.ladi-image>.ladi-image-background,
    #IMAGE381,
    #IMAGE381>.ladi-image>.ladi-image-background,
    #IMAGE382,
    #IMAGE382>.ladi-image>.ladi-image-background,
    #PARAGRAPH370,
    #FORM_ITEM355,
    #IMAGE397,
    #HEADLINE405,
    #HEADLINE400,
    #PARAGRAPH415 {
        top: 0px;
    }

    #GROUP394,
    #GROUP395,
    #GROUP396,
    #GROUP397,
    #GROUP398,
    #GROUP434,
    #SECTION336,
    #SECTION79,
    #GROUP435,
    #SECTION103,
    #GROUP436,
    #SECTION337,
    #GROUP441,
    #BUTTON378,
    #BUTTON377 {
        display: none !important;
    }

    #GROUP394.ladi-animation>.ladi-group,
    #GROUP395.ladi-animation>.ladi-group,
    #GROUP396.ladi-animation>.ladi-group,
    #GROUP397.ladi-animation>.ladi-group {
        animation-name: fadeInUp;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #BOX366>.ladi-box,
    #BOX367>.ladi-box,
    #BOX368>.ladi-box,
    #BOX369>.ladi-box,
    #BOX370>.ladi-box,
    #BOX371>.ladi-box,
    #BOX372>.ladi-box,
    #BOX373>.ladi-box,
    #BOX374>.ladi-box,
    #BOX375>.ladi-box,
    #BOX376>.ladi-box,
    #BOX377>.ladi-box,
    #BOX378>.ladi-box {
        border-radius: 100px;
    }

    #BOX366>.ladi-box,
    #BOX367>.ladi-box,
    #BOX368>.ladi-box,
    #BOX369>.ladi-box,
    #BOX370>.ladi-box,
    #BOX371>.ladi-box,
    #BOX372>.ladi-box,
    #THIEP>.ladi-popup>.ladi-popup-background,
    #MUNGCUOI>.ladi-popup>.ladi-popup-background,
    #LOICHUC>.ladi-popup>.ladi-popup-background,
    #XNTD>.ladi-popup>.ladi-popup-background {
        background-color: rgb(121, 113, 113);
    }

    #BOX366>.ladi-box:hover,
    #BOX367>.ladi-box:hover,
    #BOX368>.ladi-box:hover,
    #BOX369>.ladi-box:hover,
    #BOX372>.ladi-box:hover,
    #BOX349>.ladi-box:hover,
    #SHAPE258:hover>.ladi-shape,
    #HEADLINE8>.ladi-headline:hover,
    #IMAGE149:hover>.ladi-image,
    #IMAGE150:hover>.ladi-image,
    #IMAGE148:hover>.ladi-image,
    #BOX25>.ladi-box:hover,
    #BOX388>.ladi-box:hover,
    #IMAGE32:hover>.ladi-image,
    #BOX36>.ladi-box:hover,
    #BOX299>.ladi-box:hover,
    #SHAPE300:hover>.ladi-shape,
    #HEADLINE301>.ladi-headline:hover,
    #BOX143>.ladi-box:hover,
    #SHAPE144:hover>.ladi-shape,
    #BOX287>.ladi-box:hover,
    #SHAPE288:hover>.ladi-shape,
    #HEADLINE289>.ladi-headline:hover,
    #BOX291>.ladi-box:hover,
    #SHAPE292:hover>.ladi-shape,
    #IMAGE95:hover>.ladi-image,
    #BOX97>.ladi-box:hover,
    #BOX100>.ladi-box:hover,
    #SHAPE102:hover>.ladi-shape,
    #BOX389>.ladi-box:hover,
    #BOX390>.ladi-box:hover,
    #SHAPE404:hover>.ladi-shape,
    #BOX233>.ladi-box:hover,
    #BOX242>.ladi-box:hover,
    #SHAPE246:hover>.ladi-shape,
    #BOX391>.ladi-box:hover,
    #BOX392>.ladi-box:hover,
    #SHAPE405:hover>.ladi-shape,
    #IMAGE153:hover>.ladi-image,
    #BOX48>.ladi-box:hover,
    #BOX50>.ladi-box:hover,
    #IMAGE152:hover>.ladi-image,
    #BOX340>.ladi-box:hover,
    #HEADLINE346>.ladi-headline:hover,
    #BOX341>.ladi-box:hover,
    #SHAPE342:hover>.ladi-shape,
    #BOX337>.ladi-box:hover,
    #SHAPE338:hover>.ladi-shape,
    #HEADLINE343>.ladi-headline:hover,
    #BOX336>.ladi-box:hover,
    #SHAPE337:hover>.ladi-shape,
    #IMAGE364:hover>.ladi-image,
    #BOX373>.ladi-box:hover,
    #BOX374>.ladi-box:hover,
    #BOX375>.ladi-box:hover,
    #BOX376>.ladi-box:hover,
    #BOX377>.ladi-box:hover,
    #BOX378>.ladi-box:hover,
    #BOX317>.ladi-box:hover,
    #HEADLINE318>.ladi-headline:hover,
    #PARAGRAPH319>.ladi-paragraph:hover,
    #PARAGRAPH320>.ladi-paragraph:hover,
    #SHAPE322:hover>.ladi-shape,
    #SHAPE323:hover>.ladi-shape,
    #IMAGE324:hover>.ladi-image,
    #BOX380>.ladi-box:hover,
    #HEADLINE387>.ladi-headline:hover,
    #PARAGRAPH397>.ladi-paragraph:hover,
    #PARAGRAPH398>.ladi-paragraph:hover,
    #SHAPE387:hover>.ladi-shape,
    #SHAPE388:hover>.ladi-shape,
    #IMAGE381:hover>.ladi-image,
    #BOX381>.ladi-box:hover,
    #HEADLINE388>.ladi-headline:hover,
    #PARAGRAPH399>.ladi-paragraph:hover,
    #PARAGRAPH400>.ladi-paragraph:hover,
    #SHAPE389:hover>.ladi-shape,
    #SHAPE390:hover>.ladi-shape,
    #IMAGE382:hover>.ladi-image,
    #BOX382>.ladi-box:hover,
    #BOX383>.ladi-box:hover,
    #BOX384>.ladi-box:hover,
    #BUTTON_TEXT371>.ladi-headline:hover,
    #HEADLINE395>.ladi-headline:hover,
    #HEADLINE396>.ladi-headline:hover,
    #BOX385>.ladi-box:hover,
    #IMAGE252:hover>.ladi-image,
    #BOX253>.ladi-box:hover,
    #HEADLINE248>.ladi-headline:hover,
    #HEADLINE249>.ladi-headline:hover,
    #PARAGRAPH250>.ladi-paragraph:hover,
    #IMAGE251:hover>.ladi-image,
    #BUTTON270>.ladi-button:hover,
    #BUTTON_TEXT270>.ladi-headline:hover,
    #BUTTON262>.ladi-button:hover,
    #BUTTON_TEXT262>.ladi-headline:hover,
    #BUTTON264>.ladi-button:hover,
    #BUTTON_TEXT264>.ladi-headline:hover,
    #BUTTON266>.ladi-button:hover,
    #BUTTON_TEXT266>.ladi-headline:hover,
    #BUTTON268>.ladi-button:hover,
    #BUTTON_TEXT268>.ladi-headline:hover,
    #IMAGE367:hover>.ladi-image,
    #BOX350>.ladi-box:hover,
    #HEADLINE362>.ladi-headline:hover,
    #HEADLINE363>.ladi-headline:hover,
    #PARAGRAPH365>.ladi-paragraph:hover,
    #IMAGE368:hover>.ladi-image,
    #BOX360>.ladi-box:hover,
    #BOX361>.ladi-box:hover,
    #HEADLINE405>.ladi-headline:hover,
    #BUTTON378>.ladi-button:hover,
    #BUTTON_TEXT378>.ladi-headline:hover,
    #HEADLINE406>.ladi-headline:hover,
    #HEADLINE407>.ladi-headline:hover,
    #HEADLINE408>.ladi-headline:hover,
    #HEADLINE400>.ladi-headline:hover,
    #BUTTON377>.ladi-button:hover,
    #BUTTON_TEXT377>.ladi-headline:hover,
    #HEADLINE401>.ladi-headline:hover,
    #HEADLINE402>.ladi-headline:hover,
    #HEADLINE403>.ladi-headline:hover {
        opacity: 1;
    }

    #SHAPE373,
    #SHAPE374,
    #SHAPE375,
    #SHAPE376,
    #BUTTON_SHAPE336>.ladi-shape,
    #BUTTON_SHAPE339>.ladi-shape {
        left: 10px;
    }

    #SHAPE373 svg:last-child,
    #SHAPE374 svg:last-child,
    #SHAPE375 svg:last-child,
    #SHAPE376 svg:last-child,
    #SHAPE377 svg:last-child,
    #SHAPE378 svg:last-child,
    #SHAPE379 svg:last-child,
    #SHAPE380 svg:last-child,
    #SHAPE381 svg:last-child,
    #SHAPE382 svg:last-child,
    #SHAPE383 svg:last-child,
    #SHAPE384 svg:last-child,
    #SHAPE385 svg:last-child,
    #SHAPE322 svg:last-child,
    #SHAPE323 svg:last-child,
    #SHAPE387 svg:last-child,
    #SHAPE388 svg:last-child,
    #SHAPE389 svg:last-child,
    #SHAPE390 svg:last-child,
    #SHAPE391 svg:last-child {
        fill: rgb(255, 255, 255);
    }

    #BOX370>.ladi-box:hover,
    #BOX371>.ladi-box:hover,
    #IMAGE355:hover>.ladi-image,
    #PARAGRAPH364>.ladi-paragraph:hover,
    #IMAGE354:hover>.ladi-image,
    #IMAGE356:hover>.ladi-image,
    #IMAGE361:hover>.ladi-image,
    #SHAPE397:hover>.ladi-shape,
    #PARAGRAPH96>.ladi-paragraph:hover,
    #PARAGRAPH413>.ladi-paragraph:hover,
    #IMAGE105:hover>.ladi-image,
    #PARAGRAPH234>.ladi-paragraph:hover,
    #PARAGRAPH414>.ladi-paragraph:hover,
    #IMAGE53:hover>.ladi-image,
    #IMAGE42:hover>.ladi-image,
    #IMAGE43:hover>.ladi-image,
    #IMAGE44:hover>.ladi-image,
    #IMAGE45:hover>.ladi-image,
    #IMAGE46:hover>.ladi-image,
    #IMAGE47:hover>.ladi-image,
    #IMAGE40:hover>.ladi-image,
    #IMAGE345:hover>.ladi-image,
    #IMAGE362:hover>.ladi-image,
    #HEADLINE339>.ladi-headline:hover,
    #PARAGRAPH345>.ladi-paragraph:hover,
    #IMAGE340:hover>.ladi-image,
    #HEADLINE348>.ladi-headline:hover,
    #PARAGRAPH350>.ladi-paragraph:hover,
    #PARAGRAPH395>.ladi-paragraph:hover,
    #SHAPE380:hover>.ladi-shape,
    #SHAPE381:hover>.ladi-shape,
    #SHAPE382:hover>.ladi-shape,
    #IMAGE341:hover>.ladi-image,
    #HEADLINE349>.ladi-headline:hover,
    #PARAGRAPH355>.ladi-paragraph:hover,
    #SHAPE383:hover>.ladi-shape,
    #SHAPE384:hover>.ladi-shape,
    #SHAPE385:hover>.ladi-shape,
    #HEADLINE386>.ladi-headline:hover,
    #SHAPE386:hover>.ladi-shape,
    #HEADLINE393>.ladi-headline:hover,
    #PARAGRAPH404>.ladi-paragraph:hover,
    #BUTTON371>.ladi-button:hover {
        transform: scale(1.03);
        opacity: 1;
    }

    #SHAPE377 {
        width: 30px;
        height: 30px;
    }

    #SHAPE377.ladi-animation>.ladi-shape {
        animation-name: pulse;
        animation-delay: 0.3s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #SHAPE377:hover>.ladi-shape,
    #SHAPE378:hover>.ladi-shape,
    #IMAGE12:hover>.ladi-image,
    #HEADLINE10>.ladi-headline:hover,
    #BUTTON336>.ladi-button:hover,
    #BUTTON339>.ladi-button:hover,
    #BUTTON340>.ladi-button:hover,
    #HEADLINE23>.ladi-headline:hover,
    #IMAGE30:hover>.ladi-image,
    #HEADLINE398>.ladi-headline:hover,
    #IMAGE391:hover>.ladi-image,
    #HEADLINE337>.ladi-headline:hover,
    #PARAGRAPH335>.ladi-paragraph:hover,
    #SHAPE355:hover>.ladi-shape,
    #HEADLINE145>.ladi-headline:hover,
    #HEADLINE293>.ladi-headline:hover,
    #IMAGE101:hover>.ladi-image,
    #IMAGE392:hover>.ladi-image,
    #IMAGE245:hover>.ladi-image,
    #IMAGE393:hover>.ladi-image,
    #HEADLINE51>.ladi-headline:hover,
    #IMAGE52:hover>.ladi-image,
    #HEADLINE358>.ladi-headline:hover,
    #SHAPE353:hover>.ladi-shape,
    #HEADLINE347>.ladi-headline:hover,
    #HEADLINE342>.ladi-headline:hover,
    #SHAPE401:hover>.ladi-shape,
    #SHAPE402:hover>.ladi-shape,
    #IMAGE378:hover>.ladi-image,
    #HEADLINE340>.ladi-headline:hover,
    #SHAPE356:hover>.ladi-shape,
    #BUTTON344>.ladi-button:hover,
    #BUTTON345>.ladi-button:hover,
    #BUTTON365>.ladi-button:hover,
    #BUTTON366>.ladi-button:hover,
    #BUTTON367>.ladi-button:hover,
    #BUTTON368>.ladi-button:hover,
    #HEADLINE390>.ladi-headline:hover,
    #PARAGRAPH401>.ladi-paragraph:hover,
    #HEADLINE353>.ladi-headline:hover,
    #PARAGRAPH359>.ladi-paragraph:hover,
    #PARAGRAPH370>.ladi-paragraph:hover,
    #SHAPE363:hover>.ladi-shape,
    #SHAPE395:hover>.ladi-shape,
    #IMAGE385:hover>.ladi-image,
    #HEADLINE367>.ladi-headline:hover,
    #PARAGRAPH366>.ladi-paragraph:hover,
    #HEADLINE397>.ladi-headline:hover,
    #SHAPE398:hover>.ladi-shape {
        transform: scale(1.05);
        opacity: 1;
    }

    #SHAPE378 {
        width: 20px;
        height: 15px;
    }

    #SHAPE378.ladi-animation>.ladi-shape {
        animation-name: pulse;
        animation-delay: 0.3s;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    #GROUP400.ladi-animation>.ladi-group {
        animation-name: bounce;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    #BOX387>.ladi-box,
    #BOX349>.ladi-box,
    #BOX385>.ladi-box {
        border-radius: 0px;
    }

    #BOX387>.ladi-box,
    #SECTION351>.ladi-overlay,
    #SECTION348>.ladi-overlay,
    #IMAGE383>.ladi-image>.ladi-overlay,
    #FORM339 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check.multiple.checked:before,
    #FORM339 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check:not(.multiple).checked:before,
    #FORM339 .ladi-form [data-form-checkout-item="payment"] .ladi-form-checkout-payment-check.checked:before,
    #FORM339 .ladi-form-checkout-payment-quantity .up:before,
    #FORM339 .ladi-form-checkout-payment-quantity .down:before,
    #FORM339 [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content div:before,
    #IMAGE386>.ladi-image>.ladi-overlay,
    #FORM343 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check.multiple.checked:before,
    #FORM343 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check:not(.multiple).checked:before,
    #FORM343 .ladi-form [data-form-checkout-item="payment"] .ladi-form-checkout-payment-check.checked:before,
    #FORM343 .ladi-form-checkout-payment-quantity .up:before,
    #FORM343 .ladi-form-checkout-payment-quantity .down:before,
    #FORM343 [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content div:before,
    #BUTTON378>.ladi-button>.ladi-button-background,
    #FORM342 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check.multiple.checked:before,
    #FORM342 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check:not(.multiple).checked:before,
    #FORM342 .ladi-form [data-form-checkout-item="payment"] .ladi-form-checkout-payment-check.checked:before,
    #FORM342 .ladi-form-checkout-payment-quantity .up:before,
    #FORM342 .ladi-form-checkout-payment-quantity .down:before,
    #FORM342 [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content div:before,
    #BUTTON377>.ladi-button>.ladi-button-background {
        background-color: rgb(0, 0, 0);
    }

    #BOX387>.ladi-box {
        opacity: 0.25;
    }

    #BOX349>.ladi-box,
    #FORM339 .ladi-form-item-container .ladi-form-quantity .button,
    #FORM340 .ladi-form-item-container .ladi-form-quantity .button,
    #FORM343 .ladi-form-item-container .ladi-form-quantity .button,
    #FORM342 .ladi-form-item-container .ladi-form-quantity .button {
        background-color: rgb(241, 243, 244);
    }

    #BOX349>.ladi-box {
        opacity: 0.45;
    }

    #SHAPE258 svg:last-child {
        fill: rgb(255, 220, 133);
    }

    #NOTIFY336 {
        height: 62px;
        top: 10px;
        left: 0px;
        bottom: auto;
        right: 0px;
        position: fixed;
        z-index: 90000060;
        margin: 0px auto;
    }

    #IMAGE12>.ladi-image {
        border-width: 1px;
        border-color: rgb(0, 0, 0);
    }

    #IMAGE12.ladi-animation>.ladi-image,
    #IMAGE356.ladi-animation>.ladi-image,
    #IMAGE44.ladi-animation>.ladi-image {
        animation-name: fadeInLeft;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #HEADLINE10>.ladi-headline {
        font-family: "Dancing Script", cursive;
        line-height: 1.6;
        color: rgb(255, 255, 255);
    }

    #HEADLINE10.ladi-animation>.ladi-headline,
    #IMAGE47.ladi-animation>.ladi-image {
        animation-name: fadeInRight;
        animation-delay: 1s;
        animation-duration: 2.5s;
        animation-iteration-count: 1;
    }

    #HEADLINE8>.ladi-headline {
        font-family: Muli, sans-serif;
        line-height: 1.6;
        color: rgb(255, 255, 255);
    }

    #HEADLINE8.ladi-animation>.ladi-headline,
    #PARAGRAPH364.ladi-animation>.ladi-paragraph,
    #PARAGRAPH350.ladi-animation>.ladi-paragraph,
    #PARAGRAPH395.ladi-animation>.ladi-paragraph,
    #PARAGRAPH355.ladi-animation>.ladi-paragraph,
    #PARAGRAPH396.ladi-animation>.ladi-paragraph,
    #PARAGRAPH401.ladi-animation>.ladi-paragraph,
    #FORM339.ladi-animation>.ladi-form,
    #HEADLINE367.ladi-animation>.ladi-headline,
    #PARAGRAPH366.ladi-animation>.ladi-paragraph,
    #SHAPE398.ladi-animation>.ladi-shape {
        animation-name: fadeInUp;
        animation-delay: 1s;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }

    #BUTTON336>.ladi-button>.ladi-button-background,
    #BUTTON339>.ladi-button>.ladi-button-background,
    #BUTTON340>.ladi-button>.ladi-button-background {
        background-color: rgb(251, 248, 245);
    }

    #BUTTON336>.ladi-button,
    #BUTTON339>.ladi-button,
    #BUTTON340>.ladi-button,
    #POPUP348>.ladi-popup {
        border-width: 1px;
        border-radius: 10px;
        border-style: solid;
        border-color: rgb(0, 0, 0);
    }

    #BUTTON336.ladi-animation>.ladi-button {
        animation-name: slideInLeft;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #BUTTON336>.ladi-button:hover .ladi-button-background,
    #BUTTON339>.ladi-button:hover .ladi-button-background,
    #BUTTON340>.ladi-button:hover .ladi-button-background {
        background-image: none !important;
        background-color: rgb(200, 215, 238) !important;
        background-size: initial !important;
        background-origin: initial !important;
        background-position: initial !important;
        background-repeat: initial !important;
        background-attachment: initial !important;
    }

    #BUTTON336>.ladi-button:hover .ladi-button-background,
    #BUTTON339>.ladi-button:hover .ladi-button-background,
    #BUTTON340>.ladi-button:hover .ladi-button-background,
    #BUTTON344>.ladi-button:hover .ladi-button-background,
    #BUTTON345>.ladi-button:hover .ladi-button-background,
    #BUTTON365>.ladi-button:hover .ladi-button-background,
    #BUTTON366>.ladi-button:hover .ladi-button-background,
    #BUTTON367>.ladi-button:hover .ladi-button-background,
    #BUTTON368>.ladi-button:hover .ladi-button-background,
    #BUTTON371>.ladi-button:hover .ladi-button-background {
        -webkit-background-clip: initial !important;
    }

    #BUTTON_SHAPE336>.ladi-shape {
        width: 13px;
        height: 14px;
    }

    #BUTTON_SHAPE336 svg:last-child,
    #BUTTON_SHAPE339 svg:last-child,
    #SHAPE401 svg:last-child,
    #SHAPE402 svg:last-child {
        fill: rgb(232, 59, 48);
    }

    #BUTTON_TEXT336,
    #BUTTON_TEXT339,
    #BUTTON_TEXT340,
    #IMAGE148,
    #IMAGE354>.ladi-image>.ladi-image-background,
    #IMAGE356>.ladi-image>.ladi-image-background,
    #IMAGE361>.ladi-image>.ladi-image-background,
    #IMAGE32>.ladi-image>.ladi-image-background,
    #IMAGE47>.ladi-image>.ladi-image-background,
    #HEADLINE51,
    #GROUP347,
    #PARAGRAPH395,
    #GROUP350,
    #PARAGRAPH396,
    #BOX317,
    #BOX380,
    #BOX381,
    #SHAPE363,
    #FORM_ITEM351,
    #FORM_ITEM353,
    #BUTTON371,
    #BUTTON_TEXT371,
    #FORM_ITEM356,
    #FORM_ITEM357,
    #GROUP442,
    #FORM343,
    #PARAGRAPH422,
    #PARAGRAPH417 {
        left: 0px;
    }

    #BUTTON_TEXT336>.ladi-headline,
    #BUTTON_TEXT339>.ladi-headline,
    #BUTTON_TEXT340>.ladi-headline {
        font-family: Judson, serif;
        color: rgb(37, 38, 40);
        letter-spacing: 0px;
        text-align: center;
    }

    #BUTTON339.ladi-animation>.ladi-button {
        animation-name: slideInRight;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #BUTTON_SHAPE339>.ladi-shape {
        width: 16px;
        height: 17px;
    }

    #BUTTON340.ladi-animation>.ladi-button {
        animation-name: fadeInUpBig;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #SECTION3>.ladi-section-background {
        background-color: rgb(248, 246, 246);
    }

    #IMAGE149,
    #IMAGE149>.ladi-image>.ladi-image-background {
        width: 317.695px;
        height: 340.113px;
    }

    #IMAGE149>.ladi-image>.ladi-image-background {
        background-image: url("https://w.ladicdn.com/s650x650/5c7362c6c417ab07e5196b05/c3-20201125074835.png");
    }

    #IMAGE150>.ladi-image>.ladi-image-background {
        background-image: url("https://w.ladicdn.com/s600x850/5c7362c6c417ab07e5196b05/c2-20201125074835.png");
    }

    #GROUP256.ladi-animation>.ladi-group,
    #GROUP432.ladi-animation>.ladi-group,
    #GROUP435.ladi-animation>.ladi-group {
        animation-iteration-count: 1;
    }

    #BOX25>.ladi-box,
    #BOX388>.ladi-box,
    #IMAGE340>.ladi-image,
    #IMAGE341>.ladi-image,
    #BOX345>.ladi-box,
    #BOX383>.ladi-box,
    #BUTTON371>.ladi-button {
        border-radius: 5px;
    }

    #BOX25>.ladi-box,
    #BOX388>.ladi-box,
    #BOX97>.ladi-box,
    #BOX389>.ladi-box {
        background-color: rgba(255, 255, 255, 0.9);
    }

    #BOX25>.ladi-box,
    #BOX388>.ladi-box {
        box-shadow: rgb(0, 0, 0) 0px 0px 30px -10px;
    }

    #HEADLINE23,
    #HEADLINE398 {
        width: 344px;
    }

    #HEADLINE23>.ladi-headline,
    #HEADLINE398>.ladi-headline {
        line-height: 1.6;
        color: rgb(120, 120, 120);
    }

    #HEADLINE23.ladi-animation>.ladi-headline,
    #HEADLINE398.ladi-animation>.ladi-headline,
    #PARAGRAPH408.ladi-animation>.ladi-paragraph,
    #PARAGRAPH345.ladi-animation>.ladi-paragraph,
    #HEADLINE386.ladi-animation>.ladi-headline,
    #HEADLINE353.ladi-animation>.ladi-headline,
    #HEADLINE393.ladi-animation>.ladi-headline,
    #PARAGRAPH404.ladi-animation>.ladi-paragraph {
        animation-name: fadeInDown;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #IMAGE30,
    #IMAGE391 {
        width: 85.2683px;
    }

    #IMAGE30>.ladi-image>.ladi-image-background,
    #IMAGE391>.ladi-image>.ladi-image-background,
    #IMAGE101,
    #IMAGE101>.ladi-image>.ladi-image-background,
    #IMAGE392,
    #IMAGE392>.ladi-image>.ladi-image-background,
    #IMAGE245,
    #IMAGE245>.ladi-image>.ladi-image-background,
    #IMAGE393,
    #IMAGE393>.ladi-image>.ladi-image-background {
        width: 85.2683px;
        height: 46px;
    }

    #IMAGE30>.ladi-image>.ladi-image-background,
    #IMAGE391>.ladi-image>.ladi-image-background,
    #IMAGE101>.ladi-image>.ladi-image-background,
    #IMAGE392>.ladi-image>.ladi-image-background,
    #IMAGE245>.ladi-image>.ladi-image-background,
    #IMAGE393>.ladi-image>.ladi-image-background,
    #IMAGE251>.ladi-image>.ladi-image-background,
    #IMAGE368>.ladi-image>.ladi-image-background {
        background-image: url("https://w.ladicdn.com/s400x350/5c7362c6c417ab07e5196b05/r5gt-20201125032553.png");
    }

    #IMAGE30.ladi-animation>.ladi-image,
    #IMAGE391.ladi-animation>.ladi-image,
    #PARAGRAPH407.ladi-animation>.ladi-paragraph,
    #IMAGE42.ladi-animation>.ladi-image,
    #HEADLINE339.ladi-animation>.ladi-headline,
    #IMAGE364.ladi-animation>.ladi-image,
    #BOX384.ladi-animation>.ladi-box {
        animation-name: fadeInDown;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #IMAGE355>.ladi-image,
    #IMAGE354>.ladi-image,
    #IMAGE356>.ladi-image,
    #IMAGE361>.ladi-image {
        border-width: 10px;
        border-radius: 5px;
        border-style: solid;
        border-color: rgb(255, 255, 255);
    }

    #IMAGE355.ladi-animation>.ladi-image,
    #IMAGE105.ladi-animation>.ladi-image {
        animation-name: fadeInRight;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #PARAGRAPH364>.ladi-paragraph {
        font-family: Muli, sans-serif;
        color: rgb(0, 0, 0);
        text-align: justify;
    }

    #IMAGE354.ladi-animation>.ladi-image,
    #IMAGE53.ladi-animation>.ladi-image {
        animation-name: fadeInRight;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #IMAGE361.ladi-animation>.ladi-image,
    #IMAGE95.ladi-animation>.ladi-image,
    #IMAGE40.ladi-animation>.ladi-image {
        animation-name: fadeInLeft;
        animation-delay: 1s;
        animation-duration: 1.5s;
        animation-iteration-count: 1;
    }

    #HEADLINE398>.ladi-headline:hover,
    #HEADLINE337>.ladi-headline:hover {
        color: rgb(194, 154, 98);
    }

    #PARAGRAPH412>.ladi-paragraph {
        font-family: Montserrat, sans-serif;
        font-size: 15px;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: justify;
    }

    #SHAPE403 {
        width: 71px;
        height: 71px;
    }

    #SHAPE403 svg:last-child {
        fill: rgb(211, 85, 85);
    }

    #SECTION336>.ladi-overlay {
        background-color: rgb(228, 228, 228);
        opacity: 0.5;
    }

    #HEADLINE337 {
        width: 200px;
    }

    #HEADLINE337>.ladi-headline {
        font-family: "Cormorant Upright", serif;
        font-size: 30px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(68, 68, 68);
        text-align: center;
    }

    #HEADLINE337.ladi-animation>.ladi-headline,
    #PARAGRAPH335.ladi-animation>.ladi-paragraph,
    #SHAPE355.ladi-animation>.ladi-shape {
        animation-name: bounceInUp;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #VIDEO335>.ladi-video>.ladi-video-background {
        background-position: 50% 100%;
        background-repeat: no-repeat;
    }

    #VIDEO335.ladi-animation>.ladi-video,
    #VIDEO339.ladi-animation>.ladi-video,
    #IMAGE45.ladi-animation>.ladi-image,
    #HEADLINE340.ladi-animation>.ladi-headline,
    #HEADLINE390.ladi-animation>.ladi-headline,
    #BOX345.ladi-animation>.ladi-box,
    #SHAPE395.ladi-animation>.ladi-shape,
    #FORM340.ladi-animation>.ladi-form,
    #GROUP426.ladi-animation>.ladi-group {
        animation-name: fadeInUp;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #SHAPE335,
    #SHAPE339,
    #SHAPE340,
    #SHAPE341 {
        width: 40px;
        height: 40px;
    }

    #SHAPE335 svg:last-child,
    #SHAPE339 svg:last-child,
    #SHAPE340 svg:last-child,
    #SHAPE341 svg:last-child {
        fill: rgba(0, 0, 0, 0.5);
    }

    #PARAGRAPH335>.ladi-paragraph,
    #PARAGRAPH359>.ladi-paragraph {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #SHAPE355 svg:last-child {
        fill: rgb(151, 85, 151);
    }

    #VIDEO339>.ladi-video>.ladi-video-background {
        background-size: cover;
        background-origin: content-box;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    #SECTION351>.ladi-overlay,
    #IMAGE386>.ladi-image>.ladi-overlay {
        opacity: 0.3;
    }

    #SECTION351>.ladi-section-background,
    #SECTION348>.ladi-section-background {
        background-size: cover;
        background-origin: content-box;
        background-position: 50% 50%;
        background-repeat: repeat;
        background-attachment: scroll;
    }

    #PARAGRAPH407>.ladi-paragraph,
    #PARAGRAPH366>.ladi-paragraph {
        font-family: "Dancing Script", cursive;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #PARAGRAPH407>.ladi-paragraph {
        text-shadow: rgb(0, 0, 0) 1px 1px 0px;
    }

    #PARAGRAPH408>.ladi-paragraph {
        font-family: Niramit, sans-serif;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #SHAPE397.ladi-animation>.ladi-shape,
    #IMAGE378.ladi-animation>.ladi-image {
        animation-name: fadeInUp;
        animation-delay: 1s;
        animation-duration: 2.5s;
        animation-iteration-count: 1;
    }

    #SHAPE397:hover>.ladi-shape svg:last-child {
        fill: rgb(152, 38, 31);
    }

    #SHAPE397 svg:last-child {
        fill: rgb(244, 191, 191);
    }

    #SECTION78>.ladi-section-background,
    #BOX143>.ladi-box,
    #SECTION350>.ladi-section-background,
    #POPUP260>.ladi-popup>.ladi-popup-background {
        background-size: cover;
        background-origin: content-box;
        background-position: 50% 0%;
        background-repeat: repeat;
        background-attachment: scroll;
    }

    #IMAGE32>.ladi-image>.ladi-overlay {
        background-color: rgba(30, 27, 25, 0.7);
    }

    #BOX36>.ladi-box {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(127, 127, 127);
    }

    #GROUP298 {
        width: 280px;
        height: 74.402px;
    }

    #BOX299>.ladi-box,
    #BOX143>.ladi-box,
    #BOX287>.ladi-box,
    #BOX291>.ladi-box,
    #BOX340>.ladi-box,
    #BOX341>.ladi-box,
    #BOX337>.ladi-box,
    #BOX336>.ladi-box {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(94, 94, 94);
    }

    #BOX299>.ladi-box,
    #BOX287>.ladi-box,
    #BOX340>.ladi-box,
    #BOX336>.ladi-box {
        background-color: rgb(239, 203, 132);
    }

    #SHAPE300,
    #SHAPE144,
    #SHAPE288,
    #SHAPE292,
    #SHAPE342,
    #SHAPE338,
    #SHAPE337 {
        width: 17.0674px;
        height: 29.6725px;
    }

    #SHAPE300,
    #SHAPE144,
    #SHAPE288,
    #SHAPE292,
    #SHAPE342,
    #SHAPE338 {
        top: 23.3647px;
        left: 239.962px;
    }

    #SHAPE300.ladi-animation>.ladi-shape,
    #SHAPE144.ladi-animation>.ladi-shape,
    #SHAPE288.ladi-animation>.ladi-shape,
    #SHAPE292.ladi-animation>.ladi-shape,
    #SHAPE353.ladi-animation>.ladi-shape,
    #SHAPE342.ladi-animation>.ladi-shape,
    #SHAPE338.ladi-animation>.ladi-shape,
    #SHAPE337.ladi-animation>.ladi-shape {
        animation-name: fadeInDown;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    #SHAPE300 svg:last-child,
    #SHAPE144 svg:last-child,
    #SHAPE288 svg:last-child,
    #SHAPE292 svg:last-child,
    #SHAPE342 svg:last-child,
    #SHAPE338 svg:last-child,
    #SHAPE337 svg:last-child {
        fill: rgb(37, 38, 40);
    }

    #HEADLINE301,
    #HEADLINE145,
    #HEADLINE289,
    #HEADLINE293,
    #HEADLINE346,
    #HEADLINE347,
    #HEADLINE343,
    #HEADLINE342 {
        width: 179px;
    }

    #HEADLINE301,
    #HEADLINE145,
    #HEADLINE289,
    #HEADLINE293,
    #HEADLINE347,
    #HEADLINE343 {
        top: 27.701px;
        left: 49.3887px;
    }

    #HEADLINE301>.ladi-headline,
    #HEADLINE145>.ladi-headline,
    #HEADLINE289>.ladi-headline,
    #HEADLINE293>.ladi-headline,
    #HEADLINE346>.ladi-headline,
    #HEADLINE347>.ladi-headline,
    #HEADLINE343>.ladi-headline,
    #HEADLINE342>.ladi-headline {
        font-size: 16px;
        line-height: 1.6;
        color: rgb(37, 38, 40);
        text-align: center;
    }

    #BOX143>.ladi-box>.ladi-overlay,
    #BOX291>.ladi-box>.ladi-overlay,
    #BOX341>.ladi-box>.ladi-overlay,
    #BOX337>.ladi-box>.ladi-overlay {
        background-color: rgb(255, 246, 227);
        opacity: 0.9;
    }

    #GROUP286 {
        width: 302px;
        height: 74.402px;
    }

    #BOX287,
    #GROUP290,
    #BOX291,
    #GROUP344,
    #GROUP345,
    #BOX340,
    #GROUP346,
    #BOX341,
    #GROUP338,
    #GROUP340,
    #BOX337,
    #GROUP339,
    #BOX336 {
        width: 302px;
    }

    #BOX291>.ladi-box,
    #BOX341>.ladi-box,
    #BOX337>.ladi-box {
        background-image: url("https://w.ladicdn.com/s650x400/5c7362c6c417ab07e5196b05/uffTbu4J20210123080902.jpeg");
        background-size: cover;
        background-origin: content-box;
        background-position: 50% 0%;
        background-repeat: repeat;
        background-attachment: scroll;
    }

    #SECTION79>.ladi-section-background,
    #SECTION103>.ladi-section-background,
    #SECTION5>.ladi-section-background {
        background-color: rgb(244, 240, 234);
    }

    #GROUP274.ladi-animation>.ladi-group {
        animation-delay: 1s;
        animation-iteration-count: 1;
    }

    #BOX97>.ladi-box,
    #BOX389>.ladi-box {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px -10px;
    }

    #BOX100>.ladi-box,
    #BOX390>.ladi-box {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(164, 152, 152);
    }

    #SHAPE102 svg:last-child,
    #SHAPE404 svg:last-child {
        fill: rgba(215, 206, 206, 0.4);
    }

    #PARAGRAPH96>.ladi-paragraph,
    #PARAGRAPH413>.ladi-paragraph,
    #PARAGRAPH234>.ladi-paragraph,
    #PARAGRAPH414>.ladi-paragraph {
        font-family: Mulish, sans-serif;
        color: rgb(104, 104, 104);
        letter-spacing: 0px;
        text-align: justify;
    }

    #GROUP277.ladi-animation>.ladi-group {
        animation-name: fadeInLeft;
        animation-delay: 1s;
        animation-iteration-count: 1;
    }

    #BOX233>.ladi-box,
    #BOX391>.ladi-box,
    #IMAGE379>.ladi-image>.ladi-overlay,
    #FORM339 .ladi-form-item-background,
    #BOX383>.ladi-box,
    #FORM340 .ladi-form-item-background,
    #POPUP247>.ladi-popup>.ladi-popup-background,
    #DROPBOX338>.ladi-popup>.ladi-popup-background,
    #POPUP342>.ladi-popup>.ladi-popup-background,
    #POPUP346>.ladi-popup>.ladi-popup-background,
    #BOX360>.ladi-box,
    #BOX361>.ladi-box,
    #POPUP348>.ladi-popup>.ladi-popup-background,
    #POPUP353>.ladi-popup>.ladi-popup-background,
    #CHURE>.ladi-popup>.ladi-popup-background,
    #CODAU>.ladi-popup>.ladi-popup-background,
    #POPUP356>.ladi-popup>.ladi-popup-background,
    #THIEPMOI>.ladi-popup>.ladi-popup-background {
        background-color: rgb(255, 255, 255);
    }

    #BOX233>.ladi-box {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 15px 30px -10px;
    }

    #BOX242>.ladi-box,
    #BOX392>.ladi-box {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(164, 152, 152, 0.4);
    }

    #SHAPE246 svg:last-child,
    #SHAPE405 svg:last-child {
        fill: rgba(183, 181, 181, 0.1);
    }

    #GROUP436.ladi-animation>.ladi-group {
        animation-name: fadeInLeft;
        animation-iteration-count: 1;
    }

    #BOX391>.ladi-box {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px 10px;
    }

    #IMAGE151>.ladi-image {
        transform: rotate(-12deg);
    }

    #IMAGE151:hover>.ladi-image {
        transform: rotate(0deg);
        opacity: 1;
    }

    #IMAGE43.ladi-animation>.ladi-image,
    #HEADLINE396.ladi-animation>.ladi-headline {
        animation-name: fadeInLeft;
        animation-delay: 1s;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }

    #IMAGE46>.ladi-image>.ladi-image-background {
        background-image: url("https://w.ladicdn.com/s600x750/5c728619c417ab07e5194baa/cf0e3bd8-300c-4eb8-91f4-4b2b0e3511f5-20240115124611-c1dsx.jpg");
    }

    #IMAGE46.ladi-animation>.ladi-image,
    #HEADLINE395.ladi-animation>.ladi-headline {
        animation-name: fadeInRight;
        animation-delay: 1s;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }

    #BOX48>.ladi-box {
        border-width: 8px;
        border-style: solid;
        border-color: rgb(255, 255, 255);
    }

    #BOX48>.ladi-box,
    #BUTTON374>.ladi-button>.ladi-button-background,
    #BUTTON376>.ladi-button>.ladi-button-background {
        background-color: rgb(244, 240, 233);
    }

    #BOX48.ladi-animation>.ladi-box,
    #GROUP428.ladi-animation>.ladi-group,
    #PARAGRAPH410.ladi-animation>.ladi-paragraph,
    #COUNTDOWN335.ladi-animation>.ladi-countdown,
    #PARAGRAPH336.ladi-animation>.ladi-paragraph,
    #PARAGRAPH337.ladi-animation>.ladi-paragraph,
    #PARAGRAPH338.ladi-animation>.ladi-paragraph,
    #PARAGRAPH339.ladi-animation>.ladi-paragraph,
    #GROUP429.ladi-animation>.ladi-group,
    #PARAGRAPH411.ladi-animation>.ladi-paragraph,
    #BOX383.ladi-animation>.ladi-box {
        animation-name: bounceIn;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #BOX50>.ladi-box {
        background-color: rgb(217, 193, 160);
    }

    #BOX50.ladi-animation>.ladi-box {
        animation-name: fadeInUp;
        animation-delay: 1s;
        animation-duration: 3.5s;
        animation-iteration-count: 1;
    }

    #HEADLINE51>.ladi-headline {
        font-size: 27px;
        line-height: 1.6;
        color: rgb(120, 120, 120);
        text-align: left;
    }

    #IMAGE345.ladi-animation>.ladi-image,
    #SHAPE386.ladi-animation>.ladi-shape {
        animation-name: bounceIn;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #HEADLINE358>.ladi-headline {
        line-height: 1.6;
        color: rgb(37, 38, 40);
        text-align: center;
    }

    #SHAPE353 svg:last-child,
    #SHAPE356 svg:last-child,
    #SHAPE343 svg:last-child,
    #SHAPE344 svg:last-child {
        fill: rgb(0, 0, 0);
    }

    #IMAGE362>.ladi-image>.ladi-image-background {
        background-image: url("https://w.ladicdn.com/s450x550/5c728619c417ab07e5194baa/43cce9d3-3c6c-4355-bb3f-a4e722868dd2-20240115124604-6tcis.jpg");
    }

    #IMAGE362.ladi-animation>.ladi-image {
        animation-name: fadeInLeft;
        animation-delay: 1s;
        animation-duration: 3.5s;
        animation-iteration-count: 1;
    }

    #HEADLINE346,
    #HEADLINE342 {
        top: 27.701px;
    }

    #SHAPE337 {
        top: 23.3647px;
    }

    #GROUP335.ladi-animation>.ladi-group {
        animation-name: bounceIn;
        animation-delay: 1s;
        animation-iteration-count: 1;
    }

    #COUNTDOWN336,
    #COUNTDOWN335 {
        width: 346px;
        height: 57px;
    }

    #COUNTDOWN336>.ladi-countdown,
    #COUNTDOWN335>.ladi-countdown {
        font-size: 40px;
        font-weight: bold;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #COUNTDOWN336>.ladi-countdown>.ladi-element,
    #COUNTDOWN335>.ladi-countdown>.ladi-element {
        width: calc(25% - 7.5px);
        height: 100%;
        margin-right: 10px;
    }

    #PARAGRAPH341>.ladi-paragraph,
    #PARAGRAPH342>.ladi-paragraph,
    #PARAGRAPH343>.ladi-paragraph,
    #PARAGRAPH344>.ladi-paragraph,
    #PARAGRAPH336>.ladi-paragraph,
    #PARAGRAPH337>.ladi-paragraph,
    #PARAGRAPH338>.ladi-paragraph,
    #PARAGRAPH339>.ladi-paragraph {
        font-family: Sriracha, cursive;
        font-size: 16px;
        line-height: 1.6;
        color: rgb(0, 0, 0);
    }

    #SHAPE401.ladi-animation>.ladi-shape,
    #SHAPE402.ladi-animation>.ladi-shape {
        animation-name: pulse;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    #PARAGRAPH410>.ladi-paragraph,
    #PARAGRAPH411>.ladi-paragraph,
    #PARAGRAPH395>.ladi-paragraph,
    #PARAGRAPH396>.ladi-paragraph,
    #HEADLINE405>.ladi-headline,
    #HEADLINE406>.ladi-headline,
    #HEADLINE400>.ladi-headline {
        font-family: Quicksand, sans-serif;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #PARAGRAPH411 {
        width: 400px;
    }

    #SECTION339.ladi-animation {
        animation-name: shake;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #SECTION339>.ladi-section-background {
        background-image: linear-gradient(rgb(244, 240, 233), rgb(255, 242, 250));
        background-color: initial;
        background-size: initial;
        background-origin: initial;
        background-position: initial;
        background-repeat: initial;
        background-attachment: initial;
    }

    #SECTION339>.ladi-section-background,
    #SECTION315>.ladi-overlay,
    #SECTION344>.ladi-section-background {
        -webkit-background-clip: initial;
    }

    #HEADLINE339>.ladi-headline {
        font-family: Exo, sans-serif;
        color: rgb(68, 68, 68);
        text-decoration-line: underline;
        text-align: center;
    }

    #PARAGRAPH345>.ladi-paragraph {
        font-family: Muli, sans-serif;
        line-height: 1.6;
        color: rgb(68, 68, 68);
        text-align: center;
    }

    #IMAGE378>.ladi-image {
        border-radius: 8px;
    }

    #SECTION341>.ladi-section-background {
        background-color: rgb(255, 242, 250);
    }

    #IMAGE379>.ladi-image>.ladi-overlay,
    #SHAPE380>.ladi-shape,
    #SHAPE381>.ladi-shape,
    #SHAPE382>.ladi-shape,
    #SHAPE383>.ladi-shape,
    #SHAPE384>.ladi-shape,
    #SHAPE385>.ladi-shape,
    #BOX317>.ladi-box,
    #BOX380>.ladi-box,
    #BOX381>.ladi-box {
        opacity: 0.7;
    }

    #IMAGE379>.ladi-image>.ladi-image-background {
        top: -54px;
        left: -260px;
    }

    #IMAGE379>.ladi-image {
        border-top-left-radius: 500px;
        border-top-right-radius: 500px;
    }

    #HEADLINE340>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-size: 40px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(68, 68, 68);
        text-align: center;
    }

    #SHAPE356.ladi-animation>.ladi-shape {
        animation-name: swing;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #IMAGE340.ladi-animation>.ladi-image,
    #GROUP408.ladi-animation>.ladi-group {
        animation-name: bounceInLeft;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #GROUP348.ladi-animation>.ladi-group {
        animation-name: bounceInLeft;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #LINE335>.ladi-line>.ladi-line-container,
    #LINE336>.ladi-line>.ladi-line-container {
        border-top: 1px solid rgb(0, 0, 0);
        border-right: 1px solid rgb(0, 0, 0);
        border-bottom: 1px solid rgb(0, 0, 0);
        border-left: 0px !important;
    }

    #LINE335>.ladi-line,
    #LINE336>.ladi-line {
        width: 100%;
        padding: 8px 0px;
    }

    #HEADLINE348>.ladi-headline,
    #HEADLINE349>.ladi-headline,
    #HEADLINE353>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #PARAGRAPH350>.ladi-paragraph,
    #PARAGRAPH355>.ladi-paragraph {
        font-family: Mulish, sans-serif;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #GROUP406.ladi-animation>.ladi-group,
    #GROUP407.ladi-animation>.ladi-group {
        animation-name: bounceInLeft;
        animation-delay: 1s;
        animation-iteration-count: 1;
    }

    #BOX373>.ladi-box,
    #BOX374>.ladi-box,
    #BOX375>.ladi-box,
    #BOX376>.ladi-box,
    #BOX377>.ladi-box,
    #BOX378>.ladi-box {
        background-color: rgb(214, 214, 214);
    }

    #BOX373.ladi-animation>.ladi-box,
    #BOX374.ladi-animation>.ladi-box,
    #BOX375.ladi-animation>.ladi-box,
    #BOX376.ladi-animation>.ladi-box,
    #BOX377.ladi-animation>.ladi-box,
    #BOX378.ladi-animation>.ladi-box {
        animation-name: pulse;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    #SHAPE381 {
        left: 6px;
    }

    #IMAGE341.ladi-animation>.ladi-image,
    #GROUP412.ladi-animation>.ladi-group {
        animation-name: bounceInRight;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #GROUP349.ladi-animation>.ladi-group {
        animation-name: bounceInRight;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    #SHAPE344 {
        height: 16.9119px;
    }

    #PARAGRAPH396>.ladi-paragraph:hover {
        transform: scale(1.02);
        opacity: 1;
    }

    #GROUP413.ladi-animation>.ladi-group,
    #GROUP414.ladi-animation>.ladi-group {
        animation-name: bounceInRight;
        animation-delay: 1s;
        animation-iteration-count: 1;
    }

    #SHAPE385 {
        left: 5px;
    }

    #SECTION315>.ladi-overlay {
        background-image: linear-gradient(rgb(255, 242, 250), rgb(240, 240, 240));
        background-color: initial;
        background-size: initial;
        background-origin: initial;
        background-position: initial;
        background-repeat: initial;
        background-attachment: initial;
    }

    #SECTION315>.ladi-section-background {
        background-color: rgb(244, 232, 211);
    }

    #GROUP316.ladi-animation>.ladi-group,
    #GROUP416.ladi-animation>.ladi-group,
    #GROUP418.ladi-animation>.ladi-group {
        animation-name: fadeInUp;
        animation-delay: 0.2s;
        animation-duration: 1.5s;
        animation-iteration-count: 1;
    }

    #BOX317>.ladi-box,
    #BOX380>.ladi-box,
    #BOX381>.ladi-box {
        background-color: rgb(66, 62, 56);
    }

    #HEADLINE318>.ladi-headline,
    #HEADLINE387>.ladi-headline,
    #HEADLINE388>.ladi-headline {
        font-family: Philosopher, sans-serif;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(239, 203, 132);
        text-decoration-line: underline;
    }

    #PARAGRAPH319>.ladi-paragraph,
    #PARAGRAPH320>.ladi-paragraph,
    #PARAGRAPH397>.ladi-paragraph,
    #PARAGRAPH398>.ladi-paragraph,
    #PARAGRAPH399>.ladi-paragraph,
    #PARAGRAPH400>.ladi-paragraph {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(222, 222, 222);
    }

    #BUTTON344>.ladi-button>.ladi-button-background,
    #BUTTON345>.ladi-button>.ladi-button-background,
    #BUTTON365>.ladi-button>.ladi-button-background,
    #BUTTON366>.ladi-button>.ladi-button-background,
    #BUTTON367>.ladi-button>.ladi-button-background,
    #BUTTON368>.ladi-button>.ladi-button-background {
        background-color: rgb(154, 153, 153);
    }

    #BUTTON344>.ladi-button,
    #BUTTON345>.ladi-button,
    #BUTTON365>.ladi-button,
    #BUTTON366>.ladi-button,
    #BUTTON367>.ladi-button,
    #BUTTON368>.ladi-button {
        border-width: 1px;
        border-radius: 5px;
        border-style: solid;
        border-color: rgb(127, 127, 127);
    }

    #BUTTON344>.ladi-button:hover .ladi-button-background,
    #BUTTON345>.ladi-button:hover .ladi-button-background,
    #BUTTON365>.ladi-button:hover .ladi-button-background,
    #BUTTON366>.ladi-button:hover .ladi-button-background,
    #BUTTON367>.ladi-button:hover .ladi-button-background,
    #BUTTON368>.ladi-button:hover .ladi-button-background {
        background-image: none !important;
        background-color: rgb(209, 215, 218) !important;
        background-size: initial !important;
        background-origin: initial !important;
        background-position: initial !important;
        background-repeat: initial !important;
        background-attachment: initial !important;
    }

    #BUTTON_TEXT344,
    #BUTTON_TEXT345,
    #BUTTON_TEXT365,
    #BUTTON_TEXT366,
    #BUTTON_TEXT367,
    #BUTTON_TEXT368 {
        width: 146px;
    }

    #BUTTON_TEXT344,
    #BUTTON_TEXT345,
    #BUTTON_TEXT365,
    #BUTTON_TEXT366,
    #BUTTON_TEXT367,
    #BUTTON_TEXT368,
    #BUTTON_TEXT370,
    #BUTTON_TEXT270,
    #BUTTON_TEXT262,
    #BUTTON_TEXT264,
    #BUTTON_TEXT266,
    #BUTTON_TEXT268,
    #BUTTON_TEXT354,
    #BUTTON_TEXT355,
    #BUTTON_TEXT359,
    #BUTTON_TEXT360,
    #BUTTON_TEXT361,
    #BUTTON_TEXT362,
    #BUTTON_TEXT364,
    #BUTTON_TEXT378,
    #BUTTON_TEXT374,
    #BUTTON_TEXT373,
    #BUTTON_TEXT375,
    #BUTTON_TEXT376,
    #BUTTON_TEXT377 {
        top: 9px;
        left: 0px;
    }

    #BUTTON_TEXT344>.ladi-headline,
    #BUTTON_TEXT345>.ladi-headline,
    #BUTTON_TEXT365>.ladi-headline,
    #BUTTON_TEXT366>.ladi-headline,
    #BUTTON_TEXT367>.ladi-headline,
    #BUTTON_TEXT368>.ladi-headline {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(241, 243, 244);
        text-align: center;
    }

    #HEADLINE386>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(49, 48, 48);
        text-align: center;
    }

    #SHAPE386 {
        width: 56px;
        height: 56px;
    }

    #SHAPE386 svg:last-child {
        fill: rgb(68, 68, 68);
    }

    #SECTION348>.ladi-overlay,
    #IMAGE383>.ladi-image>.ladi-overlay {
        opacity: 0.4;
    }

    #GROUP421.ladi-animation>.ladi-group,
    #IMAGE385.ladi-animation>.ladi-image {
        animation-name: tada;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    #BOX382>.ladi-box {
        border-width: 1px;
        border-radius: 15px;
        border-style: solid;
        border-color: rgb(255, 255, 255);
        background-color: rgb(68, 66, 66);
        box-shadow: rgb(0, 0, 0) 5px 15px 10px -15px;
    }

    #HEADLINE390>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #PARAGRAPH401>.ladi-paragraph {
        font-family: Roboto, sans-serif;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #SECTION344>.ladi-section-background {
        background-image: linear-gradient(rgb(255, 242, 250), rgb(236, 201, 223));
        background-color: initial;
        background-size: initial;
        background-origin: initial;
        background-position: initial;
        background-repeat: initial;
        background-attachment: initial;
    }

    #PARAGRAPH359.ladi-animation>.ladi-paragraph,
    #SHAPE396.ladi-animation>.ladi-shape,
    #HEADLINE397.ladi-animation>.ladi-headline,
    #PARAGRAPH409.ladi-animation>.ladi-paragraph {
        animation-name: fadeInDown;
        animation-delay: 1s;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }

    #SHAPE357.ladi-animation>.ladi-shape {
        animation-name: swing;
        animation-delay: 1s;
        animation-duration: 3s;
        animation-iteration-count: infinite;
    }

    #SHAPE357 svg:last-child {
        fill: rgb(152, 114, 137);
    }

    #BOX345>.ladi-box {
        background-color: rgb(218, 191, 218);
        opacity: 0.8;
    }

    #BOX345>.ladi-box:hover {
        background-image: none;
        background-color: rgb(255, 242, 250);
        background-size: initial;
        background-origin: initial;
        background-position: initial;
        background-repeat: initial;
        background-attachment: initial;
        -webkit-background-clip: initial;
        transform: scale(1.05);
        opacity: 1;
    }

    #PARAGRAPH370>.ladi-paragraph {
        font-family: Muli, sans-serif;
        font-style: italic;
        line-height: 1.6;
        color: rgb(24, 49, 250);
        text-decoration-line: underline;
    }

    #PARAGRAPH370.ladi-animation>.ladi-paragraph {
        animation-name: tada;
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1;
    }

    #SHAPE363 {
        width: 22px;
        height: 22px;
    }

    #SHAPE363.ladi-animation>.ladi-shape {
        animation-name: wobble;
        animation-delay: 1s;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    #SHAPE363 svg:last-child {
        fill: rgb(24, 49, 250);
    }

    #FORM339>.ladi-form {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(0, 0, 0);
    }

    #FORM339 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"],
    #FORM339 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing,
    #FORM339 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing::placeholder,
    #FORM339 .ladi-form .ladi-survey-option .ladi-survey-option-label,
    #FORM339 .ladi-form-item .ladi-form-control::placeholder,
    #FORM339 .ladi-form-item select.ladi-form-control[data-selected=""],
    #FORM339 .ladi-form-checkout-payment-quantity input,
    #FORM343 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"],
    #FORM343 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing,
    #FORM343 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing::placeholder,
    #FORM343 .ladi-form .ladi-survey-option .ladi-survey-option-label,
    #FORM343 .ladi-form-item .ladi-form-control::placeholder,
    #FORM343 .ladi-form-item select.ladi-form-control[data-selected=""],
    #FORM343 .ladi-form-checkout-payment-quantity input,
    #FORM342 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"],
    #FORM342 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing,
    #FORM342 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing::placeholder,
    #FORM342 .ladi-form .ladi-survey-option .ladi-survey-option-label,
    #FORM342 .ladi-form-item .ladi-form-control::placeholder,
    #FORM342 .ladi-form-item select.ladi-form-control[data-selected=""],
    #FORM342 .ladi-form-checkout-payment-quantity input {
        color: rgb(0, 0, 0);
    }

    #FORM339 .ladi-form-item,
    #FORM340 .ladi-form-item,
    #FORM343 .ladi-form-item,
    #FORM342 .ladi-form-item {
        padding-left: 5px;
        padding-right: 5px;
    }

    #FORM339 .ladi-form-item.otp-countdown:before,
    #FORM340 .ladi-form-item.otp-countdown:before,
    #FORM343 .ladi-form-item.otp-countdown:before,
    #FORM342 .ladi-form-item.otp-countdown:before {
        right: 10px;
    }

    #FORM339 .ladi-form-item.ladi-form-checkbox,
    #FORM340 .ladi-form-item.ladi-form-checkbox,
    #FORM343 .ladi-form-item.ladi-form-checkbox,
    #FORM342 .ladi-form-item.ladi-form-checkbox {
        padding-left: 10px;
        padding-right: 10px;
    }

    #FORM339 .ladi-survey-option,
    #FORM340 .ladi-survey-option {
        text-align: left;
    }

    #FORM339 .ladi-form-item-container,
    #FORM339 .ladi-form-checkout-box,
    #FORM339 .ladi-form-label-container .ladi-form-label-item {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(241, 243, 244);
    }

    #FORM339 .ladi-form-item-container .ladi-form-item.ladi-form-quantity,
    #FORM340 .ladi-form-item-container .ladi-form-item.ladi-form-quantity,
    #FORM343 .ladi-form-item-container .ladi-form-item.ladi-form-quantity,
    #FORM342 .ladi-form-item-container .ladi-form-item.ladi-form-quantity {
        width: calc(100% + 1px);
    }

    #FORM339 .ladi-form-checkout-payment-quantity input,
    #FORM340 .ladi-form-checkout-payment-quantity input,
    #FORM343 .ladi-form-checkout-payment-quantity input,
    #FORM342 .ladi-form-checkout-payment-quantity input {
        border-color: rgb(241, 243, 244);
    }

    #FORM339 .ladi-form-item-background {
        opacity: 0.85;
    }

    #BUTTON370>.ladi-button>.ladi-button-background,
    #BUTTON371>.ladi-button>.ladi-button-background {
        background-color: rgb(152, 114, 137);
    }

    #BUTTON370>.ladi-button {
        border-radius: 20px;
    }

    #BUTTON_TEXT370>.ladi-headline {
        font-size: 14px;
        font-weight: bold;
        color: rgb(241, 243, 244);
        letter-spacing: 0.5px;
        text-align: center;
    }

    #FORM_ITEM350 {
        height: 36px;
    }

    #FORM_ITEM352 {
        top: 0.5px;
    }

    #FORM_ITEM353 {
        height: 35px;
    }

    #BOX384>.ladi-box,
    #POPUP346>.ladi-popup>.ladi-overlay,
    #POPUP346>.ladi-popup>.ladi-popup-background,
    #POPUP346>.ladi-popup,
    #THIEP>.ladi-popup>.ladi-overlay,
    #THIEP>.ladi-popup>.ladi-popup-background,
    #THIEP>.ladi-popup,
    #MUNGCUOI>.ladi-popup>.ladi-overlay,
    #MUNGCUOI>.ladi-popup>.ladi-popup-background,
    #MUNGCUOI>.ladi-popup,
    #LOICHUC>.ladi-popup>.ladi-overlay,
    #LOICHUC>.ladi-popup>.ladi-popup-background,
    #LOICHUC>.ladi-popup,
    #XNTD>.ladi-popup>.ladi-overlay,
    #XNTD>.ladi-popup>.ladi-popup-background,
    #XNTD>.ladi-popup {
        border-radius: 10px;
    }

    #BOX384>.ladi-box {
        background-color: rgb(248, 235, 238);
        opacity: 0.88;
    }

    #HEADLINE393>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(101, 99, 99);
        text-align: center;
    }

    #SHAPE395 {
        width: 200px;
        height: 10px;
    }

    #SHAPE395 svg:last-child,
    #SHAPE398 svg:last-child {
        fill: rgb(100, 98, 98);
    }

    #PARAGRAPH404>.ladi-paragraph {
        font-family: Montserrat, sans-serif;
        line-height: 1.6;
        color: rgb(68, 68, 68);
        text-align: center;
    }

    #FORM340>.ladi-form {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(68, 68, 68);
    }

    #FORM340 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"],
    #FORM340 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing,
    #FORM340 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing::placeholder,
    #FORM340 .ladi-form .ladi-survey-option .ladi-survey-option-label,
    #FORM340 .ladi-form-item .ladi-form-control::placeholder,
    #FORM340 .ladi-form-item select.ladi-form-control[data-selected=""],
    #FORM340 .ladi-form-checkout-payment-quantity input {
        color: rgb(68, 68, 68);
    }

    #FORM340 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
        background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgb(68%2C%2068%2C%2068)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
    }

    #FORM340 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check.multiple.checked:before,
    #FORM340 .ladi-form [data-form-checkout-item="product"] .ladi-form-checkout-payment-check:not(.multiple).checked:before,
    #FORM340 .ladi-form [data-form-checkout-item="payment"] .ladi-form-checkout-payment-check.checked:before,
    #FORM340 .ladi-form-checkout-payment-quantity .up:before,
    #FORM340 .ladi-form-checkout-payment-quantity .down:before,
    #FORM340 [data-form-checkout-item="payment"] .ladi-form-item .ladi-form-checkout-payment-content div:before {
        background-color: rgb(68, 68, 68);
    }

    #FORM340 .ladi-form-item-container,
    #FORM340 .ladi-form-checkout-box,
    #FORM340 .ladi-form-label-container .ladi-form-label-item {
        border-width: 1px;
        border-radius: 5px;
        border-style: solid;
        border-color: rgb(241, 243, 244);
    }

    #FORM340 .ladi-form-item-background {
        border-radius: 4px;
    }

    #BUTTON371>.ladi-button:hover .ladi-button-background {
        background-image: none !important;
        background-color: rgb(168, 6, 6) !important;
        background-size: initial !important;
        background-origin: initial !important;
        background-position: initial !important;
        background-repeat: initial !important;
        background-attachment: initial !important;
    }

    #BUTTON_TEXT371>.ladi-headline {
        font-size: 16px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(241, 243, 244);
        text-align: center;
    }

    #FORM_ITEM357 .ladi-form-checkbox-item {
        margin-top: 12px;
        margin-bottom: 12px;
        margin-left: 12px;
        margin-right: 10px !important;
    }

    #FORM_ITEM357 .ladi-form-item.ladi-form-checkbox {
        padding-top: 12px;
        padding-bottom: 12px;
    }

    #FORM_ITEM357 .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input {
        width: 18px;
        height: 18px;
    }

    #FORM_ITEM357 .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
        width: calc(100% - 22px);
    }

    #HEADLINE395>.ladi-headline {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(59, 84, 201);
        text-decoration-line: underline;
        text-align: left;
    }

    #HEADLINE396>.ladi-headline {
        font-family: Mulish, sans-serif;
        line-height: 1.6;
        color: rgb(59, 84, 201);
        text-decoration-line: underline;
        text-align: right;
    }

    #IMAGE385>.ladi-image {
        border-width: 1px;
        border-radius: 300px;
        border-style: solid;
        border-color: rgb(188, 83, 77);
    }

    #HEADLINE367>.ladi-headline {
        font-family: VkJIDIIExvdmUudHRm;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #BOX385>.ladi-box {
        background-color: rgb(220, 220, 220);
    }

    #PARAGRAPH405>.ladi-paragraph {
        font-family: Philosopher, sans-serif;
        line-height: 1.6;
        color: rgb(0, 0, 0);
    }

    #SHAPE396 svg:last-child {
        fill: rgb(188, 49, 49);
    }

    #POPUP247,
    #DROPBOX338,
    #POPUP342,
    #POPUP346,
    #POPUP348,
    #THIEP,
    #MUNGCUOI,
    #LOICHUC,
    #XNTD,
    #POPUP353,
    #CHURE,
    #CODAU,
    #POPUP356,
    #THIEPMOI {
        right: 0px;
        bottom: 0px;
        margin: auto;
    }

    #IMAGE252>.ladi-image>.ladi-image-background,
    #IMAGE367>.ladi-image>.ladi-image-background {
        width: 652.073px;
        height: 387px;
        background-image: url("https://w.ladicdn.com/s1000x700/5c7362c6c417ab07e5196b05/ytuht-20201125095712.png");
    }

    #BOX253,
    #BOX350 {
        left: 12.5px;
    }

    #BOX253>.ladi-box,
    #BOX350>.ladi-box {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(217, 215, 213);
    }

    #HEADLINE248>.ladi-headline,
    #HEADLINE362>.ladi-headline {
        line-height: 1.6;
        color: rgb(97, 86, 79);
        text-align: center;
    }

    #HEADLINE249>.ladi-headline,
    #HEADLINE363>.ladi-headline {
        font-size: 42px;
        line-height: 1.6;
        color: rgb(194, 154, 98);
        text-align: center;
    }

    #PARAGRAPH250>.ladi-paragraph,
    #PARAGRAPH365>.ladi-paragraph {
        line-height: 1.6;
        color: rgb(109, 109, 109);
        text-align: center;
    }

    #IMAGE251,
    #IMAGE251>.ladi-image>.ladi-image-background,
    #IMAGE368,
    #IMAGE368>.ladi-image>.ladi-image-background {
        width: 90.8293px;
        height: 49px;
    }

    #POPUP260 {
        top: 57px;
        left: auto;
        right: 5px;
        bottom: auto;
        margin: auto;
    }

    #BUTTON270 {
        width: 171.293px;
        height: 40px;
    }

    #BUTTON_TEXT270,
    #BUTTON_TEXT374,
    #BUTTON_TEXT373,
    #BUTTON_TEXT375,
    #BUTTON_TEXT376 {
        width: 171px;
    }

    #BUTTON_TEXT270>.ladi-headline,
    #BUTTON_TEXT262>.ladi-headline,
    #BUTTON_TEXT264>.ladi-headline,
    #BUTTON_TEXT266>.ladi-headline,
    #BUTTON_TEXT268>.ladi-headline {
        line-height: 1.6;
        color: rgb(37, 38, 40);
        text-align: left;
    }

    #BUTTON262,
    #BUTTON264,
    #BUTTON266,
    #BUTTON268,
    #BUTTON377 {
        height: 40px;
    }

    #BUTTON354>.ladi-button>.ladi-button-background,
    #BUTTON355>.ladi-button>.ladi-button-background {
        background-color: rgb(197, 172, 137);
    }

    #BUTTON354>.ladi-button {
        border-width: 1px;
        border-radius: 33px;
        border-color: rgb(0, 0, 0);
    }

    #BUTTON354>.ladi-button,
    #BUTTON355>.ladi-button {
        box-shadow: rgb(0, 0, 0) 0px 7px 25px -5px;
    }

    #BUTTON_TEXT354>.ladi-headline,
    #BUTTON_TEXT355>.ladi-headline {
        font-family: Muli, sans-serif;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(37, 38, 40);
        text-align: center;
    }

    #BUTTON355>.ladi-button {
        border-width: 1px;
        border-radius: 33px;
        border-color: rgb(37, 38, 40);
    }

    #POPUP346 {
        width: 411px;
        height: 567px;
    }

    #IMAGE374,
    #IMAGE374>.ladi-image>.ladi-image-background {
        width: 57.9996px;
        height: 57.9996px;
    }

    #IMAGE374 {
        top: 7.0002px;
        left: 176.5px;
    }

    #IMAGE374>.ladi-image>.ladi-image-background {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/th-20240112130749-9eb7u.png");
    }

    #IMAGE374.ladi-animation>.ladi-image {
        animation-name: tada;
        animation-delay: 1s;
        animation-duration: 3s;
        animation-iteration-count: infinite;
    }

    #HEADLINE372 {
        width: 299px;
        top: 53.4943px;
        left: 56px;
    }

    #HEADLINE372>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-size: 40px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #PARAGRAPH371>.ladi-paragraph {
        font-family: Roboto, sans-serif;
        font-size: 15px;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #GROUP430,
    #GROUP380,
    #GROUP431,
    #GROUP381 {
        width: 189px;
        height: 373.902px;
    }

    #GROUP430 {
        top: 175.543px;
        left: 11.5px;
    }

    #BOX360,
    #BOX361 {
        width: 189px;
        height: 350px;
    }

    #BOX360>.ladi-box,
    #BOX361>.ladi-box {
        border-width: 1px;
        border-radius: 5px;
        border-style: solid;
        border-color: rgb(222, 222, 222);
    }

    #HEADLINE373,
    #PARAGRAPH373,
    #HEADLINE378,
    #PARAGRAPH375 {
        width: 189px;
    }

    #HEADLINE373,
    #HEADLINE378 {
        top: 8px;
        left: 0px;
    }

    #HEADLINE373>.ladi-headline,
    #HEADLINE378>.ladi-headline {
        font-family: "Baloo Bhaina 2", cursive;
        font-size: 18px;
        line-height: 1.4;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #BUTTON359,
    #HOPMUNGCUOI,
    #BUTTON361,
    #BUTTON362 {
        width: 85px;
        height: 21px;
    }

    #BUTTON359 {
        top: 321.865px;
        left: 6px;
    }

    #BUTTON359>.ladi-button>.ladi-button-background,
    #HOPMUNGCUOI>.ladi-button>.ladi-button-background,
    #BUTTON361>.ladi-button>.ladi-button-background,
    #BUTTON362>.ladi-button>.ladi-button-background {
        background-color: rgb(222, 222, 222);
    }

    #BUTTON359>.ladi-button,
    #HOPMUNGCUOI>.ladi-button,
    #BUTTON361>.ladi-button,
    #BUTTON362>.ladi-button {
        border-radius: 15px;
    }

    #BUTTON_TEXT359,
    #BUTTON_TEXT360,
    #BUTTON_TEXT361,
    #BUTTON_TEXT362 {
        width: 85px;
    }

    #BUTTON_TEXT359>.ladi-headline,
    #BUTTON_TEXT360>.ladi-headline,
    #BUTTON_TEXT361>.ladi-headline,
    #BUTTON_TEXT362>.ladi-headline {
        font-family: "Roboto Slab", serif;
        font-size: 10px;
        line-height: 1.4;
        color: rgb(37, 38, 40);
        letter-spacing: 0px;
        text-align: center;
    }

    #HOPMUNGCUOI {
        top: 321.865px;
        left: 96.875px;
    }

    #PARAGRAPH373,
    #PARAGRAPH375 {
        top: 354.902px;
        left: 0px;
    }

    #PARAGRAPH373>.ladi-paragraph,
    #PARAGRAPH375>.ladi-paragraph {
        font-family: Muli, sans-serif;
        font-size: 11.65px;
        line-height: 1.6;
        color: rgb(5, 47, 209);
        text-decoration-line: underline;
        text-align: center;
    }

    #IMAGE389,
    #IMAGE390 {
        width: 169.879px;
        height: 237.6px;
    }

    #IMAGE389 {
        left: 9.5605px;
    }

    #IMAGE389>.ladi-image>.ladi-image-background {
        width: 169.88px;
        height: 367.62px;
        top: -19.6747px;
        left: -0.849395px;
        background-size:     cover;                      /* <------ */
        background-repeat:   no-repeat;
        background-position: center center;
        background-image: url("{{ asset('images/wedding/qr_code/groom.jpg')}}");
    }

    #IMAGE389>.ladi-image,
    #IMAGE390>.ladi-image {
        border-width: 1px;
        border-radius: 8px;
        border-style: solid;
        border-color: rgb(225, 225, 225);
    }

    #GROUP431 {
        top: 175.543px;
        left: 211.5px;
    }

    #BUTTON361 {
        top: 321.865px;
        left: 6.562px;
    }

    #BUTTON362 {
        top: 321.865px;
        left: 97.437px;
    }

    #IMAGE390 {
        top: 68.151px;
        left: 9.56px;
    }

    #IMAGE390>.ladi-image>.ladi-image-background {
        width: 189.105px;
        height: 367.62px;
        top: -21.6747px;
        left: -11.8494px;
        background-size:     cover;                      /* <------ */
        background-repeat:   no-repeat;
        background-position: center center;
        background-image: url("{{ asset('images/wedding/qr_code/bride.png')}}");
    }

    #POPUP348>.ladi-popup>.ladi-overlay,
    #POPUP348>.ladi-popup>.ladi-popup-background {
        border-radius: 9px;
    }

    #POPUP348.ladi-animation>.ladi-popup,
    #POPUP348.ladi-animation>.popup-close {
        animation-name: pulse;
        animation-duration: 0.5s;
    }

    #HEADLINE381>.ladi-headline {
        font-size: 20px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #BUTTON364>.ladi-button>.ladi-button-background {
        background-color: rgb(177, 135, 177);
    }

    #BUTTON364>.ladi-button {
        border-width: 1px;
        border-radius: 30px;
        border-style: solid;
        border-color: rgb(0, 0, 0);
    }

    #BUTTON_TEXT364>.ladi-headline {
        font-weight: bold;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #HEADLINE382>.ladi-headline,
    #HEADLINE383>.ladi-headline,
    #HEADLINE384>.ladi-headline,
    #HEADLINE385>.ladi-headline {
        font-family: Play, sans-serif;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="1"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/5f4bf5f7-9eb8-473e-a95f-6ab0ab5d77ca-20240608164954-iewo7.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="2"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/be611b44-5382-418c-acb3-360921f45b0c-20240608165011-3fteg.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="3"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/eb497993-322b-42ac-9c94-cad61c45a4d7-20240608165012-ozpaa.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="4"],
    #GALLERY339 .ladi-gallery .ladi-gallery-control-item[data-index="0"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/e6f4c0e8-7b23-4a4a-aa44-17c55e801498-20240608165011-n-bo5.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="6"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/c372c35c-2fc4-4bfe-9478-d7103dac5ff0-20240608165011-wupru.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="7"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/c13f7535-3404-4c31-a814-571647df4bbe-20240608165011-b8lzy.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="8"],
    #GALLERY338 .ladi-gallery .ladi-gallery-control-item[data-index="1"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/86559832-f249-4537-999b-1df6bfe461ff-20240608165003-d1ny3.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="10"],
    #GALLERY338 .ladi-gallery .ladi-gallery-control-item[data-index="0"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/0225962a-f125-42f3-8419-07ad78a11013-20240608165002-4fz0v.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="11"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/5163aef3-a0d1-48dc-800d-b122e95dc4e9-20240608165002-dn5_4.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="12"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/43cce9d3-3c6c-4355-bb3f-a4e722868dd2-20240608164954-efepf.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="13"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/9f2d8c80-2d1e-4e20-bb7b-6a5f93716515-20240608164954-_x2l3.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="14"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/3f3a0e3b-01f1-481a-8b40-3f3d5bbe92a0-20240608164954-egael.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="15"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/2e408ebd-ce21-4bac-8b6b-40edcc3b9b6f-20240608164953-5ojm_.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="16"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/fa9faa6f-9244-4925-845d-d53f9e98198a-20240608165012-ktoqv.jpg");
    }

    #GALLERY337 .ladi-gallery .ladi-gallery-control-item[data-index="17"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/2d77265c-c799-41fd-9a4f-f319a67844ba-20240608164953-8qzxw.jpg");
    }

    #GALLERY339 .ladi-gallery .ladi-gallery-control-item[data-index="1"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/1ef587ae-78f6-40d2-a64c-6881ff9bd8d2-20240608165704-ywgmz.jpg");
    }

    #GALLERY339 .ladi-gallery .ladi-gallery-control-item[data-index="2"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/0a29f660-11fc-4c81-87d4-dc0e1cfa43a8-20240608165704-9upi4.jpg");
    }

    #GALLERY339 .ladi-gallery .ladi-gallery-control-item[data-index="3"] {
        background-image: url("https://w.ladicdn.com/s400x400/5c728619c417ab07e5194baa/54cc98a6-9603-4075-aded-fc73548aec8e-20240608165705-dafec.jpg");
    }

    #POPUP356 {
        width: 408px;
        height: 630px;
    }

    #GROUP427 {
        width: 343px;
        height: 65.713px;
        top: 4px;
        left: 32.5px;
    }

    #HEADLINE397 {
        width: 343px;
    }

    #HEADLINE397>.ladi-headline {
        font-family: "Dancing Script", cursive;
        font-size: 40px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(101, 99, 99);
        text-align: center;
    }

    #HEADLINE397>.ladi-headline:hover {
        color: rgb(168, 6, 6);
    }

    #SHAPE398 {
        width: 100px;
        height: 10px;
        top: 55.713px;
        left: 121.5px;
    }

    #SHAPE398:hover>.ladi-shape svg:last-child {
        fill: rgb(168, 6, 6);
    }

    #PARAGRAPH409 {
        width: 358px;
        top: 78.5px;
        left: 25px;
    }

    #PARAGRAPH409>.ladi-paragraph {
        font-family: Niramit, sans-serif;
        font-size: 15px;
        line-height: 1.6;
        color: rgb(102, 101, 101);
        text-align: center;
    }

    #VIDEO340,
    #VIDEO341 {
        width: 375.111px;
        height: 211px;
    }

    #VIDEO340 {
        top: 148px;
        left: 16.4445px;
    }

    #VIDEO340>.ladi-video>.ladi-video-background {
        background-image: url("https://w.ladicdn.com/s375x211/5c728619c417ab07e5194baa/z5509894638141_d5ab8707f56e5ed484d9a756bf434da9-20240605084028-ivhfe.jpg");
        background-size: cover;
        background-origin: content-box;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    #SHAPE340,
    #SHAPE341 {
        top: 85.5px;
        left: 167.555px;
    }

    #VIDEO341 {
        top: 386px;
        left: 16.4445px;
    }

    #VIDEO341>.ladi-video>.ladi-video-background {
        background-image: url("https://w.ladicdn.com/s375x211/5c728619c417ab07e5194baa/z5509894719740_230c5a81df1b51d2590353df117474c9-20240605084126-v_dyu.jpg");
        background-size: cover;
        background-origin: content-box;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    #IMAGE397>.ladi-image,
    #IMAGE394>.ladi-image {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(222, 222, 222);
    }

    #HEADLINE404>.ladi-headline,
    #HEADLINE399>.ladi-headline {
        font-family: VVZOTWpSGuZyUVEY;
        line-height: 1.6;
        color: rgb(205, 99, 99);
        text-align: center;
    }

    #FORM343>.ladi-form,
    #FORM342>.ladi-form {
        font-family: Quicksand, sans-serif;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #FORM343 .ladi-form-item .ladi-form-control-select,
    #FORM342 .ladi-form-item .ladi-form-control-select {
        text-align-last: center;
    }

    #FORM343 .ladi-survey-option,
    #FORM342 .ladi-survey-option {
        text-align: center;
    }

    #FORM343 .ladi-form-item-container,
    #FORM343 .ladi-form-checkout-box,
    #FORM343 .ladi-form-label-container .ladi-form-label-item,
    #FORM342 .ladi-form-item-container,
    #FORM342 .ladi-form-checkout-box,
    #FORM342 .ladi-form-label-container .ladi-form-label-item {
        border-width: 1px;
        border-color: rgb(241, 243, 244);
    }

    #FORM343 .ladi-form-item-background,
    #FORM342 .ladi-form-item-background {
        background-color: rgb(255, 255, 245);
        opacity: 0;
    }

    #BUTTON378 {
        width: 27px;
        height: 40px;
    }

    #BUTTON_TEXT378 {
        width: 27px;
    }

    #BUTTON_TEXT378>.ladi-headline,
    #BUTTON_TEXT377>.ladi-headline {
        font-size: 14px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(241, 243, 244);
        text-align: center;
    }

    #GROUP443,
    #GROUP444,
    #PARAGRAPH422,
    #GROUP439,
    #GROUP438,
    #PARAGRAPH417 {
        width: 280px;
    }

    #PARAGRAPH420,
    #PARAGRAPH415 {
        width: 204px;
    }

    #PARAGRAPH420 {
        top: 0px;
        left: 38px;
    }

    #PARAGRAPH420>.ladi-paragraph,
    #PARAGRAPH423>.ladi-paragraph,
    #PARAGRAPH424>.ladi-paragraph,
    #PARAGRAPH415>.ladi-paragraph,
    #PARAGRAPH418>.ladi-paragraph,
    #PARAGRAPH419>.ladi-paragraph {
        font-family: Quicksand, sans-serif;
        font-size: 14px;
        font-weight: bold;
        line-height: 1.4;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #PARAGRAPH421,
    #PARAGRAPH423,
    #PARAGRAPH424,
    #PARAGRAPH416,
    #PARAGRAPH418,
    #PARAGRAPH419 {
        width: 92px;
    }

    #PARAGRAPH421,
    #PARAGRAPH416 {
        top: 10.5px;
    }

    #PARAGRAPH421>.ladi-paragraph,
    #PARAGRAPH416>.ladi-paragraph {
        font-family: "Dancing Script", cursive;
        font-weight: bold;
        line-height: 1.4;
        color: rgb(205, 99, 99);
        text-align: center;
    }

    #PARAGRAPH422>.ladi-paragraph,
    #PARAGRAPH417>.ladi-paragraph {
        font-family: "Open Sans", sans-serif;
        line-height: 1.4;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #LINE347 {
        top: 16.5px;
    }

    #LINE347>.ladi-line>.ladi-line-container,
    #LINE348>.ladi-line>.ladi-line-container,
    #LINE345>.ladi-line>.ladi-line-container,
    #LINE346>.ladi-line>.ladi-line-container {
        border-top: 0px !important;
        border-right: 2px solid rgb(34, 32, 32);
        border-bottom: 2px solid rgb(34, 32, 32);
        border-left: 2px solid rgb(34, 32, 32);
    }

    #LINE347>.ladi-line,
    #LINE348>.ladi-line,
    #LINE345>.ladi-line,
    #LINE346>.ladi-line {
        height: 100%;
        padding: 0px 8px;
    }

    #PARAGRAPH423 {
        top: 26.5px;
        left: 16px;
    }

    #PARAGRAPH424 {
        top: 26.5px;
        left: 171px;
    }

    #LINE348 {
        top: 17px;
    }

    #HEADLINE407>.ladi-headline,
    #HEADLINE402>.ladi-headline {
        font-family: Mulish, sans-serif;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(86, 84, 84);
        text-align: center;
    }

    #HEADLINE408>.ladi-headline,
    #HEADLINE403>.ladi-headline {
        font-family: VVZORGluaEhvbiUVEY;
        line-height: 1;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #IMAGE398>.ladi-image>.ladi-image-background {
        background-image: url({{ asset('images/wedding/card.JPG') }});
    }

    #IMAGE398>.ladi-image,
    #IMAGE396>.ladi-image {
        border-radius: 500px;
    }

    #BUTTON374,
    #BUTTON373,
    #BUTTON375,
    #BUTTON376 {
        width: 173px;
        height: 36px;
    }

    #BUTTON374>.ladi-button,
    #BUTTON373>.ladi-button,
    #BUTTON375>.ladi-button,
    #BUTTON376>.ladi-button {
        border-width: 1px;
        border-radius: 6px;
        border-style: solid;
        border-color: rgb(127, 127, 127);
    }

    #BUTTON_TEXT374>.ladi-headline,
    #BUTTON_TEXT376>.ladi-headline {
        font-family: Quicksand, sans-serif;
        font-size: 14px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(194, 154, 98);
        text-align: center;
    }

    #BUTTON373>.ladi-button>.ladi-button-background,
    #BUTTON375>.ladi-button>.ladi-button-background {
        background-color: rgb(194, 154, 98);
    }

    #BUTTON_TEXT373>.ladi-headline,
    #BUTTON_TEXT375>.ladi-headline {
        font-family: Quicksand, sans-serif;
        font-size: 14px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(255, 255, 255);
        text-align: center;
    }

    #HEADLINE401>.ladi-headline {
        font-family: Quicksand, sans-serif;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    #LINE346 {
        left: 99.5px;
    }

    @media (min-width: 768px) {
        #SECTION1 {
            height: 840.8px;
        }
        #SECTION1>.ladi-overlay {
            background-color: rgba(30, 25, 28, 0);
        }
        #SECTION1>.ladi-section-background {
            background-image: url("{{ asset('images/wedding/hero/slideshow1.JPG')}}");
            background-size: auto 100%;
            background-origin: content-box;
            background-position: 50% 0%;
            background-repeat: repeat;
            background-attachment: scroll;
        }
        #GALLERY340 {
            height: 450px;
            top: 125px;
            left: -420px;
        }
        #GALLERY340,
        #GROUP298,
        #GROUP286,
        #GROUP345 {
            display: none !important;
        }
        #GALLERY340 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("{{ asset('images/wedding/hero/gallery1.JPG') }}");
        }
        #GALLERY340 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("{{ asset('images/wedding/hero/gallery2.JPG') }}");
        }
        #GALLERY340 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {
            background-image: url("{{ asset('images/wedding/hero/gallery3.JPG') }}");
        }
        #GROUP391,
        #GROUP392,
        #GROUP393,
        #GROUP394,
        #BOX366,
        #GROUP395,
        #BOX367,
        #GROUP396,
        #BOX368,
        #GROUP397,
        #BOX369,
        #SHAPE355 {
            width: 60px;
            height: 60px;
        }
        #GROUP391,
        #IMAGE105>.ladi-image>.ladi-image-background,
        #IMAGE40>.ladi-image>.ladi-image-background,
        #GROUP428 {
            top: 0px;
            left: 0px;
        }
        #GROUP393,
        #IMAGE379,
        #IMAGE340 {
            left: 0px;
        }
        #GROUP394,
        #GROUP395,
        #GROUP396,
        #GROUP397,
        #GROUP398,
        #GROUP399,
        #GROUP400 {
            top: auto;
            left: auto;
        }
        #GROUP394 {
            right: 26px;
            bottom: 110px;
            position: fixed;
            z-index: 90000050;
        }
        #SHAPE373,
        #SHAPE374,
        #SHAPE375,
        #SHAPE376 {
            width: 40px;
            height: 40px;
            top: 10px;
        }
        #GROUP395 {
            right: 26px;
            bottom: 320px;
            position: fixed;
            z-index: 90000050;
        }
        #GROUP396 {
            right: 25px;
            bottom: 250px;
            position: fixed;
            z-index: 90000050;
        }
        #GROUP397 {
            right: 26px;
            bottom: 180px;
            position: fixed;
            z-index: 90000050;
        }
        #GROUP398,
        #BOX370,
        #GROUP399,
        #BOX371,
        #GROUP400,
        #BOX372 {
            width: 50px;
            height: 50px;
        }
        #GROUP398,
        #GROUP399 {
            right: 30px;
            bottom: 45px;
            position: fixed;
            z-index: 90000050;
        }
        #SHAPE377 {
            top: 11px;
            left: 10px;
        }
        #SHAPE378 {
            top: 17.5px;
            left: 15px;
        }
        #GROUP400 {
            right: 30px;
            bottom: 110px;
            position: fixed;
            z-index: 90000050;
        }
        #SHAPE379 {
            width: 33.3333px;
            height: 33.3333px;
            top: 8.33333px;
            left: 8.33333px;
        }
        #BOX387 {
            width: 2294px;
            height: 840.552px;
            top: -1.448px;
            left: -483px;
        }
        #GROUP364,
        #BOX349 {
            width: 1915px;
            height: 64.448px;
        }
        #GROUP364 {
            top: -1.448px;
            left: -477px;
        }
        #IMAGE352,
        #IMAGE352>.ladi-image>.ladi-image-background {
            width: 62.033px;
            height: 62.033px;
        }
        #IMAGE352 {
            top: 0px;
            left: 477px;
        }
        #IMAGE352>.ladi-image>.ladi-image-background,
        #IMAGE345>.ladi-image>.ladi-image-background {
            background-image: url({{ asset('images/wedding/logo_circle.png') }});
        }
        #SHAPE258 {
            width: 80px;
            height: 51.651px;
            top: 6.3985px;
            left: 1372px;
        }
        #NOTIFY336 {
            width: 303px;
        }
        #IMAGE12,
        #IMAGE12>.ladi-image>.ladi-image-background {
            width: 622.762px;
            height: 326.135px;
        }
        #IMAGE12 {
            top: 372.665px;
            left: 68px;
        }
        #IMAGE12>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s950x650/5c7362c6c417ab07e5196b05/t6urt6-20201125030742.png");
        }
        #HEADLINE10 {
            width: 513px;
            top: 626.8px;
            left: 254.995px;
        }
        #HEADLINE10>.ladi-headline {
            font-size: 41px;
        }
        #HEADLINE8 {
            width: 426px;
            top: 692.8px;
            left: 278.296px;
        }
        #HEADLINE8>.ladi-headline {
            font-size: 17px;
            text-align: center;
            padding-right: 60px;
        }
        #GROUP367 {
            width: 563.5px;
            height: 30px;
            top: 785.3px;
            left: 183.745px;
        }
        #BUTTON336,
        #BUTTON339 {
            width: 143px;
            height: 30px;
        }
        #BUTTON_TEXT336,
        #BUTTON_TEXT339 {
            width: 141px;
        }
        #BUTTON_TEXT336,
        #BUTTON_TEXT339,
        #BUTTON_TEXT340 {
            top: 6.75px;
        }
        #BUTTON_TEXT336>.ladi-headline,
        #BUTTON_TEXT339>.ladi-headline,
        #BUTTON_TEXT340>.ladi-headline {
            font-size: 17px;
            line-height: 1.6;
        }
        #BUTTON339 {
            left: 420.5px;
        }
        #BUTTON340 {
            width: 160px;
            height: 30px;
            left: 202.25px;
        }
        #BUTTON_TEXT340 {
            width: 158px;
        }
        #SECTION3 {
            height: 778.23px;
        }
        #IMAGE149 {
            top: 274.642px;
            left: 902.5px;
        }
        #GROUP254 {
            width: 309.055px;
            height: 541.361px;
            top: 191px;
            left: -215px;
        }
        #IMAGE150,
        #IMAGE150>.ladi-image>.ladi-image-background {
            width: 280.501px;
            height: 541.361px;
        }
        #IMAGE150 {
            left: 28.5538px;
        }
        #IMAGE148,
        #IMAGE148>.ladi-image>.ladi-image-background {
            width: 178.266px;
            height: 209.432px;
        }
        #IMAGE148 {
            top: 312.32px;
        }
        #IMAGE148>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x550/5c7362c6c417ab07e5196b05/c1-20201125074835.png");
        }
        #GROUP256,
        #BOX25,
        #GROUP434,
        #GROUP432,
        #BOX388 {
            width: 526px;
            height: 671px;
        }
        #GROUP256 {
            top: 46px;
            left: -26px;
        }
        #GROUP256.ladi-animation>.ladi-group,
        #GROUP432.ladi-animation>.ladi-group {
            animation-name: fadeInLeft;
            animation-delay: 0.2s;
            animation-duration: 1.5s;
        }
        #HEADLINE23,
        #HEADLINE398 {
            top: 89.333px;
            left: 61.716px;
        }
        #HEADLINE23>.ladi-headline,
        #HEADLINE398>.ladi-headline {
            font-size: 27px;
            text-align: left;
        }
        #IMAGE30,
        #IMAGE391 {
            height: 46px;
            top: 25.111px;
            left: 191.082px;
        }
        #IMAGE355,
        #IMAGE355>.ladi-image>.ladi-image-background {
            width: 590.999px;
            height: 394px;
        }
        #IMAGE355 {
            top: 29.545px;
            left: 440.196px;
        }
        #IMAGE355>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s900x700/5c728619c417ab07e5194baa/999777b0-c1a7-4ad3-bf05-e1a6ce68e903-20240115124609-j2rcg.jpg");
        }
        #PARAGRAPH364,
        #HEADLINE249,
        #HEADLINE363 {
            width: 403px;
        }
        #PARAGRAPH364 {
            top: 191px;
            left: 10px;
        }
        #PARAGRAPH364>.ladi-paragraph,
        #PARAGRAPH350>.ladi-paragraph,
        #PARAGRAPH355>.ladi-paragraph {
            font-size: 16px;
            line-height: 1.6;
        }
        #IMAGE354 {
            width: 209.685px;
            height: 263.326px;
            top: 388.429px;
            left: 467.426px;
        }
        #IMAGE354>.ladi-image>.ladi-image-background {
            width: 209.145px;
            height: 322.915px;
            top: -27.9284px;
            background-image: url("https://w.ladicdn.com/s550x650/5c728619c417ab07e5194baa/2e408ebd-ce21-4bac-8b6b-40edcc3b9b6f-20240115124603-vv471.jpg");
        }
        #IMAGE356 {
            width: 189.565px;
            height: 239.326px;
            top: 377.429px;
            left: 817.239px;
        }
        #IMAGE356>.ladi-image>.ladi-image-background {
            width: 189.248px;
            height: 283.874px;
            top: -37.4391px;
            background-image: url("https://w.ladicdn.com/s500x600/5c728619c417ab07e5194baa/eb497993-322b-42ac-9c94-cad61c45a4d7-20240115124611-lxx8i.jpg");
        }
        #IMAGE361 {
            width: 187.088px;
            height: 239.326px;
            top: 477.674px;
            left: 648.151px;
        }
        #IMAGE361>.ladi-image>.ladi-image-background {
            width: 186.927px;
            height: 281.889px;
            top: -35.5469px;
            background-image: url("https://w.ladicdn.com/s500x600/5c728619c417ab07e5194baa/e8080c54-4573-462e-b6ee-7b6c011c7939-20240112152033-qfjnc.jpg");
        }
        #GROUP434 {
            top: 98.5px;
            left: -411.945px;
        }
        #PARAGRAPH412 {
            width: 406px;
            top: 158.929px;
            left: 27.945px;
        }
        #SHAPE403 {
            top: 289.929px;
            left: 178.445px;
        }
        #SECTION336 {
            height: 590.3px;
        }
        #HEADLINE337 {
            top: 80px;
            left: 380px;
        }
        #VIDEO335 {
            width: 558.975px;
            height: 316.118px;
            top: 231px;
            left: 504.407px;
        }
        #VIDEO335>.ladi-video>.ladi-video-background {
            background-image: url("https://w.ladicdn.com/s558x316/5c728619c417ab07e5194baa/kinh-nghiem-chup-anh-cuoi-khi-mang-bau-05-20240602022741-lqhqx.jpg");
        }
        #SHAPE335 {
            top: 138.059px;
            left: 259.488px;
        }
        #PARAGRAPH335 {
            width: 504px;
            top: 133.15px;
            left: 228px;
        }
        #PARAGRAPH335>.ladi-paragraph,
        #PARAGRAPH401>.ladi-paragraph,
        #HEADLINE408>.ladi-headline,
        #HEADLINE403>.ladi-headline {
            font-size: 20px;
        }
        #SHAPE355 {
            top: 35px;
            left: 450px;
        }
        #VIDEO339 {
            width: 561.987px;
            height: 316.118px;
            top: 231px;
            left: -103.939px;
        }
        #VIDEO339>.ladi-video>.ladi-video-background {
            background-image: url("https://w.ladicdn.com/s561x316/5c728619c417ab07e5194baa/video-1-20240607071447-bqhg8.png");
        }
        #SHAPE339 {
            top: 138.059px;
            left: 260.993px;
        }
        #SECTION351 {
            height: 659.3px;
        }
        #SECTION351>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s1440x659/5c728619c417ab07e5194baa/999777b0-c1a7-4ad3-bf05-e1a6ce68e903-20240608165003-5m48b.jpg");
        }
        #PARAGRAPH407 {
            width: 690px;
            top: 157.5px;
            left: 135.5px;
        }
        #PARAGRAPH407>.ladi-paragraph {
            font-size: 55px;
        }
        #PARAGRAPH408 {
            width: 589px;
            top: 245.5px;
            left: 186px;
        }
        #PARAGRAPH408>.ladi-paragraph {
            font-size: 19px;
        }
        #SHAPE397 {
            width: 150px;
            height: 150px;
            top: 368px;
            left: 405px;
        }
        #SECTION78 {
            height: 234.234px;
        }
        #SECTION78>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s1440x234/5c7362c6c417ab07e5196b05/w-20201126022617.jpg");
        }
        #IMAGE32 {
            width: 960px;
            height: 198.604px;
            top: 17.819px;
            left: 0px;
        }
        #IMAGE32>.ladi-image>.ladi-image-background {
            width: 967px;
            height: 644px;
            top: -245px;
            background-image: url("https://w.ladicdn.com/s1300x950/5c7362c6c417ab07e5196b05/iiiiiiiiiii-20210123091156.jpg");
        }
        #BOX36 {
            width: 936px;
            height: 175.143px;
            top: 30.015px;
            left: 12px;
        }
        #GROUP298 {
            top: 80.0745px;
            left: 523.953px;
        }
        #BOX299,
        #GROUP142,
        #BOX143 {
            width: 280px;
            height: 74.402px;
        }
        #GROUP142 {
            top: 80.231px;
            left: 523.953px;
        }
        #BOX143>.ladi-box {
            background-image: url("https://w.ladicdn.com/s600x400/5c7362c6c417ab07e5196b05/q2LEMuoI20210123080955.jpeg");
        }
        #GROUP286,
        #GROUP290 {
            top: 80.3855px;
            left: 156.048px;
        }
        #BOX287,
        #GROUP290,
        #BOX291,
        #GROUP344,
        #GROUP345,
        #BOX340,
        #GROUP346,
        #BOX341,
        #GROUP338,
        #GROUP340,
        #BOX337,
        #GROUP339,
        #BOX336 {
            height: 74.402px;
        }
        #SECTION79 {
            height: 699px;
        }
        #IMAGE95 {
            width: 458.998px;
            height: 635px;
            top: 23px;
            left: 0px;
        }
        #IMAGE95>.ladi-image>.ladi-image-background {
            width: 458.343px;
            height: 694.848px;
            top: -58px;
            left: 0.401307px;
            background-image: url("https://w.ladicdn.com/s800x1000/5c728619c417ab07e5194baa/86559832-f249-4537-999b-1df6bfe461ff-20240115132231-4o-dn.jpg");
        }
        #GROUP274,
        #BOX97,
        #GROUP435,
        #BOX389 {
            width: 501px;
            height: 635px;
        }
        #GROUP274 {
            top: 23px;
            left: 458.048px;
        }
        #GROUP274.ladi-animation>.ladi-group {
            animation-name: fadeInRight;
            animation-duration: 1.5s;
        }
        #BOX100,
        #BOX390 {
            width: 477px;
            height: 611px;
            top: 11.6667px;
            left: 12px;
        }
        #SHAPE102,
        #SHAPE404,
        #SHAPE246,
        #SHAPE405 {
            width: 134.104px;
            height: 111.75px;
        }
        #SHAPE102,
        #SHAPE404 {
            top: 26.6667px;
            left: 43px;
        }
        #PARAGRAPH96,
        #PARAGRAPH413 {
            width: 427px;
            top: 88.1667px;
            left: 37px;
        }
        #PARAGRAPH96>.ladi-paragraph,
        #PARAGRAPH413>.ladi-paragraph {
            font-size: 15px;
            line-height: 1.8;
        }
        #IMAGE101,
        #IMAGE392 {
            top: 26.6667px;
            left: 194.366px;
        }
        #GROUP435 {
            top: 23px;
            left: -515px;
        }
        #GROUP435.ladi-animation>.ladi-group {
            animation-name: fadeInRight;
            animation-delay: 0.2s;
            animation-duration: 1.5s;
        }
        #SECTION103 {
            height: 736.6px;
        }
        #IMAGE105 {
            width: 491.668px;
            height: 664.2px;
            top: 24.401px;
            left: 468.33px;
        }
        #IMAGE105>.ladi-image>.ladi-image-background {
            width: 495.668px;
            height: 743.244px;
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/e6f4c0e8-7b23-4a4a-aa44-17c55e801498-20240115140303-mkcmz.jpg");
        }
        #GROUP277,
        #BOX233,
        #GROUP436,
        #BOX391 {
            width: 468.332px;
            height: 664px;
        }
        #GROUP277 {
            top: 24.501px;
            left: -0.002px;
        }
        #GROUP277.ladi-animation>.ladi-group {
            animation-duration: 1.5s;
        }
        #BOX242,
        #BOX392 {
            width: 443px;
            height: 634.219px;
            top: 15.1099px;
            left: 12.832px;
        }
        #PARAGRAPH234,
        #PARAGRAPH414 {
            width: 371px;
            top: 109px;
            left: 46.332px;
        }
        #PARAGRAPH234>.ladi-paragraph,
        #PARAGRAPH414>.ladi-paragraph {
            font-size: 15px;
            line-height: 1.6;
        }
        #IMAGE245,
        #IMAGE393 {
            top: 38.324px;
            left: 188.698px;
        }
        #SHAPE246,
        #SHAPE405 {
            top: 38.324px;
            left: 46.332px;
        }
        #GROUP436 {
            top: 24.401px;
            left: -485px;
        }
        #GROUP436.ladi-animation>.ladi-group {
            animation-delay: 0.2s;
            animation-duration: 1.5s;
        }
        #SECTION5 {
            height: 1239.8px;
        }
        #IMAGE151 {
            width: 230.007px;
            height: 111.101px;
            top: 109.812px;
            left: 21.7275px;
        }
        #IMAGE151>.ladi-image>.ladi-image-background {
            width: 230.007px;
            height: 262.502px;
            top: -4px;
            left: 0.000412px;
            background-image: url("https://w.ladicdn.com/s550x600/5c7362c6c417ab07e5196b05/c4-20201125075055.png");
        }
        #IMAGE153,
        #IMAGE153>.ladi-image>.ladi-image-background {
            width: 171.398px;
            height: 213.295px;
        }
        #IMAGE153 {
            top: 746.106px;
            left: 904.893px;
        }
        #IMAGE153>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x550/5c7362c6c417ab07e5196b05/c6-20201125075055.png");
        }
        #IMAGE53 {
            width: 457px;
            height: 253.021px;
            top: 205.913px;
            left: 503px;
        }
        #IMAGE53>.ladi-image>.ladi-image-background {
            width: 457px;
            height: 304.667px;
            top: -36.6457px;
            left: -1px;
            background-image: url("https://w.ladicdn.com/s800x650/5c728619c417ab07e5194baa/fa9faa6f-9244-4925-845d-d53f9e98198a-20240115124615-x7ch-.jpg");
        }
        #IMAGE42 {
            width: 211px;
            height: 279.667px;
            top: 179.267px;
            left: 282.5px;
        }
        #IMAGE42>.ladi-image>.ladi-image-background {
            width: 210.515px;
            height: 315.773px;
            top: -8.1063px;
            left: 1px;
            background-image: url("https://w.ladicdn.com/s550x650/5c728619c417ab07e5194baa/c372c35c-2fc4-4bfe-9478-d7103dac5ff0-20240115124611-d0b8n.jpg");
        }
        #IMAGE43 {
            width: 126.462px;
            height: 183.401px;
            top: 392.899px;
            left: 147px;
        }
        #IMAGE43>.ladi-image>.ladi-image-background {
            width: 125.462px;
            height: 188.193px;
            top: -3px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s450x500/5c728619c417ab07e5194baa/2d77265c-c799-41fd-9a4f-f319a67844ba-20240115124603-khtr6.jpg");
        }
        #IMAGE44 {
            width: 273.462px;
            height: 388.545px;
            top: 584.516px;
            left: 0px;
        }
        #IMAGE44>.ladi-image>.ladi-image-background {
            width: 272.363px;
            height: 408.545px;
            top: -10px;
            left: 1px;
            background-image: url("https://w.ladicdn.com/s600x750/5c728619c417ab07e5194baa/3f3a0e3b-01f1-481a-8b40-3f3d5bbe92a0-20240115124603-bucfn.jpg");
        }
        #IMAGE45 {
            width: 389.5px;
            height: 587.071px;
            top: 468.564px;
            left: 282.5px;
        }
        #IMAGE45>.ladi-image>.ladi-image-background {
            width: 391.381px;
            height: 587.071px;
            background-image: url("https://w.ladicdn.com/s700x900/5c728619c417ab07e5194baa/610915a2-612e-4b4b-8c11-f5f01e4bdb21-20240115124609-u7jnd.jpg");
        }
        #IMAGE46 {
            width: 278px;
            height: 374.237px;
            top: 468.564px;
            left: 682px;
        }
        #IMAGE46>.ladi-image>.ladi-image-background {
            width: 278.368px;
            height: 439.822px;
            top: -28px;
            left: -0.987978px;
        }
        #IMAGE47 {
            width: 278px;
            height: 184.601px;
            top: 855.8px;
            left: 682px;
        }
        #IMAGE47>.ladi-image>.ladi-image-background {
            width: 278px;
            height: 186.327px;
            background-image: url("https://w.ladicdn.com/s600x500/5c728619c417ab07e5194baa/be611b44-5382-418c-acb3-360921f45b0c-20240115124610-swvzp.jpg");
        }
        #IMAGE47>.ladi-image>.ladi-image-background,
        #SHAPE363 {
            top: 0px;
        }
        #BOX48 {
            width: 95.6923px;
            height: 86.22px;
            top: 432.3px;
            left: 608.232px;
        }
        #BOX50 {
            width: 273.462px;
            height: 47.461px;
            top: 983.6px;
            left: 0px;
        }
        #GROUP147 {
            width: 344px;
            height: 122px;
            top: 9.6px;
            left: 309px;
        }
        #HEADLINE51 {
            width: 344px;
            top: 79px;
        }
        #IMAGE52,
        #IMAGE52>.ladi-image>.ladi-image-background {
            width: 120.488px;
            height: 65px;
        }
        #IMAGE52 {
            left: 111.756px;
        }
        #IMAGE52>.ladi-image>.ladi-image-background,
        #IMAGE364>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s450x400/5c7362c6c417ab07e5196b05/r5gt-20201125032553.png");
        }
        #IMAGE152,
        #IMAGE152>.ladi-image>.ladi-image-background {
            width: 200px;
            height: 227.586px;
        }
        #IMAGE152 {
            top: 518.52px;
            left: 914px;
        }
        #IMAGE152>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s550x550/5c7362c6c417ab07e5196b05/c5-20201125075055.png");
        }
        #IMAGE40,
        #IMAGE40>.ladi-image>.ladi-image-background {
            width: 273.462px;
            height: 182.401px;
        }
        #IMAGE40 {
            top: 202.899px;
            left: 0px;
        }
        #IMAGE40>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s600x500/5c728619c417ab07e5194baa/5163aef3-a0d1-48dc-800d-b122e95dc4e9-20240115124604-9rdfn.jpg");
        }
        #IMAGE345 {
            width: 77.8613px;
            height: 70.693px;
            top: 439.926px;
            left: 617.147px;
        }
        #IMAGE345>.ladi-image>.ladi-image-background {
            width: 96.7239px;
            height: 96.7238px;
            top: -13.1498px;
            left: -9.12427px;
        }
        #GROUP359 {
            width: 129px;
            height: 63.6725px;
            top: 1100.13px;
            left: 412.75px;
        }
        #HEADLINE358 {
            width: 129px;
        }
        #HEADLINE358>.ladi-headline,
        #BUTTON_TEXT344>.ladi-headline,
        #BUTTON_TEXT345>.ladi-headline,
        #BUTTON_TEXT365>.ladi-headline,
        #BUTTON_TEXT366>.ladi-headline,
        #BUTTON_TEXT367>.ladi-headline,
        #BUTTON_TEXT368>.ladi-headline,
        #HEADLINE395>.ladi-headline,
        #HEADLINE396>.ladi-headline,
        #BUTTON_TEXT354>.ladi-headline,
        #BUTTON_TEXT355>.ladi-headline,
        #FORM343>.ladi-form,
        #HEADLINE406>.ladi-headline,
        #FORM342>.ladi-form {
            font-size: 14px;
        }
        #SHAPE353 {
            width: 27.7492px;
            height: 45.6725px;
            top: 18px;
            left: 50.625px;
        }
        #IMAGE362 {
            width: 136.462px;
            height: 183.401px;
            top: 392.899px;
            left: 0px;
        }
        #IMAGE362>.ladi-image>.ladi-image-background {
            width: 136.462px;
            height: 204.693px;
            top: -6px;
            left: 1px;
        }
        #SECTION338 {
            height: 196.3px;
        }
        #GROUP344 {
            top: 60.953px;
            left: 556.375px;
        }
        #HEADLINE346 {
            left: 49.3887px;
        }
        #GROUP338 {
            top: 60.953px;
            left: 101.625px;
        }
        #SHAPE337 {
            left: 219.962px;
        }
        #HEADLINE342 {
            left: 29.3887px;
        }
        #SECTION340 {
            height: 820px;
            padding-top: 40px;
        }
        #GROUP335 {
            width: 694px;
            height: 76px;
            top: 693.3px;
            left: 304px;
        }
        #GROUP335.ladi-animation>.ladi-group {
            animation-duration: 1s;
        }
        #PARAGRAPH341,
        #PARAGRAPH342,
        #PARAGRAPH343,
        #PARAGRAPH344,
        #PARAGRAPH350,
        #PARAGRAPH395,
        #PARAGRAPH355,
        #PARAGRAPH396,
        #PARAGRAPH370,
        #PARAGRAPH366,
        #PARAGRAPH405 {
            width: 400px;
        }
        #PARAGRAPH341 {
            top: 50px;
            left: 22px;
        }
        #PARAGRAPH342 {
            top: 50px;
            left: 118px;
        }
        #PARAGRAPH343 {
            top: 50px;
            left: 200px;
        }
        #PARAGRAPH344 {
            top: 50px;
            left: 294px;
        }
        #GROUP428,
        #IMAGE387,
        #IMAGE387>.ladi-image>.ladi-image-background {
            width: 961.368px;
            height: 586.2px;
        }
        #IMAGE387>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s1300x900/5c728619c417ab07e5194baa/lt-20240613073500-1ltyp.png");
        }
        #SHAPE401,
        #SHAPE402 {
            width: 54px;
            height: 54px;
        }
        #SHAPE401 {
            top: 425px;
            left: 860px;
        }
        #PARAGRAPH410 {
            width: 605px;
            top: 596px;
            left: 177.5px;
        }
        #PARAGRAPH410>.ladi-paragraph,
        #PARAGRAPH411>.ladi-paragraph {
            font-size: 25px;
        }
        #SECTION337 {
            height: 834.3px;
        }
        #COUNTDOWN335 {
            top: 709px;
            left: 332.998px;
        }
        #PARAGRAPH336 {
            width: 70px;
            top: 756px;
            left: 355.999px;
        }
        #PARAGRAPH337 {
            width: 74px;
            top: 756px;
            left: 451.999px;
        }
        #PARAGRAPH338 {
            width: 66px;
            top: 756px;
            left: 535.999px;
        }
        #PARAGRAPH339 {
            width: 54px;
            top: 756px;
            left: 624.999px;
        }
        #GROUP429,
        #IMAGE388,
        #IMAGE388>.ladi-image>.ladi-image-background {
            width: 954.48px;
            height: 582px;
        }
        #GROUP429 {
            top: 0px;
            left: 2px;
        }
        #IMAGE388>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s1300x900/5c728619c417ab07e5194baa/lh-20240613073500--h5ed.png");
        }
        #SHAPE402 {
            top: 332px;
            left: 856px;
        }
        #PARAGRAPH411 {
            top: 598px;
            left: 305.999px;
        }
        #SECTION339 {
            height: 973.3px;
        }
        #HEADLINE339 {
            width: 254px;
            top: 97px;
            left: 352.999px;
        }
        #HEADLINE339>.ladi-headline {
            font-size: 38.13px;
            line-height: 1.6;
        }
        #PARAGRAPH345 {
            width: 732px;
            top: 181.65px;
            left: 113.999px;
        }
        #PARAGRAPH345>.ladi-paragraph,
        #PARAGRAPH359>.ladi-paragraph,
        #HEADLINE382>.ladi-headline,
        #HEADLINE383>.ladi-headline,
        #HEADLINE384>.ladi-headline,
        #HEADLINE385>.ladi-headline {
            font-size: 18px;
        }
        #IMAGE364,
        #IMAGE364>.ladi-image>.ladi-image-background {
            width: 106.317px;
            height: 57.3552px;
        }
        #IMAGE364 {
            top: 32.4342px;
            left: 426.841px;
        }
        #IMAGE378,
        #IMAGE378>.ladi-image>.ladi-image-background {
            width: 915.025px;
            height: 538.251px;
        }
        #IMAGE378 {
            top: 415px;
            left: 22.4865px;
        }
        #IMAGE378>.ladi-image>.ladi-image-background {
            background-image: url({{ asset('images/wedding/loi_ngo.png') }});
        }
        #SECTION341 {
            height: 1001.3px;
        }
        #IMAGE379 {
            width: 960px;
            height: 1001.3px;
        }
        #IMAGE379>.ladi-image>.ladi-image-background {
            width: 1220px;
            height: 1055.3px;
            background-image: url({{ asset('images/wedding/avatar/background.JPG') }});
        }
        #HEADLINE340,
        #HEADLINE386 {
            width: 379px;
        }
        #HEADLINE340 {
            top: 161.508px;
            left: 290.5px;
        }
        #SHAPE356 {
            width: 91.508px;
            height: 91.508px;
            top: 70px;
            left: 434.247px;
        }
        #GROUP419 {
            width: 400px;
            height: 697.492px;
            top: 258.508px;
            left: 66.101px;
        }
        #IMAGE340,
        #IMAGE341 {
            width: 397.191px;
            height: 487.075px;
        }
        #IMAGE340>.ladi-image>.ladi-image-background {
            width: 396.234px;
            height: 594.583px;
            top: -25px;
            left: 1px;
            background-image: url("{{ asset('images/wedding/avatar/goom.JPG') }}");
        }
        #GROUP348 {
            width: 356px;
            height: 57.0001px;
            top: 488.732px;
            left: 19.5005px;
        }
        #GROUP347 {
            width: 356px;
            height: 24px;
            top: 33.0001px;
        }
        #LINE335,
        #HEADLINE404,
        #HEADLINE400 {
            width: 346px;
        }
        #LINE335 {
            top: 7px;
            left: 10px;
        }
        #SHAPE343 {
            width: 16px;
            height: 16.912px;
        }
        #HEADLINE348 {
            width: 161px;
            left: 97.096px;
        }
        #HEADLINE348>.ladi-headline,
        #HEADLINE349>.ladi-headline,
        #HEADLINE404>.ladi-headline,
        #HEADLINE399>.ladi-headline {
            font-size: 33px;
        }
        #PARAGRAPH350 {
            top: 646.492px;
            left: 0px;
        }
        #PARAGRAPH395,
        #PARAGRAPH396 {
            top: 592.492px;
        }
        #PARAGRAPH395>.ladi-paragraph,
        #PARAGRAPH396>.ladi-paragraph,
        #PARAGRAPH370>.ladi-paragraph,
        #PARAGRAPH404>.ladi-paragraph,
        #FORM340>.ladi-form,
        #PARAGRAPH405>.ladi-paragraph,
        #BUTTON_TEXT270>.ladi-headline,
        #BUTTON_TEXT262>.ladi-headline,
        #BUTTON_TEXT264>.ladi-headline,
        #BUTTON_TEXT266>.ladi-headline,
        #BUTTON_TEXT268>.ladi-headline {
            font-size: 16px;
        }
        #GROUP405 {
            width: 137px;
            height: 39px;
            top: 545.732px;
            left: 131.5px;
        }
        #GROUP406,
        #BOX373,
        #GROUP407,
        #BOX374,
        #GROUP408,
        #BOX375,
        #GROUP412,
        #BOX376,
        #GROUP413,
        #BOX377,
        #GROUP414,
        #BOX378 {
            width: 39px;
            height: 39px;
        }
        #GROUP406.ladi-animation>.ladi-group,
        #GROUP414.ladi-animation>.ladi-group {
            animation-duration: 3s;
        }
        #SHAPE380,
        #SHAPE381,
        #SHAPE383 {
            width: 26px;
            height: 26px;
        }
        #SHAPE380,
        #SHAPE383,
        #SHAPE384 {
            top: 7px;
            left: 7px;
        }
        #GROUP407 {
            left: 48px;
        }
        #GROUP407.ladi-animation>.ladi-group,
        #GROUP413.ladi-animation>.ladi-group {
            animation-duration: 2s;
        }
        #SHAPE381 {
            top: 7px;
        }
        #GROUP408 {
            left: 98px;
        }
        #SHAPE382,
        #SHAPE385 {
            width: 30px;
            height: 30px;
        }
        #SHAPE382 {
            top: 4px;
            left: 4px;
        }
        #GROUP420 {
            width: 400px;
            height: 698.14px;
            top: 258.184px;
            left: 493.901px;
        }
        #IMAGE341 {
            left: 1.0085px;
        }
        #IMAGE341>.ladi-image>.ladi-image-background {
            width: 395.895px;
            height: 594.075px;
            top: -31px;
            left: 1px;
            background-image: url({{ asset('images/wedding/avatar/bride.JPG') }});
        }
        #GROUP349 {
            width: 367.983px;
            height: 56px;
            top: 488.732px;
            left: 16.0085px;
        }
        #GROUP350 {
            width: 367.983px;
            height: 24px;
            top: 32px;
        }
        #LINE336 {
            width: 360px;
            top: 7px;
            left: 8.08291px;
        }
        #SHAPE344 {
            width: 14.3812px;
        }
        #HEADLINE349 {
            width: 200px;
            left: 83.9915px;
        }
        #PARAGRAPH355 {
            top: 647.14px;
            left: 0px;
        }
        #GROUP411 {
            width: 138px;
            height: 39px;
            top: 542.732px;
            left: 130.604px;
        }
        #GROUP413 {
            left: 50px;
        }
        #SHAPE384 {
            width: 25px;
            height: 25px;
        }
        #GROUP414 {
            left: 99px;
        }
        #SHAPE385 {
            top: 4px;
        }
        #SECTION315 {
            height: 835.8px;
        }
        #GROUP355,
        #GROUP316,
        #GROUP415,
        #GROUP416,
        #GROUP417,
        #GROUP418 {
            width: 465px;
            height: 255.595px;
        }
        #GROUP355 {
            top: 208.505px;
            left: -22px;
        }
        #BOX317,
        #BOX380,
        #BOX381 {
            width: 465px;
            height: 225px;
            top: 30.595px;
        }
        #HEADLINE318,
        #HEADLINE387,
        #HEADLINE388 {
            width: 199px;
            top: 45.595px;
            left: 49px;
        }
        #HEADLINE318>.ladi-headline,
        #HEADLINE387>.ladi-headline,
        #HEADLINE388>.ladi-headline {
            font-size: 23px;
        }
        #PARAGRAPH319,
        #PARAGRAPH397,
        #PARAGRAPH399 {
            width: 300px;
        }
        #PARAGRAPH319,
        #PARAGRAPH397 {
            top: 89.395px;
            left: 49px;
        }
        #PARAGRAPH319>.ladi-paragraph,
        #PARAGRAPH320>.ladi-paragraph,
        #PARAGRAPH397>.ladi-paragraph,
        #PARAGRAPH398>.ladi-paragraph,
        #PARAGRAPH399>.ladi-paragraph,
        #PARAGRAPH400>.ladi-paragraph,
        #HEADLINE405>.ladi-headline,
        #PARAGRAPH422>.ladi-paragraph,
        #HEADLINE400>.ladi-headline,
        #PARAGRAPH417>.ladi-paragraph {
            font-size: 13px;
        }
        #PARAGRAPH320,
        #PARAGRAPH398,
        #PARAGRAPH400 {
            width: 296px;
        }
        #PARAGRAPH320 {
            top: 137.595px;
            left: 49px;
        }
        #SHAPE322,
        #SHAPE387,
        #SHAPE389 {
            width: 27px;
            height: 27px;
            top: 88.595px;
            left: 15px;
        }
        #SHAPE323,
        #SHAPE388,
        #SHAPE390 {
            width: 22px;
            height: 22px;
        }
        #SHAPE323 {
            top: 137.595px;
            left: 17px;
        }
        #IMAGE324,
        #IMAGE381,
        #IMAGE382 {
            width: 170.576px;
            height: 113.595px;
            left: 264px;
        }
        #IMAGE324>.ladi-image>.ladi-image-background,
        #IMAGE381>.ladi-image>.ladi-image-background,
        #IMAGE382>.ladi-image>.ladi-image-background {
            width: 178.084px;
            height: 118.595px;
            left: -5px;
        }
        #IMAGE324>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x450/5c7362c6c417ab07e5196b05/hixhxxm_20210125010216.jpg");
        }
        #BUTTON344,
        #BUTTON345,
        #BUTTON365,
        #BUTTON366,
        #BUTTON367,
        #BUTTON368,
        #BUTTON354,
        #BUTTON355 {
            width: 160px;
            height: 40px;
        }
        #BUTTON344,
        #BUTTON365,
        #BUTTON367 {
            top: 191.595px;
            left: 43px;
        }
        #BUTTON345,
        #BUTTON366,
        #BUTTON368 {
            top: 191.595px;
            left: 264px;
        }
        #HEADLINE386 {
            top: 82px;
            left: 290.5px;
        }
        #HEADLINE386>.ladi-headline,
        #HEADLINE390>.ladi-headline,
        #HEADLINE353>.ladi-headline,
        #HEADLINE393>.ladi-headline {
            font-size: 50px;
        }
        #SHAPE386 {
            top: 26px;
            left: 452px;
        }
        #GROUP415 {
            top: 208.505px;
            left: 515.901px;
        }
        #PARAGRAPH398,
        #PARAGRAPH400 {
            top: 136.595px;
            left: 49px;
        }
        #SHAPE388 {
            top: 135.595px;
            left: 17px;
        }
        #IMAGE381>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x450/5c728619c417ab07e5194baa/291610733_5402986359724076_4717512138686002181_n-20240528043229-lz_ec.jpg");
        }
        #GROUP417 {
            top: 514px;
            left: 247.5px;
        }
        #PARAGRAPH399 {
            top: 88.395px;
            left: 49px;
        }
        #SHAPE390 {
            top: 136.595px;
            left: 17px;
        }
        #IMAGE382>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x450/5c728619c417ab07e5194baa/trang-phuc-cuoi-bai-bien-top-20240528043230-je3td.jpg");
        }
        #SECTION348 {
            height: 784.944px;
        }
        #SECTION348>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s1440x784/5c728619c417ab07e5194baa/b84e4d98-cf14-47f3-b59b-8f00e52843cd-20240512200313-up8ae.jpg");
        }
        #IMAGE383 {
            width: 960px;
            height: 784.944px;
        }
        #IMAGE383>.ladi-image>.ladi-image-background {
            width: 962.014px;
            height: 1443.02px;
            top: -378.078px;
            left: -1.63209px;
            background-image: url("https://w.ladicdn.com/s1300x1750/5c728619c417ab07e5194baa/b84e4d98-cf14-47f3-b59b-8f00e52843cd-20240512200313-up8ae.jpg");
        }
        #GROUP421,
        #BOX382 {
            width: 194.163px;
            height: 138px;
        }
        #GROUP421 {
            top: 444.468px;
            left: 397.418px;
        }
        #SHAPE391 {
            width: 120.731px;
            height: 101.414px;
            top: 18.2931px;
            left: 36.7161px;
        }
        #HEADLINE390 {
            width: 405px;
            top: 198px;
            left: 292px;
        }
        #PARAGRAPH401 {
            width: 450px;
            top: 289px;
            left: 269.5px;
        }
        #SECTION344 {
            height: 639.5px;
        }
        #HEADLINE353 {
            width: 327px;
            top: 75px;
            left: 331px;
        }
        #PARAGRAPH359 {
            width: 571px;
            top: 167px;
            left: 209px;
        }
        #SHAPE357 {
            width: 100px;
            height: 100px;
            top: 0px;
            left: 444.5px;
        }
        #BOX345 {
            width: 593px;
            height: 299px;
            top: 248.5px;
            left: 198px;
        }
        #GROUP375 {
            width: 429px;
            height: 26px;
            top: 506px;
            left: 349px;
        }
        #PARAGRAPH370 {
            left: 29px;
        }
        #FORM339 {
            width: 442px;
            height: 230px;
            top: 267px;
            left: 273.5px;
        }
        #FORM339>.ladi-form {
            font-size: 12px;
        }
        #FORM339 .ladi-form .ladi-form-checkout-payment-item {
            --check-size: calc(12px * 1.5);
            --width-quantity: calc(12px * 2.5 + 30px);
        }
        #BUTTON370 {
            width: 270px;
            height: 40px;
            top: 190px;
            left: 84px;
        }
        #BUTTON_TEXT370 {
            width: 270px;
        }
        #BUTTON_TEXT370>.ladi-headline {
            line-height: 1.6;
        }
        #FORM_ITEM350 {
            width: 212px;
        }
        #FORM_ITEM351 {
            width: 442px;
            height: 67px;
            top: 54px;
        }
        #FORM_ITEM352 {
            width: 212px;
            height: 36px;
            left: 230px;
        }
        #FORM_ITEM353 {
            width: 442px;
            top: 131px;
        }
        #SECTION350 {
            height: 829.3px;
        }
        #SECTION350>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s1440x829/5c728619c417ab07e5194baa/istockphoto-1370544962-612x612-20240511035415-h6g2l.jpg");
        }
        #BOX383 {
            width: 960px;
            height: 796px;
            top: 17.4px;
            left: 0px;
        }
        #BOX384 {
            width: 904.877px;
            height: 744px;
            top: 46.4px;
            left: 26.179px;
        }
        #GROUP425 {
            width: 494px;
            height: 81.713px;
            top: 257.4px;
            left: 233px;
        }
        #HEADLINE393 {
            width: 494px;
        }
        #SHAPE395 {
            top: 71.713px;
            left: 147px;
        }
        #PARAGRAPH404 {
            width: 673px;
            top: 354.9px;
            left: 142.117px;
        }
        #FORM340 {
            width: 711.354px;
            height: 265.286px;
            top: 423.423px;
            left: 124.323px;
        }
        #FORM340 .ladi-form .ladi-form-checkout-payment-item {
            --check-size: calc(16px * 1.5);
            --width-quantity: calc(16px * 2.5 + 30px);
        }
        #BUTTON371 {
            width: 710.998px;
            height: 46.5888px;
            top: 218.697px;
        }
        #BUTTON_TEXT371 {
            width: 711px;
            top: 10.4825px;
        }
        #FORM_ITEM354,
        #FORM_ITEM355,
        #FORM_ITEM358 {
            width: 228.814px;
            height: 46.5888px;
        }
        #FORM_ITEM355 {
            left: 240.256px;
        }
        #FORM_ITEM356 {
            width: 710.998px;
            height: 76.8715px;
            top: 117.202px;
        }
        #FORM_ITEM357 {
            width: 469px;
            height: 51px;
            top: 58.2361px;
        }
        #FORM_ITEM358 {
            top: 0px;
            left: 482.54px;
        }
        #FORM_ITEM359 {
            width: 228.1px;
            height: 46.0001px;
            top: 58.2361px;
            left: 482.898px;
        }
        #HEADLINE395 {
            width: 178px;
            top: 703.709px;
            left: 124.323px;
        }
        #HEADLINE396 {
            width: 165px;
            top: 703.709px;
            left: 670.677px;
        }
        #IMAGE385 {
            width: 197.842px;
            height: 197.842px;
            top: 59.558px;
            left: 379.696px;
        }
        #IMAGE385>.ladi-image>.ladi-image-background {
            width: 197.842px;
            height: 298.346px;
            top: -21.557px;
            left: 1.34731px;
            background-image: url({{ asset('images/wedding/confirm_invitation.JPG') }});
        }
        #SECTION342 {
            height: 728px;
        }
        #SECTION342>.ladi-overlay {
            background-color: rgb(0, 0, 0);
            opacity: 0.3;
        }
        #SECTION342>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s1440x728/5c728619c417ab07e5194baa/studio-anh-cuoi-chat-luong-tai-thanh-hoa-2-20240602022740-qudib.jpg");
            background-size: cover;
            background-origin: content-box;
            background-position: 50% 50%;
            background-repeat: repeat;
            background-attachment: scroll;
        }
        #IMAGE386 {
            width: 960px;
            height: 728px;
        }
        #IMAGE386>.ladi-image>.ladi-image-background {
            width: 1216.5px;
            height: 811px;
            top: -84px;
            left: -254px;
            background-image: url({{ asset('images/wedding/Thanks.JPG') }});
        }
        #HEADLINE367 {
            width: 823px;
            top: 241.5px;
            left: 68.5px;
        }
        #HEADLINE367>.ladi-headline {
            font-size: 145px;
        }
        #PARAGRAPH366 {
            top: 449px;
            left: 294.5px;
        }
        #PARAGRAPH366>.ladi-paragraph {
            font-size: 30px;
        }
        #GROUP426,
        #BOX385 {
            width: 2582px;
            height: 51px;
        }
        #GROUP426 {
            top: 630px;
            left: -686px;
        }
        #PARAGRAPH405 {
            top: 12.5px;
            left: 1009px;
        }
        #SHAPE396 {
            width: 80px;
            height: 80px;
            top: 497px;
            left: 454.5px;
        }
        #POPUP247,
        #POPUP342 {
            width: 651px;
            height: 386px;
        }
        #IMAGE252,
        #IMAGE367 {
            width: 652.073px;
            height: 387px;
        }
        #BOX253,
        #BOX350 {
            width: 623px;
            height: 361px;
            top: 12px;
        }
        #HEADLINE248,
        #HEADLINE362 {
            width: 566px;
            top: 155px;
            left: 43.5365px;
        }
        #HEADLINE248>.ladi-headline,
        #HEADLINE362>.ladi-headline {
            font-size: 21px;
        }
        #HEADLINE249,
        #HEADLINE363 {
            top: 80px;
            left: 124.536px;
        }
        #PARAGRAPH250,
        #PARAGRAPH365 {
            width: 565px;
            top: 203px;
            left: 44.0365px;
        }
        #PARAGRAPH250>.ladi-paragraph,
        #PARAGRAPH365>.ladi-paragraph,
        #BUTTON_TEXT364>.ladi-headline,
        #HEADLINE407>.ladi-headline,
        #HEADLINE402>.ladi-headline {
            font-size: 15px;
        }
        #IMAGE251,
        #IMAGE368 {
            top: 31px;
            left: 280.622px;
        }
        #POPUP260 {
            width: 290px;
            height: 265px;
        }
        #POPUP260>.ladi-popup>.ladi-popup-background {
            background-image: url("https://w.ladicdn.com/s290x265/5c7362c6c417ab07e5196b05/hhhh-20201125074735.jpg");
        }
        #BUTTON270 {
            top: 180.375px;
            left: 44.9315px;
        }
        #BUTTON262 {
            width: 123.378px;
            top: 20.375px;
            left: 44.9315px;
        }
        #BUTTON_TEXT262 {
            width: 123px;
        }
        #BUTTON264 {
            width: 130.021px;
            top: 60.375px;
            left: 44.9315px;
        }
        #BUTTON_TEXT264 {
            width: 130px;
        }
        #BUTTON266 {
            width: 210.97px;
            top: 100.375px;
            left: 44.9315px;
        }
        #BUTTON_TEXT266 {
            width: 211px;
        }
        #BUTTON268 {
            width: 122.183px;
            top: 140.375px;
            left: 44.9315px;
        }
        #BUTTON_TEXT268 {
            width: 122px;
        }
        #DROPBOX338 {
            width: 300px;
            height: 300px;
        }
        #BUTTON354 {
            top: 307.499px;
            left: 148.536px;
        }
        #BUTTON_TEXT354,
        #BUTTON_TEXT355 {
            width: 160px;
        }
        #BUTTON355 {
            top: 307.499px;
            left: 348.536px;
        }
        #PARAGRAPH371 {
            width: 331px;
            top: 113.494px;
            left: 40px;
        }
        #IMAGE389 {
            top: 68.151px;
        }
        #POPUP348 {
            width: 345px;
            height: 139px;
        }
        #HEADLINE381 {
            width: 269px;
            top: 21px;
            left: 38px;
        }
        #BUTTON364 {
            width: 177px;
            height: 35px;
            top: 74px;
            left: 84px;
        }
        #BUTTON_TEXT364 {
            width: 175px;
        }
        #THIEP,
        #MUNGCUOI,
        #LOICHUC,
        #XNTD {
            width: 185px;
            height: 40px;
        }
        #HEADLINE382 {
            width: 104px;
            top: 5.5px;
            left: 40.5px;
        }
        #HEADLINE383 {
            width: 115px;
            top: 5.5px;
            left: 35px;
        }
        #HEADLINE384 {
            width: 119px;
            top: 5.5px;
            left: 33px;
        }
        #HEADLINE385 {
            width: 170px;
            top: 5.5px;
            left: 7.5px;
        }
        #POPUP353,
        #GALLERY337 {
            width: 470.347px;
            height: 710px;
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/fee21b86-2840-4d6c-8cd0-142656f08619-20240608165012-wa9qh.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/5f4bf5f7-9eb8-473e-a95f-6ab0ab5d77ca-20240608164954-iewo7.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/be611b44-5382-418c-acb3-360921f45b0c-20240608165011-3fteg.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="3"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/eb497993-322b-42ac-9c94-cad61c45a4d7-20240608165012-ozpaa.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="4"],
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/e6f4c0e8-7b23-4a4a-aa44-17c55e801498-20240608165011-n-bo5.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="5"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/cf0e3bd8-300c-4eb8-91f4-4b2b0e3511f5-20240608165011-nj81p.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="6"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/c372c35c-2fc4-4bfe-9478-d7103dac5ff0-20240608165011-wupru.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="7"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/c13f7535-3404-4c31-a814-571647df4bbe-20240608165011-b8lzy.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="8"],
        #GALLERY338 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/86559832-f249-4537-999b-1df6bfe461ff-20240608165003-d1ny3.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="9"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/610915a2-612e-4b4b-8c11-f5f01e4bdb21-20240608165002-f8yvl.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="10"],
        #GALLERY338 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/0225962a-f125-42f3-8419-07ad78a11013-20240608165002-4fz0v.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="11"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/5163aef3-a0d1-48dc-800d-b122e95dc4e9-20240608165002-dn5_4.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="12"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/43cce9d3-3c6c-4355-bb3f-a4e722868dd2-20240608164954-efepf.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="13"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/9f2d8c80-2d1e-4e20-bb7b-6a5f93716515-20240608164954-_x2l3.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="14"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/3f3a0e3b-01f1-481a-8b40-3f3d5bbe92a0-20240608164954-egael.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="15"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/2e408ebd-ce21-4bac-8b6b-40edcc3b9b6f-20240608164953-5ojm_.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="16"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/fa9faa6f-9244-4925-845d-d53f9e98198a-20240608165012-ktoqv.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="17"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/2d77265c-c799-41fd-9a4f-f319a67844ba-20240608164953-8qzxw.jpg");
        }
        #CHURE {
            width: 483px;
            height: 710px;
        }
        #GALLERY338 {
            width: 483.306px;
            height: 710px;
        }
        #CODAU {
            width: 466px;
            height: 710px;
        }
        #GALLERY339 {
            width: 465.937px;
            height: 710px;
        }
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/1ef587ae-78f6-40d2-a64c-6881ff9bd8d2-20240608165704-ywgmz.jpg");
        }
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/0a29f660-11fc-4c81-87d4-dc0e1cfa43a8-20240608165704-9upi4.jpg");
        }
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="3"] {
            background-image: url("https://w.ladicdn.com/s800x1050/5c728619c417ab07e5194baa/54cc98a6-9603-4075-aded-fc73548aec8e-20240608165705-dafec.jpg");
        }
        #THIEPMOI {
            width: 462px;
            height: 694px;
        }
        #GROUP441 {
            width: 471.75px;
            height: 609px;
            top: 71px;
            left: -23.5px;
        }
        #IMAGE397,
        #IMAGE397>.ladi-image>.ladi-image-background,
        #IMAGE394 {
            width: 433px;
            height: 609px;
        }
        #IMAGE397 {
            left: 38.75px;
        }
        #IMAGE397>.ladi-image>.ladi-image-background,
        #IMAGE394>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s750x950/5c728619c417ab07e5194baa/3-20240601020038-vnpyd.png");
        }
        #HEADLINE404 {
            top: 300px;
            left: 82.875px;
        }
        #GROUP442 {
            width: 429.5px;
            height: 69px;
            top: 351px;
        }
        #HEADLINE405,
        #HEADLINE407,
        #HEADLINE399,
        #HEADLINE401 {
            width: 345px;
        }
        #HEADLINE405 {
            left: 84.5px;
        }
        #FORM343 {
            width: 427px;
            height: 42px;
            top: 9px;
        }
        #FORM343 .ladi-form .ladi-form-checkout-payment-item,
        #FORM342 .ladi-form .ladi-form-checkout-payment-item {
            --check-size: calc(14px * 1.5);
            --width-quantity: calc(14px * 2.5 + 30px);
        }
        #FORM_ITEM365 {
            width: 343px;
            height: 38px;
            top: 4px;
            left: 84px;
        }
        #HEADLINE406 {
            width: 342px;
            top: 47px;
            left: 84.5px;
        }
        #GROUP443,
        #GROUP444 {
            height: 82px;
        }
        #GROUP443 {
            top: 420.8px;
            left: 115.25px;
        }
        #PARAGRAPH421,
        #PARAGRAPH416 {
            left: 95px;
        }
        #PARAGRAPH421>.ladi-paragraph,
        #PARAGRAPH416>.ladi-paragraph {
            font-size: 45px;
        }
        #PARAGRAPH422 {
            top: 64px;
        }
        #LINE347,
        #LINE348,
        #LINE345,
        #LINE346 {
            height: 45px;
        }
        #LINE347 {
            left: 166.5px;
        }
        #LINE348 {
            left: 95.5px;
        }
        #HEADLINE407 {
            top: 512.8px;
            left: 82.75px;
        }
        #HEADLINE408 {
            width: 284px;
            top: 567px;
            left: 113.875px;
        }
        #IMAGE398,
        #IMAGE396 {
            width: 190px;
            height: 190px;
        }
        #IMAGE398 {
            top: 67.9px;
            left: 159.25px;
        }
        #IMAGE398>.ladi-image>.ladi-image-background {
            width: 190.01px;
            height: 285.015px;
            top: -7.96235px;
            left: 1.13748px;
        }
        #BUTTON374,
        #BUTTON373 {
            top: 20.5px;
            left: 49.5px;
        }
        #BUTTON375,
        #BUTTON376 {
            top: 20.5px;
            left: 239.5px;
        }
        #GROUP440 {
            width: 468.751px;
            height: 609px;
            top: 71px;
            left: 14px;
        }
        #IMAGE394>.ladi-image>.ladi-image-background {
            width: 433px;
            height: 609.152px;
        }
        #HEADLINE399 {
            top: 303px;
            left: 44.751px;
        }
        #GROUP437 {
            width: 424px;
            height: 69px;
            top: 353px;
            left: 44.751px;
        }
        #HEADLINE400 {
            left: 1px;
        }
        #FORM342 {
            width: 424px;
            height: 52px;
            top: 17px;
            left: 0px;
        }
        #BUTTON377,
        #BUTTON_TEXT377 {
            width: 17px;
        }
        #BUTTON377 {
            top: 12px;
            left: 407px;
        }
        #FORM_ITEM364 {
            width: 345px;
            height: 35px;
        }
        #HEADLINE401 {
            top: 47px;
            left: 0px;
        }
        #HEADLINE401>.ladi-headline {
            font-size: 14px;
            line-height: 1.4;
        }
        #GROUP439,
        #GROUP438 {
            height: 83px;
        }
        #GROUP439 {
            top: 422px;
            left: 76.318px;
        }
        #PARAGRAPH415 {
            left: 39px;
        }
        #PARAGRAPH417 {
            top: 65px;
        }
        #LINE345 {
            top: 18.5px;
            left: 169px;
        }
        #PARAGRAPH418 {
            top: 32px;
            left: 15px;
        }
        #PARAGRAPH419 {
            top: 32px;
            left: 172px;
        }
        #LINE346 {
            top: 19px;
        }
        #HEADLINE402 {
            width: 339px;
            top: 512px;
            left: 48.751px;
        }
        #HEADLINE403 {
            width: 290px;
            top: 563px;
            left: 89.3755px;
        }
        #IMAGE396 {
            top: 66.9px;
            left: 121.075px;
        }
        #IMAGE396>.ladi-image>.ladi-image-background {
            width: 215.457px;
            height: 332.667px;
            top: -20px;
            left: -20px;
            background-image: url({{ asset('images/wedding/card.JPG') }});
        }
    }

    @media (max-width: 767px) {
        #SECTION1,
        #GALLERY340 {
            height: 649.302px;
        }
        #GALLERY340 {
            top: 0px;
            left: -1px;
        }
        #GALLERY340 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("{{ asset('images/wedding/hero/gallery1.JPG') }}");
        }
        #GALLERY340 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("{{ asset('images/wedding/hero/gallery2.JPG') }}");
        }
        #GALLERY340 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {
            background-image: url("{{ asset('images/wedding/hero/gallery3.JPG') }}");
        }
        #GROUP391,
        #GROUP392 {
            width: 41px;
            height: 250.01px;
        }
        #GROUP391 {
            top: auto;
            left: auto;
            right: 15px;
            bottom: 20px;
            position: fixed;
            z-index: 90000050;
        }
        #GROUP393 {
            width: 40px;
            height: 189px;
            left: 1px;
        }
        #GROUP394,
        #BOX366,
        #GROUP395,
        #BOX367,
        #GROUP396,
        #BOX368,
        #GROUP397,
        #BOX369,
        #GROUP398,
        #BOX370,
        #GROUP399,
        #BOX371,
        #GROUP400,
        #BOX372 {
            width: 40px;
            height: 40px;
        }
        #GROUP394 {
            top: 149px;
            left: 0px;
        }
        #SHAPE373,
        #SHAPE374,
        #SHAPE375,
        #SHAPE376,
        #SHAPE380,
        #SHAPE382,
        #SHAPE383,
        #SHAPE385 {
            width: 20px;
            height: 20px;
        }
        #SHAPE373,
        #SHAPE374,
        #SHAPE375,
        #SHAPE376 {
            top: 9.576px;
        }
        #GROUP395,
        #GROUP364,
        #IMAGE151>.ladi-image>.ladi-image-background {
            top: 0px;
            left: 0px;
        }
        #GROUP396 {
            top: 51px;
            left: 0px;
        }
        #GROUP397 {
            top: 101px;
            left: 0px;
        }
        #GROUP398,
        #GROUP399 {
            top: 210.01px;
            left: 0px;
        }
        #SHAPE377,
        #SHAPE380,
        #SHAPE382,
        #SHAPE383 {
            top: 5px;
            left: 5px;
        }
        #SHAPE378 {
            top: 12.5px;
            left: 10px;
        }
        #GROUP400 {
            top: 159px;
            left: 0.5px;
        }
        #SHAPE379 {
            width: 25px;
            height: 25px;
            top: 7.576px;
            left: 8px;
        }
        #BOX387 {
            width: 419px;
            height: 649.302px;
            top: 0px;
            left: 0.5px;
        }
        #GROUP364,
        #BOX349 {
            width: 420px;
            height: 57px;
        }
        #GROUP364 {
            right: 0px;
            bottom: auto;
            position: fixed;
            z-index: 90000050;
            margin: 0px auto;
        }
        #GROUP364.ladi-animation>.ladi-group,
        #GROUP147.ladi-animation>.ladi-group {
            animation-name: fadeInDown;
            animation-delay: 1s;
            animation-duration: 1s;
            animation-iteration-count: 1;
        }
        #IMAGE352,
        #IMAGE352>.ladi-image>.ladi-image-background {
            width: 41.585px;
            height: 41.585px;
        }
        #IMAGE352 {
            top: 7.7075px;
            left: 8.4154px;
        }
        #IMAGE352>.ladi-image>.ladi-image-background {
            background-image: url({{ asset('images/wedding/logo_circle.png') }});
        }
        #SHAPE258 {
            width: 55.2186px;
            height: 35.6513px;
            top: 10.6744px;
            left: 364.781px;
        }
        #NOTIFY336 {
            width: 302.054px;
        }
        #IMAGE12 {
            width: 397.622px;
            height: 203.731px;
            top: 342.238px;
            left: -23px;
        }
        #IMAGE12>.ladi-image>.ladi-image-background {
            width: 397.622px;
            height: 208.231px;
            background-image: url("https://w.ladicdn.com/s700x550/5c7362c6c417ab07e5196b05/t6urt6-20201125030742.png");
        }
        #HEADLINE10 {
            width: 365px;
            top: 497.969px;
            left: 85.622px;
        }
        #HEADLINE10>.ladi-headline {
            font-size: 32px;
        }
        #HEADLINE8 {
            width: 336px;
            top: 545.969px;
            left: 70px;
        }
        #HEADLINE8>.ladi-headline {
            font-size: 15px;
            text-align: center;
        }
        #GROUP367 {
            width: 402px;
            height: 29px;
            top: 598.302px;
            left: 8.5px;
        }
        #BUTTON336,
        #BUTTON339 {
            width: 125px;
            height: 29px;
        }
        #BUTTON_TEXT336,
        #BUTTON_TEXT339 {
            width: 123px;
        }
        #BUTTON_TEXT336,
        #BUTTON_TEXT339,
        #BUTTON_TEXT340 {
            top: 9.32141px;
        }
        #BUTTON_TEXT336>.ladi-headline,
        #BUTTON_TEXT339>.ladi-headline,
        #BUTTON_TEXT340>.ladi-headline {
            font-size: 16px;
            line-height: 1.4;
        }
        #BUTTON339 {
            left: 277px;
        }
        #BUTTON340 {
            width: 141.5px;
            height: 29px;
            left: 130.5px;
        }
        #BUTTON_TEXT340 {
            width: 140px;
        }
        #SECTION3 {
            height: 1903.47px;
        }
        #IMAGE149 {
            top: 1020.36px;
            left: 102.305px;
        }
        #GROUP254 {
            width: 294.214px;
            height: 515.361px;
            top: 578.544px;
            left: 0px;
        }
        #IMAGE150,
        #IMAGE150>.ladi-image>.ladi-image-background {
            width: 267.031px;
            height: 515.361px;
        }
        #IMAGE150 {
            left: 27.1826px;
        }
        #IMAGE148,
        #IMAGE148>.ladi-image>.ladi-image-background {
            width: 169.706px;
            height: 199.374px;
        }
        #IMAGE148 {
            top: 297.32px;
        }
        #IMAGE148>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x500/5c7362c6c417ab07e5196b05/c1-20201125074835.png");
        }
        #GROUP256,
        #BOX25 {
            width: 400px;
            height: 568px;
        }
        #GROUP256 {
            top: 10.544px;
            left: 10px;
        }
        #GROUP256.ladi-animation>.ladi-group,
        #GROUP432.ladi-animation>.ladi-group {
            animation-name: fadeInUp;
            animation-delay: 1s;
            animation-duration: 1s;
        }
        #HEADLINE23,
        #HEADLINE398 {
            top: 89.6842px;
            left: 30px;
        }
        #HEADLINE23>.ladi-headline,
        #HEADLINE398>.ladi-headline {
            font-size: 25px;
            text-align: center;
        }
        #IMAGE30,
        #IMAGE391 {
            height: 45.8386px;
            top: 29.8947px;
            left: 150px;
        }
        #IMAGE355,
        #IMAGE355>.ladi-image>.ladi-image-background {
            width: 400px;
            height: 266.667px;
        }
        #IMAGE355 {
            top: 1619.71px;
            left: 10px;
        }
        #IMAGE355>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s750x600/5c728619c417ab07e5194baa/999777b0-c1a7-4ad3-bf05-e1a6ce68e903-20240115124609-j2rcg.jpg");
        }
        #PARAGRAPH364 {
            width: 364px;
            top: 143.153px;
            left: 28px;
        }
        #PARAGRAPH364>.ladi-paragraph {
            font-size: 15px;
            line-height: 1.4;
        }
        #IMAGE354 {
            width: 400px;
            height: 502.326px;
            top: 587.061px;
            left: 10px;
        }
        #IMAGE354>.ladi-image>.ladi-image-background {
            width: 398.475px;
            height: 616px;
            top: -53.277px;
            background-image: url("https://w.ladicdn.com/s700x950/5c728619c417ab07e5194baa/2e408ebd-ce21-4bac-8b6b-40edcc3b9b6f-20240115124603-vv471.jpg");
        }
        #IMAGE356 {
            width: 400px;
            height: 505px;
            top: 612.47px;
            left: 470px;
            display: none !important;
        }
        #IMAGE356>.ladi-image>.ladi-image-background {
            width: 399.333px;
            height: 599px;
            top: -79px;
            background-image: url("https://w.ladicdn.com/s700x900/5c728619c417ab07e5194baa/eb497993-322b-42ac-9c94-cad61c45a4d7-20240115124611-lxx8i.jpg");
        }
        #IMAGE361 {
            width: 400px;
            height: 511.685px;
            top: 1099.94px;
            left: 10px;
        }
        #IMAGE361>.ladi-image>.ladi-image-background {
            width: 399.655px;
            height: 602.685px;
            top: -76px;
            background-image: url("https://w.ladicdn.com/s700x950/5c728619c417ab07e5194baa/e8080c54-4573-462e-b6ee-7b6c011c7939-20240112152033-qfjnc.jpg");
        }
        #GROUP434,
        #GROUP432,
        #BOX388 {
            width: 400px;
            height: 381px;
        }
        #GROUP434 {
            top: 10.544px;
            left: -433px;
        }
        #PARAGRAPH412,
        #PARAGRAPH250,
        #PARAGRAPH365 {
            width: 345px;
        }
        #PARAGRAPH412 {
            top: 142.654px;
            left: 27.5px;
        }
        #SHAPE403 {
            top: 307.109px;
            left: 164.5px;
        }
        #SECTION336 {
            height: 667.3px;
        }
        #HEADLINE337 {
            top: 15.281px;
            left: 110px;
        }
        #VIDEO335 {
            width: 400px;
            height: 268px;
            top: 111.281px;
            left: 10px;
        }
        #VIDEO335>.ladi-video>.ladi-video-background {
            background-image: url("https://w.ladicdn.com/s400x268/5c728619c417ab07e5194baa/kinh-nghiem-chup-anh-cuoi-khi-mang-bau-05-20240602022741-lqhqx.jpg");
        }
        #SHAPE335 {
            top: 114px;
            left: 180px;
        }
        #PARAGRAPH335 {
            width: 360px;
            top: 58.281px;
            left: 30px;
        }
        #PARAGRAPH335>.ladi-paragraph,
        #PARAGRAPH319>.ladi-paragraph,
        #PARAGRAPH320>.ladi-paragraph,
        #PARAGRAPH397>.ladi-paragraph,
        #PARAGRAPH398>.ladi-paragraph,
        #PARAGRAPH399>.ladi-paragraph,
        #PARAGRAPH400>.ladi-paragraph,
        #FORM340>.ladi-form,
        #PARAGRAPH250>.ladi-paragraph,
        #BUTTON_TEXT270>.ladi-headline,
        #BUTTON_TEXT262>.ladi-headline,
        #BUTTON_TEXT264>.ladi-headline,
        #BUTTON_TEXT266>.ladi-headline,
        #BUTTON_TEXT268>.ladi-headline,
        #PARAGRAPH365>.ladi-paragraph,
        #BUTTON_TEXT364>.ladi-headline {
            font-size: 14px;
        }
        #SHAPE355 {
            width: 38px;
            height: 38px;
            top: -12.272px;
            left: 191.5px;
        }
        #VIDEO339 {
            width: 400px;
            height: 225px;
            top: 403.228px;
            left: 10px;
        }
        #VIDEO339>.ladi-video>.ladi-video-background {
            background-image: url("https://w.ladicdn.com/s400x225/5c728619c417ab07e5194baa/video-1-20240607071447-bqhg8.png");
        }
        #SHAPE339 {
            top: 90.5px;
            left: 178px;
        }
        #SECTION351 {
            height: 338.3px;
        }
        #SECTION351>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s768x338/5c728619c417ab07e5194baa/999777b0-c1a7-4ad3-bf05-e1a6ce68e903-20240608165003-5m48b.jpg");
        }
        #PARAGRAPH407,
        #HEADLINE367,
        #PARAGRAPH366 {
            width: 420px;
        }
        #PARAGRAPH407 {
            top: 90.5px;
            left: 0px;
        }
        #PARAGRAPH407>.ladi-paragraph {
            font-size: 37px;
        }
        #PARAGRAPH408 {
            width: 358px;
            top: 148.5px;
            left: 31.5px;
        }
        #PARAGRAPH408>.ladi-paragraph,
        #PARAGRAPH345>.ladi-paragraph,
        #PARAGRAPH359>.ladi-paragraph,
        #HEADLINE382>.ladi-headline,
        #HEADLINE383>.ladi-headline,
        #HEADLINE384>.ladi-headline,
        #HEADLINE385>.ladi-headline,
        #HEADLINE408>.ladi-headline,
        #HEADLINE403>.ladi-headline {
            font-size: 15px;
        }
        #SHAPE397 {
            width: 80px;
            height: 80px;
            top: 209px;
            left: 170.5px;
        }
        #SECTION78 {
            height: 256.782px;
        }
        #SECTION78>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s768x256/5c7362c6c417ab07e5196b05/w-20201126022617.jpg");
        }
        #IMAGE32 {
            width: 400px;
            height: 236.418px;
            top: 7px;
            left: 10px;
        }
        #IMAGE32>.ladi-image>.ladi-image-background {
            width: 400px;
            height: 269.418px;
            top: 0px;
            background-image: url("https://w.ladicdn.com/s750x600/5c7362c6c417ab07e5196b05/iiiiiiiiiii-20210123091156.jpg");
        }
        #BOX36 {
            width: 382px;
            height: 218.575px;
            top: 16.6218px;
            left: 19px;
        }
        #GROUP298 {
            top: 134.403px;
            left: 59px;
        }
        #BOX299,
        #GROUP142,
        #BOX143 {
            width: 302px;
            height: 74px;
        }
        #GROUP142 {
            top: 134.403px;
            left: 59.5px;
        }
        #BOX143>.ladi-box {
            background-image: url("https://w.ladicdn.com/s650x400/5c7362c6c417ab07e5196b05/q2LEMuoI20210123080955.jpeg");
        }
        #GROUP286 {
            top: 46.197px;
            left: 59px;
        }
        #BOX287,
        #GROUP290,
        #BOX291,
        #GROUP344,
        #GROUP345,
        #BOX340,
        #GROUP346,
        #BOX341,
        #GROUP338,
        #GROUP340,
        #BOX337,
        #GROUP339,
        #BOX336 {
            height: 74px;
        }
        #GROUP290 {
            top: 46.197px;
            left: 59.5px;
        }
        #SECTION79 {
            height: 1097.61px;
        }
        #IMAGE95 {
            width: 400px;
            height: 485.9px;
        }
        #IMAGE95,
        #BOX100,
        #BOX390 {
            top: 10px;
            left: 10px;
        }
        #IMAGE95>.ladi-image>.ladi-image-background {
            width: 399.988px;
            height: 605.9px;
            top: -98px;
            left: -0.320311px;
            background-image: url("https://w.ladicdn.com/s700x950/5c728619c417ab07e5194baa/86559832-f249-4537-999b-1df6bfe461ff-20240115132231-4o-dn.jpg");
        }
        #GROUP274,
        #BOX97 {
            width: 400px;
            height: 582.795px;
        }
        #GROUP274 {
            top: 504.9px;
            left: 10px;
        }
        #GROUP274.ladi-animation>.ladi-group {
            animation-name: fadeInLeft;
            animation-duration: 2s;
        }
        #BOX100 {
            width: 380px;
            height: 564.369px;
        }
        #SHAPE102,
        #SHAPE404 {
            width: 96.0025px;
            height: 80px;
            top: 60px;
            left: 30px;
        }
        #PARAGRAPH96,
        #PARAGRAPH413,
        #PARAGRAPH234 {
            width: 338px;
        }
        #PARAGRAPH96 {
            top: 96.997px;
            left: 31px;
        }
        #PARAGRAPH96>.ladi-paragraph,
        #PARAGRAPH413>.ladi-paragraph {
            font-size: 14px;
            line-height: 1.6;
        }
        #IMAGE101,
        #IMAGE392 {
            top: 36px;
            left: 150px;
        }
        #GROUP435,
        #BOX389 {
            width: 400px;
            height: 310.795px;
        }
        #GROUP435 {
            top: 537.9px;
            left: -441px;
        }
        #GROUP435.ladi-animation>.ladi-group {
            animation-name: fadeInLeft;
            animation-delay: 1s;
            animation-duration: 2s;
        }
        #BOX390 {
            width: 380px;
            height: 289.369px;
        }
        #PARAGRAPH413 {
            top: 101.997px;
            left: 30px;
        }
        #SECTION103 {
            height: 1114.69px;
        }
        #IMAGE105 {
            width: 400px;
            height: 493.902px;
            top: 8px;
            left: 10px;
        }
        #IMAGE105>.ladi-image>.ladi-image-background {
            width: 399.722px;
            height: 599.583px;
            background-image: url("https://w.ladicdn.com/s700x900/5c728619c417ab07e5194baa/e6f4c0e8-7b23-4a4a-aa44-17c55e801498-20240115140303-mkcmz.jpg");
        }
        #IMAGE105>.ladi-image>.ladi-image-background,
        #IMAGE43>.ladi-image>.ladi-image-background {
            top: -30px;
            left: -1px;
        }
        #GROUP277,
        #BOX233 {
            width: 400px;
            height: 571.388px;
        }
        #GROUP277 {
            top: 519.902px;
            left: 10px;
        }
        #GROUP277.ladi-animation>.ladi-group,
        #GROUP335.ladi-animation>.ladi-group,
        #GROUP406.ladi-animation>.ladi-group,
        #GROUP414.ladi-animation>.ladi-group {
            animation-duration: 2s;
        }
        #BOX242 {
            width: 380px;
            height: 551px;
        }
        #BOX242,
        #BOX392 {
            top: 10.388px;
            left: 10px;
        }
        #PARAGRAPH234 {
            top: 69.388px;
            left: 31px;
        }
        #PARAGRAPH234>.ladi-paragraph,
        #PARAGRAPH414>.ladi-paragraph {
            font-size: 14px;
            line-height: 1.8;
        }
        #IMAGE245 {
            top: 21.388px;
            left: 150px;
        }
        #SHAPE246,
        #SHAPE405 {
            width: 96.0029px;
            height: 80px;
            top: 40.388px;
            left: 30px;
        }
        #GROUP436,
        #BOX391 {
            width: 400px;
            height: 311.388px;
        }
        #GROUP436 {
            top: 519.902px;
            left: -438px;
        }
        #GROUP436.ladi-animation>.ladi-group {
            animation-delay: 1s;
            animation-duration: 2s;
        }
        #BOX392 {
            width: 380px;
            height: 290px;
        }
        #PARAGRAPH414 {
            width: 347px;
            top: 90.386px;
            left: 26.5px;
        }
        #IMAGE393 {
            top: 27.388px;
            left: 150px;
        }
        #SECTION5 {
            height: 1285.1px;
        }
        #IMAGE151,
        #IMAGE151>.ladi-image>.ladi-image-background {
            width: 148.955px;
            height: 170px;
        }
        #IMAGE151 {
            top: 168.6px;
            left: 20px;
        }
        #IMAGE151>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s450x500/5c7362c6c417ab07e5196b05/c4-20201125075055.png");
        }
        #IMAGE153 {
            width: 150.268px;
            height: 180.5px;
            top: 905.1px;
            left: -24px;
        }
        #IMAGE153>.ladi-image>.ladi-image-background {
            width: 150.268px;
            height: 187px;
            background-image: url("https://w.ladicdn.com/s500x500/5c7362c6c417ab07e5196b05/c6-20201125075055.png");
        }
        #IMAGE53 {
            width: 280.441px;
            height: 170px;
            top: 156.6px;
            left: 129.298px;
        }
        #IMAGE53>.ladi-image>.ladi-image-background {
            width: 289.441px;
            height: 192.961px;
            top: -19px;
            left: -9.99998px;
            background-image: url("https://w.ladicdn.com/s600x500/5c728619c417ab07e5194baa/fa9faa6f-9244-4925-845d-d53f9e98198a-20240115124615-x7ch-.jpg");
        }
        #IMAGE42 {
            width: 110.777px;
            height: 153px;
            top: 228.6px;
            left: 10px;
        }
        #IMAGE42>.ladi-image>.ladi-image-background {
            width: 111.333px;
            height: 167px;
            top: -1px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s450x500/5c728619c417ab07e5194baa/c372c35c-2fc4-4bfe-9478-d7103dac5ff0-20240115124611-d0b8n.jpg");
        }
        #IMAGE43,
        #IMAGE362 {
            width: 110px;
            height: 184px;
        }
        #IMAGE43 {
            top: 738.6px;
            left: 10px;
        }
        #IMAGE43>.ladi-image>.ladi-image-background {
            width: 143.334px;
            height: 215px;
            background-image: url("https://w.ladicdn.com/s450x550/5c728619c417ab07e5194baa/2d77265c-c799-41fd-9a4f-f319a67844ba-20240115124603-khtr6.jpg");
        }
        #IMAGE44 {
            width: 110px;
            height: 179.243px;
            top: 469.6px;
            left: 10px;
        }
        #IMAGE44>.ladi-image>.ladi-image-background {
            width: 119.495px;
            height: 179.243px;
            top: 0px;
            left: -5px;
            background-image: url("https://w.ladicdn.com/s450x500/5c728619c417ab07e5194baa/3f3a0e3b-01f1-481a-8b40-3f3d5bbe92a0-20240115124603-bucfn.jpg");
        }
        #IMAGE45 {
            width: 280.702px;
            height: 429px;
            top: 334.6px;
            left: 129.298px;
        }
        #IMAGE45>.ladi-image>.ladi-image-background {
            width: 286px;
            height: 429px;
            background-image: url("https://w.ladicdn.com/s600x750/5c728619c417ab07e5194baa/610915a2-612e-4b4b-8c11-f5f01e4bdb21-20240115124609-u7jnd.jpg");
        }
        #IMAGE46 {
            width: 279.07px;
            height: 359px;
            top: 773.6px;
            left: 130px;
        }
        #IMAGE46>.ladi-image>.ladi-image-background {
            width: 278.956px;
            height: 440.75px;
            top: -31px;
            left: 0px;
        }
        #IMAGE47,
        #IMAGE40 {
            width: 110px;
            height: 70px;
        }
        #IMAGE47 {
            top: 657.6px;
            left: 10px;
        }
        #IMAGE47>.ladi-image>.ladi-image-background {
            width: 110px;
            height: 73.7271px;
            top: -2px;
            background-image: url("https://w.ladicdn.com/s450x400/5c728619c417ab07e5194baa/be611b44-5382-418c-acb3-360921f45b0c-20240115124610-swvzp.jpg");
        }
        #BOX48 {
            width: 108.639px;
            height: 130px;
            top: 678.6px;
            left: 280px;
        }
        #BOX50 {
            width: 279.298px;
            height: 40px;
            top: 1141.51px;
            left: 129.886px;
        }
        #GROUP147 {
            width: 343px;
            height: 103px;
            top: 28.6px;
            left: 40px;
        }
        #HEADLINE51,
        #HEADLINE393 {
            width: 343px;
        }
        #HEADLINE51 {
            top: 60px;
        }
        #IMAGE52,
        #IMAGE52>.ladi-image>.ladi-image-background {
            width: 85.2683px;
            height: 46px;
        }
        #IMAGE52 {
            left: 128.366px;
        }
        #IMAGE52>.ladi-image>.ladi-image-background,
        #IMAGE364>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x350/5c7362c6c417ab07e5196b05/r5gt-20201125032553.png");
        }
        #IMAGE152 {
            width: 123.03px;
            height: 63px;
            top: 1022.6px;
            left: 0px;
        }
        #IMAGE152>.ladi-image>.ladi-image-background {
            width: 123.03px;
            height: 140px;
            background-image: url("https://w.ladicdn.com/s450x450/5c7362c6c417ab07e5196b05/c5-20201125075055.png");
        }
        #IMAGE40 {
            top: 390.6px;
            left: 10.3885px;
        }
        #IMAGE40>.ladi-image>.ladi-image-background {
            width: 161px;
            height: 107.333px;
            top: -23px;
            left: -51px;
            background-image: url("https://w.ladicdn.com/s500x450/5c728619c417ab07e5194baa/5163aef3-a0d1-48dc-800d-b122e95dc4e9-20240115124604-9rdfn.jpg");
        }
        #IMAGE345 {
            width: 89.5361px;
            height: 81.293px;
            top: 702.953px;
            left: 289.551px;
        }
        #IMAGE345>.ladi-image>.ladi-image-background {
            width: 111.227px;
            height: 111.227px;
            top: -15.1215px;
            left: -10.4924px;
            background-image: url("https://w.ladicdn.com/s450x450/5c728619c417ab07e5194baa/th-20240112130749-9eb7u.png");
        }
        #GROUP359 {
            width: 102px;
            height: 52.9361px;
            top: 1217.51px;
            left: 159px;
        }
        #GROUP359.ladi-animation>.ladi-group {
            animation-name: fadeInDown;
            animation-delay: 1s;
            animation-duration: 4s;
            animation-iteration-count: 1;
        }
        #HEADLINE358 {
            width: 102px;
        }
        #HEADLINE358>.ladi-headline,
        #BUTTON_TEXT344>.ladi-headline,
        #BUTTON_TEXT345>.ladi-headline,
        #BUTTON_TEXT365>.ladi-headline,
        #BUTTON_TEXT366>.ladi-headline,
        #BUTTON_TEXT367>.ladi-headline,
        #BUTTON_TEXT368>.ladi-headline,
        #BUTTON_TEXT354>.ladi-headline,
        #BUTTON_TEXT355>.ladi-headline,
        #HEADLINE405>.ladi-headline,
        #HEADLINE406>.ladi-headline,
        #PARAGRAPH422>.ladi-paragraph,
        #HEADLINE400>.ladi-headline,
        #PARAGRAPH417>.ladi-paragraph {
            font-size: 12px;
        }
        #SHAPE353 {
            width: 20.1708px;
            height: 33.1991px;
            top: 19.737px;
            left: 40.915px;
        }
        #IMAGE362 {
            top: 934.6px;
            left: 10px;
        }
        #IMAGE362>.ladi-image>.ladi-image-background {
            width: 136px;
            height: 204px;
            top: -21px;
            left: -9px;
        }
        #SECTION338 {
            height: 225.3px;
        }
        #GROUP344 {
            top: 122.5px;
            left: 59px;
        }
        #HEADLINE346 {
            left: 49.1802px;
        }
        #GROUP338 {
            top: 27.5px;
            left: 58.399px;
        }
        #SHAPE337 {
            left: 239.962px;
        }
        #HEADLINE342 {
            left: 49.3887px;
        }
        #SECTION340 {
            height: 471.3px;
        }
        #GROUP335 {
            width: 346px;
            height: 77px;
            top: 349.799px;
            left: 37px;
        }
        #PARAGRAPH341,
        #PARAGRAPH342,
        #PARAGRAPH343,
        #PARAGRAPH344,
        #PARAGRAPH336,
        #PARAGRAPH337,
        #PARAGRAPH338,
        #PARAGRAPH339 {
            width: 46px;
        }
        #PARAGRAPH341 {
            top: 51px;
            left: 16px;
        }
        #PARAGRAPH341>.ladi-paragraph,
        #PARAGRAPH342>.ladi-paragraph,
        #PARAGRAPH343>.ladi-paragraph,
        #PARAGRAPH344>.ladi-paragraph,
        #PARAGRAPH336>.ladi-paragraph,
        #PARAGRAPH337>.ladi-paragraph,
        #PARAGRAPH338>.ladi-paragraph,
        #PARAGRAPH339>.ladi-paragraph {
            text-align: center;
        }
        #PARAGRAPH342 {
            top: 51px;
            left: 106px;
        }
        #PARAGRAPH343 {
            top: 51px;
            left: 194px;
        }
        #PARAGRAPH344 {
            top: 51px;
            left: 284px;
        }
        #GROUP428,
        #IMAGE387,
        #IMAGE387>.ladi-image>.ladi-image-background,
        #GROUP429,
        #IMAGE388,
        #IMAGE388>.ladi-image>.ladi-image-background {
            width: 410px;
            height: 250px;
        }
        #GROUP428 {
            top: 3px;
            left: 5px;
        }
        #IMAGE387>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s750x600/5c728619c417ab07e5194baa/lt-20240613073500-1ltyp.png");
        }
        #SHAPE401,
        #SHAPE402 {
            width: 28.399px;
            height: 28.399px;
        }
        #SHAPE401 {
            top: 178.657px;
            left: 363px;
        }
        #PARAGRAPH410 {
            width: 400px;
            top: 268.146px;
            left: 9.399px;
        }
        #PARAGRAPH410>.ladi-paragraph,
        #PARAGRAPH411>.ladi-paragraph {
            font-size: 18px;
        }
        #SECTION337 {
            height: 481.3px;
        }
        #COUNTDOWN335 {
            top: 356.799px;
            left: 37px;
        }
        #PARAGRAPH336 {
            top: 407.799px;
            left: 53px;
        }
        #PARAGRAPH337 {
            top: 407.799px;
            left: 143px;
        }
        #PARAGRAPH338 {
            top: 407.799px;
            left: 231px;
        }
        #PARAGRAPH339 {
            top: 407.799px;
            left: 321px;
        }
        #GROUP429 {
            top: 3.7px;
            left: 5px;
        }
        #IMAGE388>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s750x600/5c728619c417ab07e5194baa/lh-20240613073500--h5ed.png");
        }
        #SHAPE402 {
            top: 141.657px;
            left: 365px;
        }
        #PARAGRAPH411 {
            top: 269.846px;
            left: 10px;
        }
        #SECTION339 {
            height: 613.3px;
        }
        #HEADLINE339,
        #HEADLINE318,
        #HEADLINE387,
        #HEADLINE388 {
            width: 200px;
        }
        #HEADLINE339 {
            top: 35.899px;
            left: 110px;
        }
        #HEADLINE339>.ladi-headline {
            font-size: 35px;
            line-height: 1.4;
        }
        #PARAGRAPH345 {
            width: 389px;
            top: 100.899px;
            left: 15.5px;
        }
        #IMAGE364,
        #IMAGE364>.ladi-image>.ladi-image-background {
            width: 61.1707px;
            height: 33px;
        }
        #IMAGE364 {
            top: 2.899px;
            left: 179.415px;
        }
        #IMAGE378,
        #IMAGE378>.ladi-image>.ladi-image-background {
            width: 384.626px;
            height: 226.251px;
        }
        #IMAGE378 {
            top: 343.522px;
            left: 17.687px;
        }
        #IMAGE378>.ladi-image>.ladi-image-background {
            background-image: url({{ asset('images/wedding/loi_ngo.png') }});
        }
        #SECTION341 {
            height: 566.3px;
        }
        #IMAGE379 {
            width: 407px;
            height: 559.3px;
            left: 6.078px;
        }
        #IMAGE379>.ladi-image>.ladi-image-background {
            width: 930.45px;
            height: 620.3px;
            background-image: url({{ asset('images/wedding/avatar/background.JPG') }});
        }
        #HEADLINE340,
        #HEADLINE386 {
            width: 339px;
        }
        #HEADLINE340 {
            top: 66.0165px;
            left: 40.5002px;
        }
        #SHAPE356 {
            width: 61.0165px;
            height: 61.0165px;
            top: 5px;
            left: 179.492px;
        }
        #GROUP419,
        #GROUP420 {
            width: 217px;
            height: 372.837px;
        }
        #GROUP419 {
            top: 147.307px;
            left: 0.0612px;
        }
        #IMAGE340,
        #IMAGE341 {
            width: 182.249px;
            height: 215.583px;
        }
        #IMAGE340 {
            left: 17.3755px;
        }
        #IMAGE340>.ladi-image>.ladi-image-background {
            width: 219.055px;
            height: 328.583px;
            top: -25px;
            left: -18.5px;
            background-image: url("{{ asset('images/wedding/avatar/goom.JPG') }}");
        }
        #GROUP348,
        #GROUP349 {
            width: 169.249px;
            height: 37px;
        }
        #GROUP348 {
            top: 221.837px;
            left: 24.2978px;
        }
        #GROUP347,
        #GROUP350 {
            width: 169.249px;
            height: 23.823px;
            top: 13.177px;
        }
        #LINE335,
        #LINE336 {
            width: 160px;
            top: 6.823px;
            left: 9.249px;
        }
        #SHAPE343 {
            width: 15.9835px;
            height: 16.9119px;
        }
        #HEADLINE348,
        #HEADLINE349 {
            width: 117px;
            left: 26.1245px;
        }
        #HEADLINE348>.ladi-headline,
        #HEADLINE349>.ladi-headline,
        #HEADLINE318>.ladi-headline,
        #HEADLINE387>.ladi-headline,
        #HEADLINE388>.ladi-headline {
            font-size: 20px;
        }
        #PARAGRAPH350,
        #PARAGRAPH355 {
            width: 166px;
        }
        #PARAGRAPH350 {
            top: 338.837px;
            left: 25.9223px;
        }
        #PARAGRAPH350>.ladi-paragraph,
        #PARAGRAPH355>.ladi-paragraph {
            font-size: 12px;
            line-height: 1.4;
        }
        #PARAGRAPH395,
        #PARAGRAPH396 {
            width: 217px;
            top: 291.337px;
        }
        #PARAGRAPH395>.ladi-paragraph,
        #PARAGRAPH396>.ladi-paragraph,
        #FORM339>.ladi-form,
        #PARAGRAPH404>.ladi-paragraph,
        #HEADLINE395>.ladi-headline,
        #HEADLINE396>.ladi-headline,
        #FORM343>.ladi-form,
        #HEADLINE407>.ladi-headline,
        #FORM342>.ladi-form,
        #HEADLINE402>.ladi-headline {
            font-size: 13px;
        }
        #GROUP405,
        #GROUP411 {
            width: 109px;
            height: 30px;
        }
        #GROUP405 {
            top: 254.583px;
            left: 54.4223px;
        }
        #GROUP406,
        #BOX373,
        #GROUP407,
        #BOX374,
        #GROUP408,
        #BOX375,
        #GROUP412,
        #BOX376,
        #GROUP413,
        #BOX377,
        #GROUP414,
        #BOX378 {
            width: 30px;
            height: 30px;
        }
        #GROUP407,
        #GROUP413 {
            left: 40px;
        }
        #GROUP407.ladi-animation>.ladi-group,
        #GROUP413.ladi-animation>.ladi-group {
            animation-duration: 1.5s;
        }
        #SHAPE381,
        #SHAPE384 {
            width: 18px;
            height: 18px;
        }
        #SHAPE381 {
            top: 6px;
        }
        #GROUP408,
        #GROUP414 {
            left: 79px;
        }
        #GROUP420 {
            top: 147.307px;
            left: 203.361px;
        }
        #IMAGE341 {
            left: 17.375px;
        }
        #IMAGE341>.ladi-image>.ladi-image-background {
            width: 183.055px;
            height: 274.583px;
            top: -14px;
            left: 0px;
            background-image: url("{{ asset('images/wedding/avatar/bride.jpg') }}");
        }
        #GROUP349 {
            top: 221.837px;
            left: 23.875px;
        }
        #SHAPE344 {
            width: 15.9835px;
        }
        #PARAGRAPH355 {
            top: 338.837px;
            left: 25.5px;
        }
        #GROUP411 {
            top: 254.583px;
            left: 59px;
        }
        #SHAPE384 {
            top: 6px;
            left: 6px;
        }
        #SHAPE385 {
            top: 5px;
        }
        #SECTION315 {
            height: 1015.1px;
        }
        #GROUP355,
        #GROUP316,
        #GROUP415,
        #GROUP416,
        #GROUP417,
        #GROUP418 {
            width: 390.282px;
            height: 219.679px;
        }
        #GROUP355 {
            top: 174.976px;
            left: 14.8591px;
        }
        #GROUP355.ladi-animation>.ladi-group {
            animation-name: fadeInUp;
            animation-delay: 1s;
            animation-duration: 2s;
            animation-iteration-count: 1;
        }
        #BOX317,
        #BOX380,
        #BOX381 {
            width: 390.282px;
            height: 194px;
            top: 25.6788px;
        }
        #HEADLINE318,
        #HEADLINE387,
        #HEADLINE388 {
            top: 29.2685px;
            left: 38.1265px;
        }
        #PARAGRAPH319,
        #PARAGRAPH397,
        #PARAGRAPH399,
        #HEADLINE381 {
            width: 254px;
        }
        #PARAGRAPH319,
        #PARAGRAPH397,
        #PARAGRAPH399 {
            top: 67.3877px;
            left: 37.1265px;
        }
        #PARAGRAPH320,
        #PARAGRAPH398,
        #PARAGRAPH400 {
            width: 324px;
            top: 114.092px;
            left: 38.1265px;
        }
        #SHAPE322,
        #SHAPE387,
        #SHAPE389 {
            width: 22.6615px;
            height: 22.6615px;
            top: 67.359px;
            left: 11.5897px;
        }
        #SHAPE323,
        #SHAPE388,
        #SHAPE390 {
            width: 18.465px;
            height: 18.4649px;
            top: 114.735px;
            left: 14.2684px;
        }
        #IMAGE324,
        #IMAGE381,
        #IMAGE382 {
            width: 131.167px;
            height: 95.3418px;
            left: 241.579px;
        }
        #IMAGE324>.ladi-image>.ladi-image-background,
        #IMAGE381>.ladi-image>.ladi-image-background,
        #IMAGE382>.ladi-image>.ladi-image-background {
            width: 149.469px;
            height: 99.5384px;
            left: -4.19658px;
        }
        #IMAGE324>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s450x400/5c7362c6c417ab07e5196b05/hixhxxm_20210125010216.jpg");
        }
        #BUTTON344,
        #BUTTON345,
        #BUTTON365,
        #BUTTON366,
        #BUTTON367,
        #BUTTON368 {
            width: 148px;
            height: 30px;
        }
        #BUTTON344,
        #BUTTON365,
        #BUTTON367 {
            top: 176.005px;
            left: 32.8205px;
        }
        #BUTTON345,
        #BUTTON366,
        #BUTTON368 {
            top: 176.005px;
            left: 210.681px;
        }
        #HEADLINE386 {
            top: 66px;
            left: 40.4997px;
        }
        #HEADLINE386>.ladi-headline {
            font-size: 45px;
        }
        #SHAPE386 {
            top: 18px;
            left: 181.578px;
        }
        #GROUP415 {
            top: 444.211px;
            left: 14.8586px;
        }
        #GROUP415.ladi-animation>.ladi-group,
        #GROUP375.ladi-animation>.ladi-group {
            animation-name: fadeInUp;
            animation-delay: 1s;
            animation-duration: 3s;
            animation-iteration-count: 1;
        }
        #IMAGE381>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s450x400/5c728619c417ab07e5194baa/291610733_5402986359724076_4717512138686002181_n-20240528043229-lz_ec.jpg");
        }
        #GROUP417 {
            top: 714.976px;
            left: 14.8586px;
        }
        #GROUP417.ladi-animation>.ladi-group {
            animation-name: fadeInUp;
            animation-delay: 1s;
            animation-duration: 4s;
            animation-iteration-count: 1;
        }
        #IMAGE382>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s450x400/5c728619c417ab07e5194baa/trang-phuc-cuoi-bai-bien-top-20240528043230-je3td.jpg");
        }
        #SECTION348 {
            height: 480.944px;
        }
        #SECTION348>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s768x480/5c728619c417ab07e5194baa/b84e4d98-cf14-47f3-b59b-8f00e52843cd-20240512200313-up8ae.jpg");
        }
        #IMAGE383 {
            width: 420px;
            height: 480.944px;
        }
        #IMAGE383>.ladi-image>.ladi-image-background {
            width: 421.963px;
            height: 632.944px;
            top: -152px;
            left: -2px;
            background-image: url("https://w.ladicdn.com/s750x950/5c728619c417ab07e5194baa/b84e4d98-cf14-47f3-b59b-8f00e52843cd-20240512200313-up8ae.jpg");
        }
        #GROUP421,
        #BOX382 {
            width: 121px;
            height: 86px;
        }
        #GROUP421 {
            top: 250.468px;
            left: 148.679px;
        }
        #SHAPE391 {
            width: 75.2381px;
            height: 63.2px;
            top: 11.4px;
            left: 22.881px;
        }
        #HEADLINE390,
        #HEADLINE407,
        #HEADLINE402 {
            width: 299px;
        }
        #HEADLINE390 {
            top: 92.153px;
            left: 59.6786px;
        }
        #HEADLINE390>.ladi-headline {
            font-size: 40px;
        }
        #PARAGRAPH401,
        #PARAGRAPH404 {
            width: 331px;
        }
        #PARAGRAPH401 {
            top: 156.153px;
            left: 44.4996px;
        }
        #PARAGRAPH401>.ladi-paragraph,
        #HEADLINE248>.ladi-headline,
        #HEADLINE362>.ladi-headline {
            font-size: 16px;
        }
        #SECTION344 {
            height: 528.5px;
        }
        #HEADLINE353 {
            width: 290px;
            top: 59.062px;
            left: 65.179px;
        }
        #HEADLINE353>.ladi-headline {
            font-size: 41px;
        }
        #PARAGRAPH359 {
            width: 359px;
            top: 125.062px;
            left: 30.679px;
        }
        #SHAPE357 {
            width: 71px;
            height: 71px;
            top: 3px;
            left: 174.679px;
        }
        #BOX345 {
            width: 384.875px;
            height: 281px;
            top: 189.471px;
            left: 17.7415px;
        }
        #GROUP375 {
            width: 256.321px;
            height: 23.5px;
            top: 422.971px;
            left: 86.8395px;
        }
        #PARAGRAPH370 {
            width: 248px;
            left: 8.321px;
        }
        #PARAGRAPH370>.ladi-paragraph,
        #PARAGRAPH405>.ladi-paragraph {
            font-size: 14px;
            text-align: center;
        }
        #SHAPE363 {
            top: 1.5px;
        }
        #FORM339 {
            width: 320.562px;
            height: 206px;
            top: 207.471px;
            left: 49.898px;
        }
        #FORM339 .ladi-form .ladi-form-checkout-payment-item,
        #FORM343 .ladi-form .ladi-form-checkout-payment-item,
        #FORM342 .ladi-form .ladi-form-checkout-payment-item {
            --check-size: calc(13px * 1.5);
            --width-quantity: calc(13px * 2.5 + 30px);
        }
        #BUTTON370 {
            width: 249.429px;
            height: 36px;
            top: 170px;
            left: 35.5665px;
        }
        #BUTTON_TEXT370 {
            width: 249px;
        }
        #BUTTON_TEXT370>.ladi-headline {
            line-height: 1.4;
        }
        #FORM_ITEM350 {
            width: 148.733px;
        }
        #FORM_ITEM351 {
            width: 320.562px;
            height: 55px;
            top: 45.779px;
        }
        #FORM_ITEM352 {
            width: 152.429px;
            height: 35px;
            left: 168.133px;
        }
        #FORM_ITEM353 {
            width: 320.562px;
            top: 110.779px;
        }
        #SECTION350 {
            height: 720.3px;
        }
        #SECTION350>.ladi-section-background {
            background-image: url("https://w.ladicdn.com/s768x720/5c728619c417ab07e5194baa/istockphoto-1370544962-612x612-20240511035415-h6g2l.jpg");
        }
        #BOX383 {
            width: 395px;
            height: 689px;
            top: 12.4px;
            left: 12.679px;
        }
        #BOX384 {
            width: 359px;
            height: 653px;
            top: 27.4px;
            left: 30.179px;
        }
        #GROUP425 {
            width: 343px;
            height: 67.713px;
            top: 183.558px;
            left: 38.179px;
        }
        #HEADLINE393>.ladi-headline {
            font-size: 42px;
        }
        #SHAPE395 {
            top: 57.713px;
            left: 71.5px;
        }
        #PARAGRAPH404 {
            top: 263.9px;
            left: 45.179px;
        }
        #FORM340 {
            width: 328px;
            height: 281px;
            top: 345.209px;
            left: 46.179px;
        }
        #FORM340 .ladi-form .ladi-form-checkout-payment-item {
            --check-size: calc(14px * 1.5);
            --width-quantity: calc(14px * 2.5 + 30px);
        }
        #BUTTON371 {
            width: 328px;
            height: 40px;
            top: 241px;
        }
        #BUTTON_TEXT371 {
            width: 328px;
            top: 9px;
        }
        #FORM_ITEM354,
        #FORM_ITEM355 {
            width: 160px;
            height: 40px;
        }
        #FORM_ITEM355 {
            left: 168px;
        }
        #FORM_ITEM356 {
            width: 328px;
            height: 66px;
            top: 153px;
        }
        #FORM_ITEM357 {
            width: 328px;
            height: 47px;
            top: 50px;
        }
        #FORM_ITEM358 {
            width: 160px;
            height: 35px;
            top: 107px;
            left: 0px;
        }
        #FORM_ITEM359 {
            width: 159.5px;
            height: 35px;
            top: 107px;
            left: 168px;
        }
        #HEADLINE395 {
            width: 151px;
            top: 633.709px;
            left: 46.679px;
        }
        #HEADLINE396 {
            width: 116px;
            top: 633.709px;
            left: 258.679px;
        }
        #IMAGE385 {
            width: 146.842px;
            height: 146.842px;
            top: 36.558px;
            left: 136.758px;
        }
        #IMAGE385>.ladi-image>.ladi-image-background {
            width: 147.625px;
            height: 221.438px;
            top: -3px;
            left: -1px;
            background-image: url({{ asset('images/wedding/confirm_invitation.JPG') }});
        }
        #SECTION342 {
            height: 589.832px;
        }
        #IMAGE386 {
            width: 420px;
            height: 589.832px;
        }
        #IMAGE386>.ladi-image>.ladi-image-background {
            width: 983.748px;
            height: 655.832px;
            top: -68px;
            left: -360px;
            background-image: url({{ asset('images/wedding/Thanks.JPG') }});
        }
        #HEADLINE367 {
            top: 238.055px;
            left: 0px;
        }
        #HEADLINE367>.ladi-headline {
            font-size: 95px;
        }
        #PARAGRAPH366 {
            top: 376.055px;
            left: 0.179px;
        }
        #PARAGRAPH366>.ladi-paragraph {
            font-size: 25px;
        }
        #GROUP426,
        #BOX385 {
            width: 420px;
            height: 37px;
        }
        #GROUP426 {
            top: 496.402px;
            left: 0.179px;
        }
        #PARAGRAPH405 {
            width: 329px;
            top: 7.5px;
            left: 45.5px;
        }
        #SHAPE396 {
            width: 56px;
            height: 56px;
            top: 421.055px;
            left: 181.679px;
        }
        #POPUP247,
        #POPUP342 {
            width: 420px;
            height: 373px;
        }
        #IMAGE252,
        #IMAGE367 {
            width: 420px;
            height: 372px;
        }
        #BOX253,
        #BOX350 {
            width: 396px;
            height: 350px;
            top: 11px;
        }
        #HEADLINE248,
        #HEADLINE362 {
            width: 395px;
        }
        #HEADLINE248 {
            top: 174px;
            left: 12.5px;
        }
        #HEADLINE249,
        #HEADLINE363 {
            width: 393px;
        }
        #HEADLINE249 {
            top: 99px;
            left: 15px;
        }
        #PARAGRAPH250 {
            top: 213px;
            left: 38px;
        }
        #IMAGE251 {
            top: 49px;
            left: 157.622px;
        }
        #POPUP260 {
            width: 206px;
            height: 220px;
        }
        #POPUP260>.ladi-popup>.ladi-popup-background {
            background-image: url("https://w.ladicdn.com/s206x220/5c7362c6c417ab07e5196b05/hhhh-20201125074735.jpg");
        }
        #BUTTON270 {
            top: 168.037px;
            left: 24.518px;
        }
        #BUTTON262 {
            width: 188.253px;
            top: 12.8125px;
            left: 24.075px;
        }
        #BUTTON_TEXT262 {
            width: 188px;
        }
        #BUTTON264 {
            width: 121.459px;
            top: 51px;
            left: 24.518px;
        }
        #BUTTON_TEXT264 {
            width: 121px;
        }
        #BUTTON266 {
            width: 179.231px;
            top: 88.0375px;
            left: 24.075px;
        }
        #BUTTON_TEXT266 {
            width: 179px;
        }
        #BUTTON268 {
            width: 171.293px;
            top: 128.037px;
            left: 24.518px;
        }
        #BUTTON_TEXT268 {
            width: 171px;
        }
        #DROPBOX338 {
            width: 228px;
            height: 378px;
        }
        #HEADLINE362 {
            top: 162px;
            left: 12.5px;
        }
        #HEADLINE363 {
            top: 91px;
            left: 15px;
        }
        #PARAGRAPH365 {
            top: 204px;
            left: 38px;
        }
        #IMAGE368 {
            top: 45px;
            left: 157.622px;
        }
        #BUTTON354,
        #BUTTON355 {
            width: 152px;
            height: 27px;
        }
        #BUTTON354 {
            top: 320.499px;
            left: 47px;
        }
        #BUTTON_TEXT354,
        #BUTTON_TEXT355 {
            width: 152px;
        }
        #BUTTON355 {
            top: 320.499px;
            left: 225px;
        }
        #PARAGRAPH371 {
            width: 288px;
            top: 114.494px;
            left: 61.5px;
        }
        #IMAGE389 {
            top: 67.557px;
        }
        #POPUP348 {
            width: 298px;
            height: 96px;
        }
        #HEADLINE381 {
            top: 8.5px;
            left: 22px;
        }
        #BUTTON364 {
            width: 166px;
            height: 32px;
            top: 49px;
            left: 66px;
        }
        #BUTTON_TEXT364 {
            width: 164px;
        }
        #THIEP,
        #MUNGCUOI,
        #LOICHUC,
        #XNTD {
            width: 150px;
            height: 30px;
        }
        #HEADLINE382 {
            width: 131px;
            top: 3px;
            left: 9.5px;
        }
        #HEADLINE383 {
            width: 138px;
            top: 3px;
            left: 6px;
        }
        #HEADLINE384 {
            width: 124px;
            top: 3px;
            left: 13px;
        }
        #HEADLINE385 {
            width: 146px;
            top: 2px;
            left: 2px;
        }
        #POPUP353,
        #GALLERY337 {
            width: 401px;
            height: 588px;
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/fee21b86-2840-4d6c-8cd0-142656f08619-20240608165012-wa9qh.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/5f4bf5f7-9eb8-473e-a95f-6ab0ab5d77ca-20240608164954-iewo7.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/be611b44-5382-418c-acb3-360921f45b0c-20240608165011-3fteg.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="3"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/eb497993-322b-42ac-9c94-cad61c45a4d7-20240608165012-ozpaa.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="4"],
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/e6f4c0e8-7b23-4a4a-aa44-17c55e801498-20240608165011-n-bo5.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="5"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/cf0e3bd8-300c-4eb8-91f4-4b2b0e3511f5-20240608165011-nj81p.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="6"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/c372c35c-2fc4-4bfe-9478-d7103dac5ff0-20240608165011-wupru.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="7"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/c13f7535-3404-4c31-a814-571647df4bbe-20240608165011-b8lzy.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="8"],
        #GALLERY338 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/86559832-f249-4537-999b-1df6bfe461ff-20240608165003-d1ny3.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="9"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/610915a2-612e-4b4b-8c11-f5f01e4bdb21-20240608165002-f8yvl.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="10"],
        #GALLERY338 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/0225962a-f125-42f3-8419-07ad78a11013-20240608165002-4fz0v.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="11"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/5163aef3-a0d1-48dc-800d-b122e95dc4e9-20240608165002-dn5_4.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="12"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/43cce9d3-3c6c-4355-bb3f-a4e722868dd2-20240608164954-efepf.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="13"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/9f2d8c80-2d1e-4e20-bb7b-6a5f93716515-20240608164954-_x2l3.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="14"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/3f3a0e3b-01f1-481a-8b40-3f3d5bbe92a0-20240608164954-egael.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="15"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/2e408ebd-ce21-4bac-8b6b-40edcc3b9b6f-20240608164953-5ojm_.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="16"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/fa9faa6f-9244-4925-845d-d53f9e98198a-20240608165012-ktoqv.jpg");
        }
        #GALLERY337 .ladi-gallery .ladi-gallery-view-item[data-index="17"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/2d77265c-c799-41fd-9a4f-f319a67844ba-20240608164953-8qzxw.jpg");
        }
        #CHURE,
        #GALLERY338,
        #CODAU,
        #GALLERY339 {
            width: 401px;
            height: 552px;
        }
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/1ef587ae-78f6-40d2-a64c-6881ff9bd8d2-20240608165704-ywgmz.jpg");
        }
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/0a29f660-11fc-4c81-87d4-dc0e1cfa43a8-20240608165704-9upi4.jpg");
        }
        #GALLERY339 .ladi-gallery .ladi-gallery-view-item[data-index="3"] {
            background-image: url("https://w.ladicdn.com/s750x900/5c728619c417ab07e5194baa/54cc98a6-9603-4075-aded-fc73548aec8e-20240608165705-dafec.jpg");
        }
        #THIEPMOI {
            width: 397px;
            height: 629px;
        }
        #GROUP441 {
            width: 427.75px;
            height: 537.152px;
            top: 82.7px;
            left: -37.5px;
        }
        #IMAGE397,
        #IMAGE397>.ladi-image>.ladi-image-background,
        #IMAGE394,
        #IMAGE394>.ladi-image>.ladi-image-background {
            width: 381.5px;
            height: 537.152px;
        }
        #IMAGE397 {
            left: 46.25px;
        }
        #IMAGE397>.ladi-image>.ladi-image-background,
        #IMAGE394>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s700x850/5c728619c417ab07e5194baa/3-20240601020038-vnpyd.png");
        }
        #HEADLINE404,
        #HEADLINE405,
        #HEADLINE399,
        #HEADLINE400 {
            width: 306px;
        }
        #HEADLINE404 {
            top: 264.8px;
            left: 84px;
        }
        #HEADLINE404>.ladi-headline,
        #HEADLINE399>.ladi-headline {
            font-size: 30px;
        }
        #GROUP442 {
            width: 390px;
            height: 57px;
            top: 311.8px;
        }
        #HEADLINE405 {
            left: 84px;
        }
        #FORM343 {
            width: 390px;
            height: 40px;
            top: 7px;
        }
        #FORM_ITEM365,
        #FORM_ITEM364 {
            width: 305px;
            height: 36px;
        }
        #FORM_ITEM365 {
            top: 2px;
            left: 85px;
        }
        #HEADLINE406,
        #HEADLINE401 {
            width: 304px;
        }
        #HEADLINE406 {
            top: 38px;
            left: 85px;
        }
        #GROUP443,
        #GROUP444,
        #GROUP439,
        #GROUP438 {
            height: 70px;
        }
        #GROUP443 {
            top: 370.8px;
            left: 97px;
        }
        #PARAGRAPH421,
        #PARAGRAPH416 {
            left: 93px;
        }
        #PARAGRAPH421>.ladi-paragraph,
        #PARAGRAPH416>.ladi-paragraph {
            font-size: 35px;
        }
        #PARAGRAPH422,
        #PARAGRAPH417 {
            top: 53px;
        }
        #LINE347,
        #LINE348,
        #LINE345,
        #LINE346 {
            height: 35px;
        }
        #LINE347 {
            left: 161.5px;
        }
        #LINE348 {
            left: 99.5px;
        }
        #HEADLINE407 {
            top: 443.8px;
            left: 87.5px;
        }
        #HEADLINE408,
        #HEADLINE403 {
            width: 213px;
        }
        #HEADLINE408 {
            top: 501.8px;
            left: 129.5px;
        }
        #IMAGE398,
        #IMAGE396 {
            width: 167.466px;
            height: 167.298px;
        }
        #IMAGE398 {
            top: 57.9px;
            left: 152.268px;
        }
        #IMAGE398>.ladi-image>.ladi-image-background {
            width: 167.045px;
            height: 250.567px;
            top: -7px;
            left: 1px;
        }
        #BUTTON374,
        #BUTTON373 {
            top: 22.5px;
            left: 17px;
        }
        #BUTTON375,
        #BUTTON376 {
            top: 22.5px;
            left: 207px;
        }
        #GROUP440 {
            width: 426.75px;
            height: 537.152px;
            top: 82.7px;
            left: 8.5px;
        }
        #HEADLINE399 {
            top: 264.8px;
            left: 37.75px;
        }
        #GROUP437 {
            width: 389px;
            height: 57px;
            top: 311.8px;
            left: 37.75px;
        }
        #HEADLINE400 {
            left: 0px;
        }
        #FORM342 {
            width: 388px;
            height: 40px;
            top: 9px;
            left: 1px;
        }
        #BUTTON377,
        #BUTTON_TEXT377 {
            width: 27px;
        }
        #BUTTON377 {
            top: 0px;
            left: 361px;
        }
        #HEADLINE401 {
            top: 38px;
            left: 1px;
        }
        #HEADLINE401>.ladi-headline {
            font-size: 12px;
            line-height: 1.6;
        }
        #GROUP439 {
            top: 370.8px;
            left: 50.75px;
        }
        #PARAGRAPH415 {
            left: 38px;
        }
        #LINE345 {
            top: 16.5px;
            left: 161.5px;
        }
        #PARAGRAPH418 {
            top: 26.5px;
            left: 16px;
        }
        #PARAGRAPH419 {
            top: 26.5px;
            left: 171px;
        }
        #LINE346 {
            top: 17px;
        }
        #HEADLINE402 {
            top: 443.8px;
            left: 41.25px;
        }
        #HEADLINE403 {
            top: 500.8px;
            left: 83.251px;
        }
        #IMAGE396 {
            top: 57.9px;
            left: 106.018px;
        }
        #IMAGE396>.ladi-image>.ladi-image-background {
            width: 191.429px;
            height: 295.567px;
            top: -20px;
            left: -20px;
            background-image: url({{ asset('images/wedding/card.JPG') }});
        }
    }
</style>
<style id="style_lazyload" type="text/css">
    body.lazyload .ladi-overlay,
    body.lazyload .ladi-box,
    body.lazyload .ladi-button-background,
    body.lazyload .ladi-collection-item:before,
    body.lazyload .ladi-countdown-background,
    body.lazyload .ladi-form-item-background,
    body.lazyload .ladi-form-label-container .ladi-form-label-item.image,
    body.lazyload .ladi-frame-background,
    body.lazyload .ladi-gallery-view-item,
    body.lazyload .ladi-gallery-control-item,
    body.lazyload .ladi-headline,
    body.lazyload .ladi-image-background,
    body.lazyload .ladi-image-compare,
    body.lazyload .ladi-list-paragraph ul li:before,
    body.lazyload .ladi-section-background,
    body.lazyload .ladi-survey-option-background,
    body.lazyload .ladi-survey-option-image,
    body.lazyload .ladi-tabs-background,
    body.lazyload .ladi-video-background,
    body.lazyload .ladi-banner,
    body.lazyload .ladi-spin-lucky-screen,
    body.lazyload .ladi-spin-lucky-start {
        background-image: none !important;
    }
</style>

<style>
    /* Thiết lập giao diện cho nút tạm dừng và play */

    .tdk-music {
        position: fixed;
        z-index: 99999;
        left: 0;
        bottom: 0;
        width: 90px;
        height: 90px;
    }

    .tdk-music svg {
        fill: white;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        width: 40px;
        height: 40px;
    }

    .tdk-bg-player {
        width: 65px;
        height: 65px;
        top: 12px;
        left: 12px;
        position: absolute;
        box-shadow: 0 0 0 0 #c31d1d;
        background-color: rgba(121, 113, 113, 1.0);
        border-radius: 50%;
        border: 2px solid transparent;
        transition: all .5s;
        transform-origin: 50% 50%;
    }

    .tdk-player-text {
        color: white;
        white-space: nowrap;
        position: absolute;
        top: 25px;
        left: 21px;
        height: 40px;
        line-height: 40px;
        background-color: rgba(121, 113, 113, 1.0);
        padding: 0 10px 0 60px;
        border-radius: 30px;
    }

    .tdk-music .tdk-icon-pause {
        display: none;
    }

    .tdk-music.playing .tdk-bg-player {
        animation: zoom 1.3s infinite;
    }

    .tdk-music.playing .tdk-icon-play {
        display: none;
    }

    .tdk-music.playing .tdk-icon-pause {
        display: inline;
    }

    @keyframes zoom {
        0% {
            transform: scale(0.9);
        }
        70% {
            transform: scale(1);
            box-shadow: 0 0 0 15px transparent;
        }
        100% {
            transform: scale(0.9);
            box-shadow: 0 0 0 0 transparent;
        }
    }
</style>