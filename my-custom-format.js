( function( wp ) {
    var MyCustomButton = function( props ) {
        return wp.element.createElement(
            wp.blockEditor.RichTextToolbarButton, {
                icon: 'schedule',
                title: 'Highlight Pro',
                onClick: function() {
                    props.onChange( wp.richText.toggleFormat(
                        props.value,
                        { type: 'qc-highligh-pro/highlight-output' }
                    ) );
                },
                isActive: props.isActive,
            }
        );
    }
    wp.richText.registerFormatType(
        'qc-highligh-pro/highlight-output', {
            title: 'Highlight Pro',
            tagName: 'span',
            className: 'qc-highlight-pro',
            edit: MyCustomButton,
        }
    );
} )( window.wp );