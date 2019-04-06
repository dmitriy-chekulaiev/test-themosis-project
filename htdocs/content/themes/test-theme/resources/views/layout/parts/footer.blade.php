<footer id="footer-container" class="site-footer footer" role="contentinfo">
    <div class="footer__container container">
        <div class="footer__row footer__bar row "><a class="footer__brand brand" href="{{esc_url(home_url('/'))}}">
                <img class="brand__img"
                     src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2018/09/NephCure-logo-large.png"
                     alt="Kidney Health Gateway"> </a>
            <nav class="footer__nav">
                @if (has_nav_menu('footer_menu'))
                    @php
                        wp_nav_menu(['theme_location' => 'footer_menu']);
                    @endphp
                @endif
            </nav>
        </div>
        <div class="footer__row row ">
            <div class="footer__text"><p>Support for KidneyHealthGateway.com provided by:</p></div>
            <div class="footer__partners">
                <ul>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Retrophin_Platinum.png"
                                    alt=""> </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Pfizer.png" alt="">
                        </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Mallinckrodt.png"
                                    alt=""> </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Reata.png" alt="">
                        </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Goldfinch.png"
                                    alt=""> </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Variant.png" alt="">
                        </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/Achillion-e1550592487352.png"
                                    alt=""> </a></li>
                    <li><a target="_blank" href=""> <img
                                    src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2019/02/chemocentryx-e1550592494120.png"
                                    alt=""> </a></li>
                </ul>
            </div>
            <div class="copyright"><p> © Copyright 2019 NephCure Kidney International, a 501(c)(3) non-profit EIN
                    38-3569922.<br> All rights reserved worldwide. NephCure Kidney International, and the logo, are
                    federally registered trademarks of NephCure Kidney International.</p></div>
        </div>
    </div>
</footer>