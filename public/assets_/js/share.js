function share() {
    const url = window.location.href;
    const text = "share this car";

    if (navigator.share) {
        navigator.share({
            title: 'Share this car',
            text: text,
            url: url
        })
        .then(() => console.log('Succes'))
        .catch(error => console.log('Error:', error));
    } else {
        alert('Share not support .');
    }
}
