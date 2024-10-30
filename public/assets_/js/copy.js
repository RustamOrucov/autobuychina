


    // modal show and close function
    function toggleModal(displayState) {
        document.getElementById('report').style.display = displayState;
    }

    const reportButton = document.querySelector('.js-product-report-btn');

    if (reportButton) {
        reportButton.addEventListener('click', function(event) {
            event.preventDefault();
            toggleModal('block');
        });
    } else {
    }


    const closeModalButton = document.querySelector('.close-reveal-modal');

    if (closeModalButton) {
        closeModalButton.addEventListener('click', function(event) {
            event.preventDefault();
            toggleModal('none');
        });
    } else {
    }

    document.addEventListener('click', function(event) {
        const modal = document.getElementById('report');
        if (modal.style.display === 'block' && !modal.contains(event.target) && !event.target.matches(
                '.js-product-report-btn')) {
            toggleModal('none');
        }
    });

