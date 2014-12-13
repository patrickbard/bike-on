jQuery(document).ready(function($) {

    /* ======= Scrollspy ======= */
    $('body').scrollspy({ target: '#header', offset: 400});
    
    /* ======= Fixed header when scrolled ======= */
    
    // $(window).bind('scroll', function() {
    //      if ($(window).scrollTop() > 50) {
    //          $('#header').addClass('navbar-fixed-top');
    //      }
    //      else {
    //          $('#header').removeClass('navbar-fixed-top');
    //      }
    // });
   
    /* ======= ScrollTo ======= */
    $('a.scrollto').on('click', function(e){
        
        //store hash
        var target = this.hash;
                
        e.preventDefault();
        
		$('body').scrollTo(target, 800, {offset: -70, 'axis':'y', easing:'easeOutQuad'});
        //Collapse mobile menu after clicking
		if ($('.navbar-collapse').hasClass('in')){
			$('.navbar-collapse').removeClass('in').addClass('collapse');
		}
		
	});

    analisaRotas = function(rotas)
    {
        for (var i = rotas.length - 1; i >= 0; i--) {
            null;
        };
    }

    setMarker = function(map, nome,lat, lon)
    {
        var myLatlng = new google.maps.LatLng(lat,lon);
        
        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: nome
                        });

        return marker;
    }

    getBikePoa = function()
    {
          var listBike = new Array();
            var data = {
                resource_id: 'b64586af-cd7c-47c3-9b92-7b99875e1c08',
                limit: 100,
            };
             
            $.ajax({
                url: 'http://datapoa.com.br/api/action/datastore_search',
                data: data,
                dataType: 'jsonp',
                async: false,
                success: function(data) {
                    data.result.records.forEach(function (value, index, ar) {
                        
                        var myLatlng = new google.maps.LatLng(value.LATITUDE, value.LONGITUDE);

                        var image = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gwNCAoKx1OyDwAAA5VJREFUSMfdlU9oXUUUxn9nZu59eYmEvD6TRdBFAyIqAYvFqguRSMFaC+JCtFQD7gougiAiCrYS8E/WiiASjApSBWsXUtQ2mI2bKtjaqCgYoUlsmiYhYM29d2aOi/vy8ue9LITiwoHDnXtn7nfm+843M/BfteXRnuuGtTRaa/bdekcwnVdf7ZnwUYaiGFVAUJCdYNYHFFQARQBH/HLXy8tPbp/F4iu1RwrklDorNhWsE4yVnfE1lOBYgkIsFF9ExEcq6NCuY8uTWxgUXpKYGpJEqFQNLhXEmLYMzMCjuL0vQqVOnJ2kOHMUn2VwDXyAogg3NOeud2IAQXCpwaUG6wzWgJVtYSyV+45ju/uxlQrJwAHSwWES40kSAwihEG2pgQbFqGAoQ+IO4hiBjvrWT7XbEFWMCKIQg9KGgSkljQJB0EhrhIiaLnTu2y0J/IVxkEpZbBV00+KaDIhAaDxje9OYvrtwB94jTn+E/vIZ0jdI/Olj9Mo0RIOEuIGxnQFRN8BDg8l6BEXSOu7hcaSzF7t3BOkZwJ95gTh/HkLJmtgw1qYEG/tAQaOgoYymxxGk0kNyeBKp1vDn3kKXZ0j2j6FLM/jzE2AcGmj+q+0SNKkFwAfsHY+DTRCTEldmkGqN8PNJ/NnjoIpevoj078EOHgEM4cInELIWid1mm9oAFAXJkU/xX4zAXwsQA+6hMbLx/ejVX0GqkHbiHjhGfuIw+DVIOnEPvkb2+fNoDKXcLTVoaOf2DFOcGkFXF1A1qCT4b8awtx5Cs7/RCG7fs2QfPIbmOaoWzdfw301gbr4XirBFItPiIgRdnodoyvcAujKPuWkf5AGCQVcvg48NAwBBiAu/YXffD96XBW/ZaFGIUVDXheYF2HS9xkhaIy7NoNGWgJ11NMuhsmlOdz9+frpk1E4iaazW/3ia5OAomCoUOZgK7s4nKL56E2wHBCXOTuPufgbUQlEgaTf29oP4708CCai2cVGj0P7PP8jOvkPH0HOY3lvQlUsUU2+jq0vN9YSLp5H6btJDbyBddcKlH8im3iUUoF7ZfAY3E1gVQoA8V1hcxJ94CdGAGIskVRDZuq1nfyd//ygaFTWOQEKWRWJQXBTTkiCBa1oEQrRkPuBdgpCWx3UedrgUKiXzqMQYCEGxPpKIzLUk6HB8rbm+7mO4x3shrP37q9KpqhOd6vtw8dzC0730TVzZGFx46sbrdifPDffy/2n/AP6rwqeycewfAAAAAElFTkSuQmCC';

                        var marker = new google.maps.Marker({
                                            position: myLatlng,
                                            map: map,
                                            title: value.nome,
                                            icon:image
                                        });

                        marker.setMap(map);

                    });
                }
            });
    }

    var map;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();

    initialize = function(){
        var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
        directionsDisplay = new google.maps.DirectionsRenderer();
        
        var options = {
            zoom: 12,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("mapa"), options);

        getBikePoa();
        
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById("trajeto-texto"));

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {

                pontoPadrao = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                map.setCenter(pontoPadrao);
                
                var geocoder = new google.maps.Geocoder();
                
                geocoder.geocode({
                    "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                },
                function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        $("#de-local").val(results[0].formatted_address);
                    }
                });
            });
        }
        
    }

    initialize();

    $("#vai-para-onde").submit(function(event) {
        event.preventDefault();
        
        var enderecoPartida = $("#de-local").val();
        var enderecoChegada = $("#from-local").val();
        
        var request = {
            origin: enderecoPartida,
            destination: enderecoChegada,
            travelMode: google.maps.TravelMode.DRIVING
        };
        
        directionsService.route(request, function(result, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(result);

                var rotas = directionsDisplay.directions.routes[0];
                analisaRotas(rotas);
            }
        });
    });

});