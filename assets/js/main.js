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

    var listaAcidentes;

    getListAcidentes = function(latitude, longitude)
    {
        $.get( "data.json", function( data ) {
              listaAcidentes = data.result.records;
        });
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

    setEstacionamentos = function()
    {
        $.get( "estacionamentos.json", function( data ) {

                data.forEach(function (value, index, ar) {

                        var myLatlng = new google.maps.LatLng(value.latitude, value.longitude);

                        var image = 'estacionamento.gif';

                        var marker = new google.maps.Marker({
                                            position: myLatlng,
                                            map: map,
                                            title: value.local,
                                            icon:image
                                        });

                        marker.setMap(map);

                    });
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

        getListAcidentes();

        setEstacionamentos();

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

        var enderecoPartida = $("#de-local").val() + ", Porto Alegre, RS";
        var enderecoChegada = $("#from-local").val() + ", Porto Alegre, RS";

        var request = {
            origin: enderecoPartida,
            destination: enderecoChegada,
            travelMode: google.maps.TravelMode.WALKING
        };

        directionsService.route(request, function(result, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(result);

                var lat_long = directionsDisplay.directions.routes[0].overview_path;

                for (var i = lat_long.length - 1; i >= 0; i--) {

                    for (var ii = listaAcidentes.length - 1; ii >= 0; ii--) {

                            if(listaAcidentes[ii].LONGITUDE  == lat_long[i].D ||
                               listaAcidentes[ii].LATITUDE   == lat_long[i].k)
                            {
                                var myLatlng = new google.maps.LatLng(listaAcidentes[ii].LATITUDE, listaAcidentes[ii].LONGITUDE);

                                var image = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAZCAYAAAAmNZ4aAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gwNChYQ38LCRgAAAwJJREFUSMe9ls1LVG8Uxz/PaE5TOTlj4+8nYTXQQiKhTTJFbdqFQbYRWrRsUVariP6BCIIoalG0iDB6WVSLAlsEbosCNZACk4KiF89oQ3gzB7vPaTH33p7MmzOhHTjcmXvO83zv97w9D/yFCGwXmBAYEljNUotUNC3wRkADfQQwsZSgwfOwA6oC3wUKrk81YmoEbwU+zGN61wLratkrUUOIAW5FC9vaNJHLafC3TeBUrayrZVsQsAL6CfT7ixf+t6tX/fGfIf8i0LoUwK/DvE4dOuRrIJ87O30n39cXlbXAmXDzYiZjVcSGwPblS1tMpawDvndRcizQBhwEUGBVb68+fP7cGGMwxvDU88zyvb9gXRRYIYvQPn0hm8l83ldVPXrsmAbfob1HjqiqajGZdFkfXSjksYxbKgt3AgcqjWdI37gBQDaTifzSjY0ANN6+rc7yCwLNLbUCB+2zArgSvqsvFGx9oZAAyOVykW9TUxMAya6uRN2mTS74PQEzXi2wBGyBfUB7mNv0zZtgKvPGBc6E7JctI33tmjrIO4Ad/8WEPBET4pUErQGw6vRpW7dhQ+TrAmez2eh3/datiZXHj/vO3nf4SaSqgrofFspEa6u1k5NR+6iqjoyMRMU1MDDgmtQvFu3EmjVuoZ2rqrcFOgRmBXQcdPrSJV/nSKlUioCHh4fnmvXr2bPuRPOkMlIXBB4Mv/ZzR8dvoKE0NzdrKpXScrk8r32yvd2daHcXAj0ZTaiGBp0dGrJxwJ7nqed5cWadHRy0xYYG9/jcH9c+LQLF0LG0e3csW2utdnd3az6f19HR0VjwL11dLuv3Ao0yT0GdD53GwdqpqVi2/f39UY57enpigXV62oYnWqAnfik0gc3ureLb5cu+LiCFbdt03fr1+vTZsz/6zfT1+XNuLGsBjEASeAJsAajbuNFmX72yc24nxtFwpmi5XNZkMgl+0LqqriawFp2ZMaXOTvXHxsK1j4GdRmAP8MDNuS7yWT7P/WqXEfgI/M+/lbcJ4BP/XsZ+AO4v4GM/eIqGAAAAAElFTkSuQmCC";

                                var marker = new google.maps.Marker({
                                                    position: myLatlng,
                                                    map: map,
                                                    title: "Acidente ocorrido.",
                                                    icon:image
                                                });

                                marker.setMap(map);
                            }
                    };
                };
                //analisaRotas();
            }
        });
    });

    $("#ser-informado").submit(function(event){
          var aviso = $('#aviso');
          var data  = $(this).serialize();

          event.preventDefault();

          $.ajax({
            type: 'POST',
            cache: false,
            url:   'http://primous.com.br/webservice/bikeon/send_email',
            data:  data,
            success: function(result) {

                if(result == '0')
                {
                    $('#mensagem').html('Não foi possível realizar sua solicitação. Por favor, tente mais tarde.');
                }
                else
                {
                    $('#aviso').fadeOut();
                }
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
          });

          $('#aviso').fadeOut();
    })

});
