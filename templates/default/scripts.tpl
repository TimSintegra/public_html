<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

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

{if $MODULE_PATH == 'index'}
  {foreach $INDEX_SECTION_MODULES as $sect}
    <script src="{$TPL_URL}/assets/js/{$sect}/script.js"></script>
  {/foreach}
{/if}
<script src="{$TPL_URL}/assets/js/{$MODULE_PATH}/script.js"></script>