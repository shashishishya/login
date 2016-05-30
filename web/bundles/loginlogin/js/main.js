var addedrows = new Array();
 
$(document).ready(function() {
    $( "#sourcetable tbody tr" ).on( "click", function( event ) {
   
    var ok = 0;
    var theid = $( this ).attr('id').replace("sour","");    
 
    var newaddedrows = new Array();
     
    for (index = 0; index < addedrows.length; ++index) {
 
        // if already selected then remove
        if (addedrows[index] == theid) {
                
            $( this ).css( "background-color", "#ffccff" );
             
            // remove from second table :
            var tr = $( "#dest" + theid );
            tr.css("background-color","#FF3700");
            tr.fadeOut(400, function(){
                tr.remove();
            });
             
            //addedrows.splice(theid, 1);   
             
            //the boolean
            ok = 1;
        } else {
         
            newaddedrows.push(addedrows[index]);
        } 
    }   
     
    addedrows = newaddedrows;
     
    // if no match found then add the row :
    if (!ok) {
        // retrieve the id of the element to match the id of the new row :
         
         
        addedrows.push( theid);
         
        $( this ).css( "background-color", "#cacaca" );
                 
        $('#destinationtable tr:last').after('<tr id="dest' + theid + '"><td>'
                                       + $(this).find("td").eq(0).html() + '</td><td>'
                                       + $(this).find("td").eq(1).html() + '</td><td>'
                                       + $(this).find("td").eq(2).html() + '</td><td>'
                                       + $(this).find("td").eq(3).html() + '</td><td>'
                                       + $(this).find("td").eq(4).html() + '</td></tr>');         
         
    }
 
     
    });
});