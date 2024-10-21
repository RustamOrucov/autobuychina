@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="custom-head-support-mobile"><span class="sc-lcIPJg lmhqbe header__nav-btn--back back-button"></span>
        <p>Support</p>
    </div>
    <div class="mobile-btn-q-content ">
        <button class="btn-mobile-question click">Popular questions</button> <button class="btn-mobile-question">Ads</button>
    </div>

    <div class="accordion one" id="accordionOne" style="display: block;">
        <div class="accordion__item">
            <div class="accordion__header" data-toggle="#faq1">Popular question ?</div>
            <div class="accordion__content" id="faq1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="accordion__item">
            <div class="accordion__header" data-toggle="#faq2">But I must explain to you how all this mistaken idea?</div>
            <div class="accordion__content" id="faq2">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beata</p>

            </div>
        </div>

        <div class="accordion__item">
            <div class="accordion__header" data-toggle="#faq3">At vero eos et accusamus et iusto odio?</div>
            <div class="accordion__content" id="faq3">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
                    and I will give you a complete account of the system, and expound the actual teachings of the great
                    explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                    pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure
                    rationally encounter consequences that are extremely painful</p>

            </div>
        </div>

    </div>

    <div class="accordion two" id="accordionTwo" style="display: none;">
        <div class="accordion__item">
            <div class="accordion__header" data-toggle="#faq1">Lorem ipsum dolor sit amet, consectetur adipiscing elit?
            </div>
            <div class="accordion__content" id="faq1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="accordion__item">
            <div class="accordion__header" data-toggle="#faq2">But I must explain to you how all this mistaken idea?</div>
            <div class="accordion__content" id="faq2">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beata</p>

            </div>
        </div>

        <div class="accordion__item">
            <div class="accordion__header" data-toggle="#faq3">At vero eos et accusamus et iusto odio?</div>
            <div class="accordion__content" id="faq3">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
                    and I will give you a complete account of the system, and expound the actual teachings of the great
                    explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                    pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure
                    rationally encounter consequences that are extremely painful</p>

            </div>
        </div>

    </div>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const togglers = document.querySelectorAll('[data-toggle]');

            togglers.forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    const selector = e.currentTarget.dataset.toggle
                    const block = document.querySelector(`${selector}`);
                    if (e.currentTarget.classList.contains('active')) {
                        block.style.maxHeight = '';
                    } else {
                        block.style.maxHeight = block.scrollHeight + 'px';
                    }

                    e.currentTarget.classList.toggle('active')
                })
            })
        })


        document.querySelector('.back-button').addEventListener('click', function() {
            window.history.back();
        });


        const popularQuestionsButton = document.querySelectorAll('.btn-mobile-question')[0];
        const adsButton = document.querySelectorAll('.btn-mobile-question')[1];

        const accordionOne = document.getElementById('accordionOne');
        const accordionTwo = document.getElementById('accordionTwo');

        popularQuestionsButton.addEventListener('click', function() {
            if (adsButton.classList.contains('click')) {
                adsButton.classList.remove('click');
            }

            popularQuestionsButton.classList.add('click');

            accordionOne.style.display = 'block';
            accordionTwo.style.display = 'none';
        });

        adsButton.addEventListener('click', function() {
            if (popularQuestionsButton.classList.contains('click')) {
                popularQuestionsButton.classList.remove('click');
            }

            adsButton.classList.add('click');

            accordionOne.style.display = 'none';
            accordionTwo.style.display = 'block';
        });
    </script>
@endsection
