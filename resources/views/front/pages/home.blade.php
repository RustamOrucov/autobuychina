@extends('front.layout.layout')

@section('front_content')


    <div class="home">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


{{-- @dd($selectfilters['q']['regions']) --}}


        {{-- filter form start --}}
        @include('front.inc.filter')

        {{-- filter form end --}}

        <div class="page-content page-content--grey">
            <div class="products-container index-products-container">
                <section>
                    <div class="section-title section-title--grey">
                        <div class="tz-container tz-d-flex tz-align-center tz-justify-between">
                            <p class="section-title_name">Announcements</p>
                            <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                                <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                                <div id="ad_ph_2" style="display:none;"></div>
                            </div>
                        </div>
                    </div>


                    <div class="tz-container">
                        <div class="products products--featured js-import-container" id="car-list">

                            @foreach ($cars as $car)
                                <div class="products-i vipped featured" data-id="{{ $car->id }}">
                                    <a href="" class="products-i__link"></a>
                                    <div class="products-i__top">
                                        <img width='220' height='170'
                                            src="{{ asset('storage/' . $car->car_image) }}" loading="lazy"
                                            alt="{{ $car->ModelType->name }}">
                                        <div class="products-i__info"></div>
                                    </div>
                                    <div class="products-i__bottom">
                                        <div class="products-i__price products-i__bottom-text">
                                            <div class="product-price">{{ $car->price }}
                                                <span>{{ $car->Ro->name }}</span>
                                            </div>
                                        </div>
                                        <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}
                                            {{ $car->ModelType->name }}</div>
                                        <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                                            {{ $car->engine_v }} L, {{ $car->odometer_km }} km</div>
                                        <div class="products-i__datetime">{{ $car->region->name ?? '' }} ,
                                            {{ $car->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="loading" style="display: none;"><img src="{{ asset('assets/img/loading.gif') }}"
                                alt="Loading..." style="background: transparent;"></div>
                        <button id="load-more"></button>
                    </div>

                </section>
            </div>
        </div>
    </div>


    {{-- <script>
        // infiniti scroll function start

        let page = 1;
        const loadingIndicator = document.querySelector('.loading');

        window.addEventListener('scroll', () => {
            const nearBottom = window.innerHeight + window.scrollY >= document.body.offsetHeight - 100;
            if (nearBottom) {
                loadMoreCars();
            }
        });

        function loadMoreCars() {
            loadingIndicator.style.display = 'block';
            page++;
            fetch(`/cars?page=${page}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text(); // İlk olarak yanıtı metin olarak al
                })
                .then(text => {
                    console.log('Raw response:', text); // Yanıtın tam olarak ne olduğunu görmek için konsola yazdır
                    try {
                        return JSON.parse(text); // JSON formatına çevirmeyi dene
                    } catch (error) {
                        throw new Error('Invalid JSON format');
                    }
                })
                .then(data => {
                    const carList = document.getElementById('car-list');

                    data.data.forEach(car => {
                        const carItem = document.createElement('div');
                        carItem.className = 'products-i vipped featured';
                        carItem.setAttribute('data-id', car.id);
                        carItem.innerHTML = `
                <a href="" class="products-i__link"></a>
                <div class="products-i__top">
                    <img src="{{ asset('storage/') }}/${car.car_image}" loading="lazy" alt="${car.ModelType.name}">
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">${car.price} <span>${car.Ro.name}</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">${car.carModel.name} ${car.ModelType.name}</div>
                    <div class="products-i__attributes products-i__bottom-text">${car.year}, ${car.engine_v} L, ${car.odometer_km} km</div>
                    <div class="products-i__datetime">${car.region.name}, ${new Date(car.created_at).toLocaleString()}</div>
                </div>
            `;
                        carList.appendChild(carItem);
                    });

                    loadingIndicator.style.display = 'none';
                    if (page >= data.last_page) {
                        window.removeEventListener('scroll', loadMoreCars);
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error.message);
                    loadingIndicator.style.display = 'none';
                });


        }

        //   infiniti scroll function end
    </script> --}}

<script>
document.addEventListener("DOMContentLoaded", function () {
    function initializeDropdown(dropdown) {
        const hiddenInput = dropdown.parentElement.querySelector('input[type="hidden"]');
        const dropdownOptions = dropdown.querySelectorAll('.tz-dropdown__option');
        const dropdownLabel = dropdown.querySelector('.tz-dropdown__label');
        const isMultiple = dropdown.getAttribute('data-multiple') === "true";

        let selectedItems = [];

        // Load previous selections from the hidden input
        if (hiddenInput && hiddenInput.value) {
            selectedItems = hiddenInput.value.split(',').filter(Boolean);
            if (!isMultiple) {
                const selectedText = selectedItems[0];
                const selectedBrand = Array.from(dropdownOptions).find(option => option.getAttribute('data-val') === selectedText);
                dropdownLabel.textContent = selectedBrand ? selectedBrand.querySelector('.tz-dropdown__option-label .text').textContent : 'Marka';
            } else {
                const selectedNames = selectedItems.map(id => {
                    const selectedRegion = Array.from(dropdownOptions).find(option => option.getAttribute('data-val') === id);
                    return selectedRegion ? selectedRegion.querySelector('.tz-dropdown__option-label .text').textContent : '';
                }).filter(Boolean);
                dropdownLabel.textContent = selectedNames.join(', ') || 'City';

                dropdownOptions.forEach(option => {
                    const optionValue = option.getAttribute('data-val');
                    if (selectedItems.includes(optionValue)) {
                        option.classList.add('is-selected');
                        const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                        if (checkbox) checkbox.checked = true;
                    }
                });
            }
        }

        // Handle option clicks
        dropdownOptions.forEach(option => {
            const selectedValue = option.getAttribute('data-val');
            const optionLabel = option.querySelector('.tz-dropdown__option-label .text');

            option.addEventListener('click', (event) => {
                event.stopPropagation();

                if (isMultiple) {
                    // Handle multiple selections
                    const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                    if (checkbox.checked) {
                        checkbox.checked = false;
                        option.classList.remove('is-selected');
                        selectedItems = selectedItems.filter(item => item !== selectedValue);
                    } else {
                        checkbox.checked = true;
                        option.classList.add('is-selected');
                        selectedItems.push(selectedValue);
                    }
                    const selectedNames = selectedItems.map(id => {
                        const selectedRegion = Array.from(dropdownOptions).find(opt => opt.getAttribute('data-val') === id);
                        return selectedRegion ? selectedRegion.querySelector('.tz-dropdown__option-label .text').textContent : '';
                    }).filter(Boolean);
                    dropdownLabel.textContent = selectedNames.join(', ') || 'City';
                } else {
                    // Handle single selection
                    dropdownOptions.forEach(opt => {
                        const cb = opt.querySelector('.tz-dropdown__option-checkbox');
                        if (cb) cb.checked = false;
                        opt.classList.remove('is-selected');
                    });
                    option.classList.add('is-selected');
                    dropdownLabel.textContent = optionLabel.textContent;
                    selectedItems = [selectedValue];
                }

                // Update the hidden input
                hiddenInput.value = selectedItems.join(',');
            });
        });
    }

    // Initialize both dropdowns
    document.querySelectorAll('.tz-dropdown').forEach(dropdown => {
        initializeDropdown(dropdown);
    });
});

</script>

@endsection
