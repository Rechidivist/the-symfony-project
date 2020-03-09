ymaps.ready(init);
let myMap;
let objectManager;
let baloonLayoutClass;

function init () 
{
    // Создаем карту.
    myMap = new ymaps.Map("map", {
            center: [47.60, 41.8],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        });

    baloonLayoutClass = ymaps.templateLayoutFactory.createClass(baloonHtml);
    ymaps.layout.storage.add('my#baloonLayoutClass', baloonLayoutClass);

    objectManager = new ymaps.ObjectManager({
        // Включаем кластеризацию.
        clusterize: true,
        // Опции кластеров задаются с префиксом 'cluster'.
        gridSize: 32,
        clusterDisableClickZoom: true,
        geoObjectOpenBalloonOnClick: true
    });

    $.ajax({
        url: "/AllLampsForMap.json",
        type: "get",
        cache: true
    }).done(function(data) {
        objectManager.add(data);
        myMap.setBounds(objectManager.getBounds());
    });

    myMap.geoObjects.add(objectManager);
}