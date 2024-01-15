const apiKey = "AIzaSyB7GbCxzGo3Db3nQrvUL8B0o9L2GcHZpBI";

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

    // console.log(pos);

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
                console.log(address);

                infoWindow.setContent(address);
                infoWindow.open(map, marker);
            } else {
                infoWindow.setContent(pos);
                infoWindow.open(map, marker);
            }
        });
};

// const find = async () => {
//     try {
//         await getCurrentPosition();

//         const pos = {
//             lat: latitude,
//             lng: longitude,
//         };

//         const response = await fetch(
//             `https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=${apiKey}&location=${pos.lat},${pos.lng}&radius=500&type=user_defined_place_type`,
//             { mode: "no-cors" }
//         );
//         const data = await response.json();

//         const nearbyUsers = data.results.map((place) => ({
//             name: place.name,
//             address: place.vicinity,
//             latitude: place.geometry.location.lat,
//             longitude: place.geometry.location.lng,
//         }));

//         // console.log("done");
//         console.log(nearbyUsers);
//         console.log("done");
//     } catch (error) {
//         console.log(error);
//     }
// };

// find();
window.initMap = initMap;
