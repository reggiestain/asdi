$(document).ready(function () {

    $('.prof_readmore').click(function (e) {
        e.preventDefault();

        if ($(this).hasClass('open') == true) {
            $(this).parent().find('div.open, span.open').addClass('hidden').removeClass('open');
            $(this).removeClass('open').text('read more');
        } else {
            $(this).parent().find('div.hidden, span.hidden').addClass('open').removeClass('hidden');
            $(this).addClass('open').text('read less');
        }
        console.log('working');
    });

    $(document).on("click", "#pro,#doc,#inv", function () {
        $("#current-row, #current-foot").hide();
        $("#courses").attr('class', 'tab-pane fade in');

    });

    $(document).on("change", "#eng", function () {
        var answ = $(this).val();
        if (answ === 'No') {
            $("#other-lan").show();
        } else {
            $("#other-lan").hide();
        }
    });

    $(document).on("change", "#disable", function () {
        var answ = $(this).val();
        if (answ === 'Yes') {
            $("#disable-options").show();
        } else {
            $("#disable-options").hide();
        }
    });

    $(document).on("change", "#emp-status", function () {
        var answ = $(this).val();
        if (answ === 'Yes') {
            $("#emp").show();
        } else {
            $("#emp").hide();
        }
    });

    $("#input-708").fileinput({
        initialPreviewConfig: [{
            }
        ],
        uploadUrl: "http://localhost/file-upload-batch/1", // server upload action
        //allowedFileExtensions: ["jpg", "png", "gif","pdf"],
        uploadAsync: false,
        maxFileCount: 5,
        browseClass:'btn btn-primary',
        removeClass:'btn btn-danger',
        uploadLabel:'Submit',
        uploadClass:'btn btn-success'
    }).on('filebatchpreupload', function (event, data) {
      var n = data.files.length, files = n > 1 ? n + ' files' : 'one file';
      if (!$("#myModal").modal()) {
          return {
              message: "Upload aborted!", // upload error message
              data: {} // any other data to send that can be referred in `filecustomerror`
            };
      }
       
       //window.confirm("Are you sure you want to upload" + files + "?")
    });

});
