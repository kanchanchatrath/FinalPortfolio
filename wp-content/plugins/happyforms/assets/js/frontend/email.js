( function( $, settings ) {

	HappyForms.parts = HappyForms.parts || {};

	HappyForms.parts.email = {
		init: function() {
			this.type = this.$el.data( 'happyforms-type' );
			this.$input = $( 'input', this.$el );
			this.mode = this.$el.attr( 'data-mode' );

			if ( 'autocomplete' === this.mode ) {
				this.initAutocomplete();
			}

			this.$input.on( 'keyup', this.triggerChange.bind( this ) );
			this.$input.on( 'change', this.triggerChange.bind( this ) );
			this.$input.on( 'blur', this.onBlur.bind( this ) );
		},

		initAutocomplete: function() {
			var self = this;
			var $inputs = $( '[data-serialize]', this.$el );

			$inputs.each( function( index ) {
				if ( 0 === index ) {
					self.$input = $( this );
				}

				var $visualInput = $( this ).next( 'input[type=email]' );
				var $select = $visualInput.next( '.happyforms-custom-select-dropdown' );

				$visualInput.happyFormsSelect( {
					$input: $( this ),
					$select: $select,
					searchable: 'autocomplete',
					autocompleteOptions: {
						url: settings.url,
						source: settings.autocompleteSource,
						trigger: '@',
						partial: true
					},
				});
			});
		}
	};

} )( jQuery, _happyFormsEmailSettings );