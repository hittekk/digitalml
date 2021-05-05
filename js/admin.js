(function ($) {
    'use strict';
    var meta_image_frame = [];

    $('.digitalml-image-chooser').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent();
        var parentId = parent.attr('id');

        // If the frame already exists, re-open it.
        if (meta_image_frame[parentId]) {
            meta_image_frame[parentId].open();
            return;
        }

        // Sets up the media library frame
        meta_image_frame[parentId] = wp.media.frames.meta_image_frame = wp.media({
            title: meta_image.title,
            button: {text: meta_image.button},
            library: {type: 'image'}
        });

        // Runs when an image is selected.
        meta_image_frame[parentId].on('select', function () {
            // Grabs the attachment selection and creates a JSON representation of the model
            var media_attachment = meta_image_frame[parentId].state().get('selection').first().toJSON();

            // Sends the attachment URL to our custom image input field
            parent.children('input.digitalml-image').val(media_attachment.url);
            parent.children('a.digitalml-image-chooser:not(:has(img))').hide();
            parent.children('span.howto').show();
            parent.find('img').attr('src', media_attachment.url);
            parent.children('a.digitalml-image-chooser:has(img)').show();
            parent.children('.delete-custom-img').show();
        });

        // Opens the media library frame.
        meta_image_frame[parentId].open();
    });

    $('.delete-custom-img').click( function(e) {
        e.preventDefault();

        var parent = $(this).parent();
        var imgContainer = parent.find( '.img-container');
        var addImgLink = parent.find( '.upload-link');
        var imgInput = parent.find( 'input.digitalml-image' );

        // Clear out the preview image
        imgContainer.hide();

        // Un-hide the add image link
        addImgLink.show();

        // Hide the delete image link
        $(this).hide();

        // Delete the image id from the hidden input
        imgInput.val( '' );
    });


})(jQuery);
