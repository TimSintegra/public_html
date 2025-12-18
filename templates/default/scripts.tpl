<script src="{$TPL_URL}/assets/js/eff.js"></script>
<script src="{$TPL_URL}/assets/js/jquery-3.1.1.js"></script>
<script src="{$TPL_URL}/assets/js/jquery.spincrement.js"></script>
<script src="{$TPL_URL}/assets/js/jquery.sticky.js"></script>
<script src="{$TPL_URL}/assets/js/flexmenu.min.js"></script>
<script src="{$TPL_URL}/assets/js/materialize.js"></script>
<script src="{$TPL_URL}/assets/js/owl.carousel.js"></script>
<script src="{$TPL_URL}/assets/js/jquery.fancybox.js"></script>
<script src="{$TPL_URL}/assets/js/jquery.nicescroll.min.js"></script>
<script src="{$TPL_URL}/assets/js/jquery.liTextLength.js"></script>
<script src="{$TPL_URL}/assets/js/mmenu.js"></script>
<script src="{$TPL_URL}/assets/js/my.js"></script> 

{if $MODULE_PATH == 'contacts'}
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
{literal}

<script>
    var main_url= '';
    $(document).ready(function() {
        ymaps.ready(init);
        function init () {
            var myMap = new ymaps.Map("map", {
                    center: [{/literal}{$moduleShema}{literal}],
                    zoom: 16,
                }),

                // Создаем геообъект с типом геометрии "Точка".
                myGeoObject = new ymaps.GeoObject({
                    // Описание геометрии.

                }, {

                });

            myMap.geoObjects
                .add(myGeoObject)
                .add(new ymaps.Placemark([{/literal}{$moduleShema}{literal}], {
                    balloonContent: 'СИНТЕГРА'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: main_url + '{/literal}{$TPL_URL}{literal}/images/map_logo.png',
                    iconImageSize: [120, 140],
                    iconImageOffset: [-60, -110]


                }));

            myMap.behaviors.disable('scrollZoom');

        }});
</script> 

{/literal}
{/if}