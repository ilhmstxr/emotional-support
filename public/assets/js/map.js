const getCurrentPosition = () => {
    return new Promise((resolve, reject) => {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
                resolve();
            },
            (error) => {
                reject(error);
            },
            {
                enableHighAccuracy: true,
                // timeout: 5000,
            }
        );
    });
};

let map;

async function initMap() {
    const currentPosition = await getCurrentPosition();

    // console.log(latitude);
    // console.log(longitude);

    pos = {
        lat: latitude,
        lng: longitude,
    };

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: { lat: latitude, lng: longitude },
    });

    new google.maps.Marker({
        position: pos,
        map,
    });

    const geocoder = new google.maps.Geocoder();
    const infoWindow = new google.maps.InfoWindow();

    geocoder
        .geocode({
            location: pos,
        })
        .then((response) => {
            if (response.results[0]) {
                map.setZoom(15);

                const marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                });

                infoWindow.setContent(response.results[0].formatted_address);
                infoWindow.open(map, marker);
            } else {
                infoWindow.setContent(pos);
                infoWindow.open(map, marker);
            }
        });
}

window.initMap = initMap;
