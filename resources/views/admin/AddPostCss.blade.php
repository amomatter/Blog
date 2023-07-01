<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
    @import url('https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
    }

    body {
        font: 14px/1 'Roboto', sans-serif;
        color: #fff;
        background: url('https://codepen.io/images/classy_fabric.png') #333;
        -webkit-font-smoothing: antialiased;
    }

    button,
    input,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        vertical-align: baseline;
        border: 0;
        outline: 0;
        color: #fff;
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    textarea {
        overflow: auto;
        vertical-align: top;
        resize: none;
    }

    [placeholder]::-webkit-input-placeholder { color: rgba(255,255,255,.8); }
    [placeholder]:hover::-webkit-input-placeholder { color: rgba(255,255,255,.4); }
    [placeholder]:focus::-webkit-input-placeholder { color: transparent; }

    [placeholder]::-moz-placeholder { color: rgba(255,255,255,.8); }
    [placeholder]:hover::-moz-placeholder { color: rgba(255,255,255,.4); }
    [placeholder]:focus::-moz-placeholder { color: transparent; }

    [placeholder]:-ms-input-placeholder { color: rgba(255,255,255,.8); }
    [placeholder]:hover:-ms-input-placeholder { color: rgba(255,255,255,.4); }
    [placeholder]:focus:-ms-input-placeholder { color: transparent; }

    form {
        width: 400px;
        margin: 50px auto;
    }

    input[type="text"] {
        display: block;
        width: 400px;
        margin: 0 0 20px;
        padding: 8px 12px 10px 12px;
        border: 1px solid rgba(0,0,0,.5);
        background: rgba(0,0,0,.25);
    }

    textarea {
        display: block;
        width: 400px;
        height: 150px;
        margin: 0 0 20px;
        padding: 8px 12px 10px 12px;
        border: 1px solid rgba(0,0,0,.5);
        background: rgba(0,0,0,.25);
    }

    input[type="submit"] {
        display: block;
        width: 150px;
        margin: 0 0 20px;
        padding: 8px 0 10px 0;
        text-align: center;
        border: 1px solid rgba(0,0,0,.5);
        background: rgba(0,0,0,.25);
    }


</style>

<style>
    body {
    }
    .btn-tertiary {
        color: #555;
        padding: 0;
        line-height: 40px;
        width: 300px;
        margin: auto;
        display: block;
        border: 2px solid #555;
    &:hover,
    &:focus {
         color: lighten(#555, 20%);
         border-color: lighten(#555, 20%);
     }
    }

    /* input file style */

    .input-file {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    + .js-labelFile {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0 10px;
        cursor: pointer;
    .icon:before {
    //font-awesome
    content: "\f093";
    }
    &.has-file {
    .icon:before {
    //font-awesome
    content: "\f00c";
        color: #5AAC7B;
    }
    }
    }
    }
</style>

<script>
    (function() {

        'use strict';

        $('.input-file').each(function() {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();

            $input.on('change', function(element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
            });
        });

    })();
</script>
