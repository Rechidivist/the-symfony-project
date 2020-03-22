let baloonHtml = ' \
    <div id="baloon"> \
        <form id="layout" onsubmit="event.preventDefault(); SendBaloon(this);" action="#"> \
            <input type="hidden" name="id" value="{{properties.lamp_id}}">\
            <ul> \
                <li> \
                <datalist id="tickmarks">  \
                    <option value="0">off</option> \
                    <option value="10"> \
                    <option value="20"> \
                    <option value="30"> \
                    <option value="40"> \
                    <option value="50">50%</option> \
                    <option value="60"> \
                    <option value="70"> \
                    <option value="80"> \
                    <option value="90"> \
                    <option value="100">100%</option> \
                </datalist>  \
                <input type="range" name="brightness" min="0" max="100" step="10" value="{{ properties.brightness }}" list="tickmarks"> </li> \
                <li id="status"></li>\
                <li><input type="submit" value="Отправить" /></li> \
            </ul> \
        </form> \
    </div> \
        ';