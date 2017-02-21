$(document).ready(function() {

    $('#calendar').fullCalendar({
        firstDay: 1,
        eventClick: function(calEvent, jsEvent, view){
        	var id = calEvent.id;
        	$('#fullCalModal' + id).modal("show");
		},
        eventSources: [
            {
                url: 'events_commande.php',
                color: '#DE1E27'
            },
            {
                url: 'events_prepa.php',
                color: '#00a65a'
            }

        ] 
    });

});