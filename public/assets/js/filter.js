document.addEventListener("DOMContentLoaded", function () {
    // Slide-down ve slide-up işlevselliği
    const slideDownButton = document.querySelector(".js-main-search-slide-down");
    const slideUpButton = document.querySelector(".js-main-search-slide-up");
    const searchBlock = document.querySelector(".js-main-search-slide-blk");

    if (slideDownButton && slideUpButton && searchBlock) {
        slideDownButton.addEventListener("click", function () {
            slideDownButton.classList.add("is-hidden");
            slideUpButton.classList.remove("is-hidden");
            searchBlock.classList.add("is-open");
        });

        slideUpButton.addEventListener("click", function () {
            slideUpButton.classList.add("is-hidden");
            slideDownButton.classList.remove("is-hidden");
            searchBlock.classList.remove("is-open");
        });
    }

    // Filter dropdown işlevselliği
    document.querySelectorAll('.tz-dropdown').forEach((dropdown) => {
        const selected = dropdown.querySelector('.tz-dropdown__selected');
        const label = dropdown.querySelector('.tz-dropdown__label');
        const content = dropdown.querySelector('.tz-dropdown__content');
        const searchInput = dropdown.querySelector('.tz-dropdown__search');
        const dropdownOptions = dropdown.querySelectorAll('.tz-dropdown__option');
        const notFoundOption = dropdown.querySelector('.tz-dropdown__option--not-found');
        const resetOption = dropdown.querySelector('.tz-dropdown__option--reset');
        const hiddenInput = dropdown.parentElement.querySelector('input[type="hidden"]');
        const dropdownValues = dropdown.querySelector('.tz-dropdown__values');

        if (!selected || !label || !content || !searchInput || !notFoundOption || !resetOption || !dropdownValues) {
            console.warn('Dropdown elements are missing.');
            return;
        }

        notFoundOption.classList.add('is-hidden');

        selected.addEventListener('click', (event) => {
            event.stopPropagation();
            toggleDropdown();
        });

        searchInput.addEventListener('input', (event) => {
            const searchTerm = event.target.value.toLowerCase();
            let hasVisibleOption = false;
            dropdownOptions.forEach((option) => {
                const optionLabel = option.querySelector('.tz-dropdown__option-label .text');
                if (optionLabel && !option.classList.contains('tz-dropdown__option--not-found')) {
                    const optionText = optionLabel.textContent.toLowerCase();
                    if (optionText.includes(searchTerm)) {
                        option.classList.remove('is-hidden');
                        hasVisibleOption = true;
                    } else {
                        option.classList.add('is-hidden');
                    }
                }
            });
            notFoundOption.classList.toggle('is-hidden', hasVisibleOption);
        });

        let selectedCities = [];

        dropdownOptions.forEach((option) => {
            if (!option.classList.contains('tz-dropdown__option--not-found') && !option.classList.contains('tz-dropdown__option--reset')) {
                const optionLabel = option.querySelector('.tz-dropdown__option-label .text');
                const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                if (optionLabel && checkbox) {
                    option.addEventListener('click', (event) => {
                        event.stopPropagation();

                        const selectedText = optionLabel.textContent;
                        const selectedValue = option.getAttribute('data-val');

                        if (checkbox.checked) {
                            checkbox.checked = false;
                            selectedCities = selectedCities.filter(city => city !== selectedText);
                        } else {
                            checkbox.checked = true;
                            if (!selectedCities.includes(selectedText)) {
                                selectedCities.push(selectedText);
                            }
                        }

                        label.textContent = selectedCities.length > 0 ? selectedCities.join(', ') : 'Seçilməyib';
                        if (hiddenInput) {
                            hiddenInput.value = selectedCities.join(','); // Update hidden input value
                        }
                    });
                } else if (!checkbox) {
                    option.addEventListener('click', () => {
                        const selectedText = optionLabel.textContent;
                        label.textContent = selectedText;
                        if (hiddenInput) {
                            hiddenInput.value = option.getAttribute('data-val'); // Update hidden input value for single select
                        }
                        closeAllDropdowns();
                    });
                }
            }
        });

        resetOption.addEventListener('click', (event) => {
            event.stopPropagation();
            label.textContent = dropdown.getAttribute('data-id') === 'q_make' ? "Seçilməyib" : "Seçilməyib";
            selectedCities = [];
            dropdownOptions.forEach((option) => {
                const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                if (checkbox) checkbox.checked = false;
            });
            if (hiddenInput) {
                hiddenInput.value = ''; // Reset hidden input value
            }
            closeAllDropdowns();
        });

        const closeDropdownButton = dropdownValues.querySelector('.tz-dropdown__close-button');
        if (closeDropdownButton) {
            closeDropdownButton.addEventListener('click', (event) => {
                event.stopPropagation();
                toggleDropdown();
            });
        }

        document.addEventListener('click', () => {
            closeAllDropdowns();
        });

        function toggleDropdown() {
            const isOpen = dropdown.classList.contains('is-open');
            closeAllDropdowns();
            if (!isOpen) {
                dropdown.classList.add('is-open');
                selected.classList.add('is-open');
                label.classList.add('is-hidden');
                content.classList.add('is-open');
                searchInput.classList.remove('is-hidden');
                searchInput.focus();
            }
        }

        function closeAllDropdowns() {
            document.querySelectorAll('.tz-dropdown.is-open').forEach((openDropdown) => {
                openDropdown.classList.remove('is-open');
                const selectedElement = openDropdown.querySelector('.tz-dropdown__selected');
                if (selectedElement) selectedElement.classList.remove('is-open');
                const labelElement = openDropdown.querySelector('.tz-dropdown__label');
                if (labelElement) labelElement.classList.remove('is-hidden');
                const contentElement = openDropdown.querySelector('.tz-dropdown__content');
                if (contentElement) contentElement.classList.remove('is-open');
                const searchInputElement = openDropdown.querySelector('.tz-dropdown__search');
                if (searchInputElement) {
                    searchInputElement.classList.add('is-hidden');
                    searchInputElement.value = ''; // Reset search input value
                }
                openDropdown.querySelectorAll('.tz-dropdown__option').forEach((option) => {
                    option.classList.remove('is-hidden');
                });
                const notFoundOptionElement = openDropdown.querySelector('.tz-dropdown__option--not-found');
                if (notFoundOptionElement) {
                    notFoundOptionElement.classList.add('is-hidden');
                }
            });
        }
    });
});
