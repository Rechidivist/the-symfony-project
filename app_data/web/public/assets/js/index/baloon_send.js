function SendBaloon(form) 
{

    let id = form.elements.id.value;
    let brightness = form.elements.brightness.value;

    $.ajax({
        url: "/lamp/"+id+"/brightness/set/"+brightness,
        type: "get"
    }).done(function(data) {
    });

    return false;
}