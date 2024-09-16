document.addEventListener("DOMContentLoaded", function () {
    const slideDownButton = document.querySelector(".js-main-search-slide-down");
    const slideUpButton = document.querySelector(".js-main-search-slide-up");
    const searchBlock = document.querySelector(".js-main-search-slide-blk");

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




  });


  // filter dropdown function start
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.tz-dropdown').forEach((dropdown) => {
        const selected = dropdown.querySelector('.tz-dropdown__selected');
        const label = dropdown.querySelector('.tz-dropdown__label');
        const content = dropdown.querySelector('.tz-dropdown__content');
        const searchInput = dropdown.querySelector('.tz-dropdown__search');
        const dropdownOptions = dropdown.querySelectorAll('.tz-dropdown__option');
        const notFoundOption = dropdown.querySelector('.tz-dropdown__option--not-found');
        const resetOption = dropdown.querySelector('.tz-dropdown__option--reset');
        const hiddenInput = dropdown.parentElement.querySelector('input[type="hidden"]');

        if (!selected || !label || !content || !searchInput || !notFoundOption || !resetOption) {
            console.warn( );
            return;
        }

        notFoundOption.classList.add('is-hidden');

        selected.addEventListener('click', (event) => {
            event.stopPropagation();
            closeAllDropdowns();
            dropdown.classList.toggle('is-open');
            selected.classList.toggle('is-open');
            label.classList.toggle('is-hidden');
            content.classList.toggle('is-open');
            searchInput.classList.toggle('is-hidden');
            searchInput.focus();
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
                        event.stopPropagation(); // Prevent closing the dropdown

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
                        hiddenInput.value = selectedCities.join(','); // Update hidden input value
                    });
                } else if (!checkbox) {  // Single select handling
                    option.addEventListener('click', () => {
                        const selectedText = optionLabel.textContent;
                        label.textContent = selectedText;
                        hiddenInput.value = option.getAttribute('data-val'); // Update hidden input value for single select
                        closeAllDropdowns();
                    });
                }
            }
        });

        resetOption.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent closing the dropdown
            label.textContent = dropdown.getAttribute('data-id') === 'q_make' ? "Seçilməyib" : "Seçilməyib";
            selectedCities = [];
            dropdownOptions.forEach((option) => {
                const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                if (checkbox) checkbox.checked = false;
            });
            hiddenInput.value = ''; // Reset hidden input value
            closeAllDropdowns();
        });

        document.addEventListener('click', () => {
            closeAllDropdowns();
        });

        function closeAllDropdowns() {
            document.querySelectorAll('.tz-dropdown.is-open').forEach((openDropdown) => {
                openDropdown.classList.remove('is-open');
                openDropdown.querySelector('.tz-dropdown__selected').classList.remove('is-open');
                openDropdown.querySelector('.tz-dropdown__label').classList.remove('is-hidden');
                openDropdown.querySelector('.tz-dropdown__content').classList.remove('is-open');
                openDropdown.querySelector('.tz-dropdown__search').classList.add('is-hidden');
                openDropdown.querySelector('.tz-dropdown__search').value = '';
                openDropdown.querySelectorAll('.tz-dropdown__option').forEach((option) => {
                    option.classList.remove('is-hidden');
                });
                const notFoundOption = openDropdown.querySelector('.tz-dropdown__option--not-found');
                if (notFoundOption) {
                    notFoundOption.classList.add('is-hidden');
                }
            });
        }
    });
});
