$(document).ready( onReady );

function onReady(){
    console.log('jquery');
    appendNames();
}

function appendNames(){
    $.ajax({
        method: 'GET',
        url: './names.php'
    }).then(function (response){
        console.log(response)
        // $('#names').empty();
        $('#names').append(
            `<li>${response}</li>`
        )
    })
}

