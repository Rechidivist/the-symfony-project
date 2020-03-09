function SendBaloon(form) 
{

    let id = form.elements.id.value;
    let power = form.elements.power.value;
    let brightness = form.elements.brightness.value;

    $.ajax({
        url: "/lamp/"+id+"/power/set/"+power,
        type: "get"
    }).done(function(data) {
        alert(data);
    });

    $.ajax({
        url: "/lamp/"+id+"/brightness/set/"+brightness,
        type: "get"
    }).done(function(data) {
        alert(data);
    });

    return false;
}