$(document).ready(function() {

    $('.popup').magnificPopup({
        //delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true,
            preload: [1, 4]// preload previous and next four images
        },
        image: {
            titleSrc: 'title'
        }
    });

    $('#tag_input').change(function(){
        /* there is an elegant way to do this on the jquery API
        *  but it didn't work for me...
        */
        var selected='<span style="color:#666;">Tags: </span>';
        $('#tag_input :selected').each(function(){
            selected += $(this).html() + '| ';
        });
        // remove trailing comma
        selected = selected.substr(0, selected.length-3);
        $('#tag_list').html(selected);
    });

    $('#date_input').change(function(){
        $(this).css('color', 'red');
    });


    $('#file_input').change(function(){

        var filename = getFilename($(this)),
        len = filename.length,
        suffix = filename.substr(len-4, 4);

        if((suffix === '.jpg')||(suffix === '.png')){
            if(len === 24){
                // then we assume a string with format yyyy-mm-dd-0123-1920.jpg
                // where 0123 is the 123rd photo this month and 1920 is the
                // resolution width. Discard the resolution number.
                filename = filename.replace(filename.substring(15, 20), '');
                $('#rename_or_warn').html("Renamed file to: "+filename + " &nbsp; <input id='checkbox' name='checkbox' type='checkbox' checked='true'>");
                $('#rename').val(filename);
                // also let's populate the date field from filename
                var date = filename.replace(filename.substring(10), '');
                $('#date_input').css('color', 'red');
                $('#date_input').val(date);
            } else {
                //don't rename or populate date field
                $('#rename').val(filename);
            }
        } else {
            $('#rename_or_warn').html("This site accepts only .jpg or .png files");
        }
    });

    function getFilename(tis){
        // http://stackoverflow.com/questions/857618/javascript-how-to-extract-filename-from-a-file-input-control
        var fullPath = tis.val();
        if(fullPath){
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
        return filename;
    }




});
