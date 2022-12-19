$( function() {
    $( "#dragme" ).draggable({
        revert: "invalid",
        containment: "document",
        helper: "clone",
        cursor: "move"
    });
    $( ".droppable" ).droppable({
        accept: "#elements .element",
        revert: true,
        greedy: true,
        tolerance: "pointer",
        drop:function (event,ui) {
            var section=$(this).attr('id');
            //console.log($(ui.draggable).attr('id'));
            var id=$(ui.draggable).attr('id');
            var value=$(ui.draggable).attr('value');
            $.ajax({
                url: '{{url("drag")}}/'+id+'/'+value+'/'+section,
                //data: data,
                processing: true,
                //dataType: dataType
                success:function( data ) {
                    jQuery("#"+section).html(data).fadeIn(1000);
                    //jQuery('#slider-dropable').find('[data-ride=carousel]').carousel();
                    jQuery(".edit_button").bind("trigger");
                }
            });
            //$(ui.draggable).appendTo(this);
            //$(this).html($(ui.draggable).attr('class')).fadeIn();
        }
    });
});