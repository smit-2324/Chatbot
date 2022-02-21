<!DOCTYPE html>
<html>
  <head>
    <title>Mapmyindia Maps</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <!-- Integrate India's best interactive maps from MapmyIndia into your browser application by simply including MapmyIndia's interactive map API in your script source as shown in next line -->
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/7969a7a2931fe7b479d4e81e485f58f4/map_load?v=1.5"></script>
    <style>
      html,
      body,
      #map {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <!-- Define a Div object in the body tag of the HTML where you want the MapmyIndia Map to show up -->
    <div id="map"></div>
    <script>


      /* Initialize a MapmyIndia Map by simply calling new MapmyIndia.Map() and passing it, at the minimum the div object in which you want the map populated. All others parameters are optional.

        Once you initialize a MapmyIndia Map, you can access all leaflet functionality through the global Leaflet singlet (class/object), "L" and by passing it the "map" variable we initialize the MapmyIndia Map into.
         MapmyIndia interactive map API is based on Leaflet, a popular and powerful open source interactive mapping API
         The interactive map provides out of the box leaflet controls of search,zoom in/out, map layers(hybrid,road) and current location
         use flags such as "zoomControl: true" or "search: true" to toggle visibility of the leaflet controls of zoomControl and Search respectively.
         The below code line initializes the map with all leaflet controls visible. change the respective flags to false to hide them. */
    //   var lat = 23.2156;
    //   var lon = 72.6369;

    //   var lat1 = 23.2176;
    //   var lon1 = 72.6399;

    var lat = sessionStorage.getItem("lat");
    var lon = sessionStorage.getItem("log");
    var lat1 = sessionStorage.getItem("lat1");
    var lon1 = sessionStorage.getItem("log1");
      console.log(lat,lon,lat1,lon1);
      var radius = 100;
      var currentDiameter;
      //var map=new MapmyIndia.Map("map",{ center:[28.61, 77.23], zoomControl: true, hybrid:true, search:true, location:true}); /*map initialized*/
      var centre = new L.LatLng(lat, lon);
      var centre1 = new L.LatLng(lat1, lon1);
      map = new MapmyIndia.Map("map", {
        center: centre,
        zoomControl: true,
        hybrid: true,
      });
      //Note: Consider editing the CSS style, to reposition these controls. You can do so by rewriting "..map-control css"

      // for example to add a marker to the map, simply add the line of code below. More documentation on Leaflet and plugins are available at leafletjs.org
      //L.marker([lat, lon]).addTo(map);

      var icon = L.icon({
        iconUrl: "images/Marker.png",
        iconRetinaUrl: "images/Marker.png",
        iconSize: [30, 30],
      });
      marker = L.marker(centre, { icon: icon, draggable: true }).addTo(map);
      marker1 = L.marker(centre1, { icon: icon, draggable: true }).addTo(map);


      if (currentDiameter) map.removeLayer(currentDiameter);

      if (lat != "" && lon != "" && radius != "") {
        if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
          if (marker) marker.setLatLng([lat, lon]);
          currentDiameter = L.circle([lat, lon], {
            color: "green",
            fillColor: "#FFC0CB",
            fillOpacity: 0.5,
            radius: radius,
          });
          currentDiameter.addTo(map);
          map.fitBounds(currentDiameter.getBounds());

          if (marker1) marker1.setLatLng([lat1, lon1]);
          currentDiameter = L.circle([lat1, lon1], {
            color: "red",
            fillColor: "#FFC0CB",
            fillOpacity: 0.5,
            radius: radius,
          });
          currentDiameter.addTo(map);
          map.fitBounds(currentDiameter.getBounds());
        }
      } else {
        document.getElementById("result").innerHTML = "Insufficient parameters";
      }

      // MapmyIndia may extend and enhance functionality for interactive mapping in future, which will be clearly documented in the MapmyIndia API documentation section, and which will be available through the MapmyIndia.Map class and MapmyIndia.* set of classes generally....
      function isNumberKeyDecimals(evt) {
        /*check for input boxes*/
        var charCode = evt.which ? evt.which : event.keyCode;
        if (charCode > 31 && charCode != 46 && (charCode < 48 || charCode > 57))
          return false;
        return true;
      }
      function checkValidLatlong(lat, lon) {
        /*check for input as valid lat lon*/
        if (lat >= 180 || lat <= -180 || lon >= 180 || lon <= -180) {
          document.getElementById("result").innerHTML =
            "Invalid Lat lon values";
          return false;
        } else {
          return true;
        }
      }
    var step = 3;
    getResponse(step);
    </script>
    <script src="static/scripts/chat.js"></script>
  </body>
</html>
