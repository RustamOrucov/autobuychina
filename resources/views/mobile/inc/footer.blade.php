<footer class="footer" >
    <div class="footer__blk">
        <div class="footer__app-promotion"><a class="footer__app-store-btn js-footer-app-link"
                data-stat="turboaz-app-footer-btn"
                href="#"><img alt=""
                    src="{{ asset('storage/' . $logoImages->m_logo) }}"></a>
            <div class="footer__app-promotion-info"><a data-stat="turboaz-app-footer-btn"
                    class="footer__app-promotion-link js-footer-app-link"
                    href="#">{{sitekey('detail_car','title')}}</a><span>{{sitekey('detail_car_three','name')}}</span></div>
        </div>
    </div>
    <div class="footer__blk"><a target="_blank" class="footer__link footer__link--pages"
            href="#">{{sitekey('list_car_eight','name')}}</a><a target="_blank" class="footer__link footer__link--pages"
            href="#">{{sitekey('list_car_eight','desc')}}</a><a target="_blank" class="footer__link footer__link--pages" href="#">{{sitekey('list_car','title')}}</a></div>
    <div class="footer__blk">
        <div class="footer__title">{{sitekey('footer_mobile','title')}}</div>
        <a class="footer__link footer__link--contact" href="tel: +994125057755">(055) 555-55-55</a>
        <p class="footer__opening-hours">{{sitekey('footer_mobile','text')}} — {{sitekey('footer_mobile','desc')}}: 09:00-19:00 | {{sitekey('footer_mobile','name')}}: 09:00-13:00</p><a
            class="footer__link footer__link--social" href="mailto:mail.az"><i
                class="footer__link--social_icon footer__link--social_icon--email"></i></a><a target="_blank"
            class="footer__link footer__link--social" href="#"><i
                class="footer__link--social_icon footer__link--social_icon--facebook"></i></a><a target="_blank"
            class="footer__link footer__link--social" href="#"><i
                class="footer__link--social_icon footer__link--social_icon--instagram"></i></a>
    </div>
    <div class="footer__blk">
        <div class="footer__info">{{sitekey('footer_mobile_1','title')}}</div>
        <div class="footer__copyright">© {{sitekey('footer_mobile_1','text')}}</div>
    </div>
</footer>
