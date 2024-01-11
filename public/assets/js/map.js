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

const initMap = async () => {
    await getCurrentPosition();

    // position in coordinate
    const pos = {
        lat: latitude,
        lng: longitude,
    };

    // get location
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: { lat: latitude, lng: longitude },
    });

    // marker
    new google.maps.Marker({
        position: pos,
        map,
    });

    // fetching api's
    const geocoder = new google.maps.Geocoder();
    const infoWindow = new google.maps.InfoWindow();

    // to find the address
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

                let address = response.results[0].formatted_address;

                // putting the address in location
                document.getElementById("yourLocation").value = address;

                infoWindow.setContent(address);
                infoWindow.open(map, marker);
            } else {
                infoWindow.setContent(pos);
                infoWindow.open(map, marker);
            }
        });
};



window.initMap = initMap;
