let baloonHtml = ' \
    <div id="baloon"> \
        <form id="layout" onsubmit="event.preventDefault(); SendBaloon(this);" action="#"> \
            <input type="hidden" name="id" value="{{properties.lamp_id}}">\
            <ul> \
                <li> \
                <li>Питание:   \
                    <nobr> \
                        <input type="radio" id="on" name="power" value="on" {% if properties.power == 1 %}checked{% endif %}> \
                        <label for="on">Вкл</label> \
                        <input type="radio" id="off" name="power" value="off" {% if properties.power == 0 %}checked{% endif %}> \
                        <label for="off">Выкл</label> \
                    </nobr> \
                </li>  \
                <li>Свет:  <input type="range" name="brightness" min="0" max="100" step="1" value="{{ properties.brightness }}" list="tickmarks"> </li> \
                <li id="status"></li>\
                    <datalist id="tickmarks">  \
                        <option value="0" label="0%"> \
                        <option value="10"> \
                        <option value="20"> \
                        <option value="30"> \
                        <option value="40"> \
                        <option value="50" label="50%"> \
                        <option value="60"> \
                        <option value="70"> \
                        <option value="80"> \
                        <option value="90"> \
                        <option value="100" label="100%"> \
                    </datalist> \
                <li><input type="submit" value="Отправить" /></li> \
            </ul> \
        </form> \
    </div> \
        ';