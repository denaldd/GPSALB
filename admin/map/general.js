    var customLabel = {
        restaurant: {
         // label: 'R'
        },
        bar: {
          //label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(41.2341696,20.3582332),
          zoom: 8,
          mapTypeId: 'roadmap',
          gestureHandling: 'greedy'
        });
        var infoWindow = new google.maps.InfoWindow;

          downloadUrl('create_xml.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var url = markerElem.getAttribute('url');
              var color = markerElem.getAttribute('color');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));


              var iconBase = 'icons/';

              var arr = ['bar', 'bus', 'caution', 'electronics', 'fishing', 'gas', 'hospitals', 'movies',
                         'parkinglot', 'pharmacy-us', 'police', 'postoffice-us', 'restaurant', 'salon', 
                         'sportvenue', 'homegardenbusiness'
                        ];

              var icones = 'http://maps.google.com/mapfiles/ms/icons/'+type+'.png'; 

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                url: url,
                icon: icones,
                label: icon.label
              });

              google.maps.event.addListener(map, 'zoom_changed', function() {
              var zoom = map.getZoom();
                if(zoom >= 11) {
                    marker.setVisible(true);
                }
                else {
                  marker.setVisible(false);
                }
                });

              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
                window.location.href = marker.url;
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}