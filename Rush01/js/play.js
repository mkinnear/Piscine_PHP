$('#up').click(function(e){
    e.preventDefault(); // the button is prevented from sending the form

    var up = encodeURIComponent( $('#up').val() ); // secure data
console.log(up);

    if(up){ //check that the variables are not empty
        $.ajax({
            url : "php/game.php", // the URL of the processing file is given
            type : "POST", 
            data : "direction=" + up // send data
        });
    }
});

$('#down').click(function(e){
    e.preventDefault();

    var down = encodeURIComponent( $('#down').val() );
console.log(down);

    if(down){ 
        $.ajax({
            url : "php/game.php",
            type : "POST", 
            data : "direction=" + down 
        });
    }
});

$('#left').click(function(e){
    e.preventDefault(); 

    var left = encodeURIComponent( $('#left').val() );
console.log(left);
    if (left)
    {
           $.ajax({
            url : "php/game.php", 
            type : "POST", 
            data : "direction=" + left 
        });
    }
});

$('#right').click(function(e){
    e.preventDefault(); 

    var right = encodeURIComponent( $('#right').val() );
console.log(right);
    if (right)
    {
           $.ajax({
            url : "php/game.php", 
            type : "POST", 
            data : "direction=" + right 
        });
    }
});

$('#shoot').click(function(e){
    e.preventDefault(); 

    var shoot = encodeURIComponent( $('#shoot').val() );
console.log(shoot);
    if (shoot)
    {
           $.ajax({
            url : "php/game.php", 
            type : "POST", 
            data : "shoot=" + shoot 
        });
    }
});

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function charger(){

    setTimeout( function(){

        var id = getUrlVars()["id"];
        $.ajax({
            url : "php/reload.php?id=" + id,
            type : "GET",
            success : function(map){
                $('#load_map').replaceWith(map);
            }
        });

        charger();

    });

}

charger();