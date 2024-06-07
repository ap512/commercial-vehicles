( function( api ) {

	// Extends our custom "charging-station" section.
	api.sectionConstructor['charging-station'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );