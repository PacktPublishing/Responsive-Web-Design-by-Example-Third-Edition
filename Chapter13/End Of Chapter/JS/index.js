$( function( )
{
    $( ".thumbnailImage" ).click( function( )
    {
    	var imageURL = $( this ).attr( 'src' );

    	$( "#ImageShowcase" ).attr( 'src', imageURL );

    	$( '#LightBoxModal' ).modal( 'show' );
    } );
} );