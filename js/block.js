( function( blocks, editor, element ) {    var el = element.createElement;    blocks.registerBlockType( 'my-custom-blocks/my-first-block', {        title: 'My First Block',        icon: 'smiley',        category: 'my-custom-blocks',        edit: function() {            return el('p', {}, 'Hello, editor.');        },        save: function() {            return el('p', {}, 'Hello, saved content.');        }    } );    blocks.registerBlockType( 'my-custom-blocks/my-second-block', {        title: 'My Second Block',        icon: 'smiley',        category: 'my-custom-blocks',        edit: function() {            return el('p', {}, 'Hello, editor.');        },        save: function() {            return el('p', {}, 'Hello, saved content.');        }    } );    // Continue registering blocks as needed} )( window.wp.blocks, window.wp.editor, window.wp.element );