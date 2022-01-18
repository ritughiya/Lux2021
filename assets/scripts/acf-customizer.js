
//https://www.advancedcustomfields.com/resources/javascript-api/#filters-color_picker_args

console.log( "I'm really loaded!" );


acf.add_filter('color_picker_args', function( args, field ){

	// add the hexadecimal codes here for the colors you want to appear as swatches
	args.palettes = ['#aa1e1e', // Lux Red
					'#c84628', 	// Rusty Red
					'#d42b39', 	// Berry
					'#9a55cc', 	// Lilac
					'#d78cff', 	// Lavender
					'#c38ead', 	// Plum
					'#c4bf67',	// Moss
					'#f2da65',	// Goldenrod
					'#f4dc4a',	// Sunshine
					'#6d6d6d',	// Gray
					'#eae1ce',	// Latte
					'#edede9',	// Cream
					'#000000',	// Black
					'#FFFFFF',	// White
				]

	// return colors
	return args;

});
