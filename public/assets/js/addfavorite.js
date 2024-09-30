function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function getFavorites() {
    let favorites = getCookie('favorites');
    return favorites ? JSON.parse(favorites) : [];
}

function addToFavorites(carId) {
    let favorites = getFavorites();

    if (!favorites.includes(carId)) {
        favorites.push(carId);
        setCookie('favorites', JSON.stringify(favorites), 30);
    }

    toggleBookmarkDisplay(carId, true);
}

function removeFromFavorites(carId) {
    let favorites = getFavorites();

    favorites = favorites.filter(id => id != carId);
    setCookie('favorites', JSON.stringify(favorites), 30);

    toggleBookmarkDisplay(carId, false);
}

function toggleBookmarkDisplay(carId, isFavorited) {
    document.querySelectorAll(`.js-bookmark-toggle[data-id="${carId}"]`).forEach(function(button) {
        if (isFavorited) {
            if (button.classList.contains('js-bookmark-item')) {
                button.style.display = 'none';
            } else if (button.classList.contains('js-unbookmark-item')) {
                button.style.display = 'inline-block';
            }
        } else {
            if (button.classList.contains('js-bookmark-item')) {
                button.style.display = 'inline-block';
            } else if (button.classList.contains('js-unbookmark-item')) {
                button.style.display = 'none';
            }
        }
    });

    document.querySelectorAll(`.product-bookmarks a[data-id="${carId}"]`).forEach(function(button) {
        if (isFavorited) {
            if (button.classList.contains('js-bookmark-item')) {
                button.style.display = 'none';
            } else if (button.classList.contains('js-unbookmark-item')) {
                button.style.display = 'inline-block';
            }
        } else {
            if (button.classList.contains('js-bookmark-item')) {
                button.style.display = 'inline-block';
            } else if (button.classList.contains('js-unbookmark-item')) {
                button.style.display = 'none';
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const favorites = getFavorites();

    document.querySelectorAll('.js-bookmark-toggle, .product-bookmarks a').forEach(function(button) {
        const carId = button.getAttribute('data-id');

        if (favorites.includes(carId)) {
            toggleBookmarkDisplay(carId, true);
        } else {
            toggleBookmarkDisplay(carId, false);
        }

        button.addEventListener('click', function(e) {
            e.preventDefault();

            if (button.classList.contains('js-bookmark-item')) {
                addToFavorites(carId);
            } else if (button.classList.contains('js-unbookmark-item')) {
                removeFromFavorites(carId);
            }
        });
    });
});


function bindBookmarkEvents() {
    const favorites = getFavorites();

    document.querySelectorAll('.js-bookmark-toggle, .product-bookmarks a').forEach(function(button) {
        const carId = button.getAttribute('data-id');

        if (favorites.includes(carId)) {
            toggleBookmarkDisplay(carId, true);
        } else {
            toggleBookmarkDisplay(carId, false);
        }

        button.addEventListener('click', function(e) {
            e.preventDefault();

            if (button.classList.contains('js-bookmark-item')) {
                addToFavorites(carId);
            } else if (button.classList.contains('js-unbookmark-item')) {
                removeFromFavorites(carId);
            }
        });
    });
}
