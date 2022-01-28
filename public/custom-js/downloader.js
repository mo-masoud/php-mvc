function printDownloadFile(filename,filesize){
    var printable = `
    <div class="border-card">
                    <div class="card-type-icon with-border">
                      <img src="images/VE Logo Icon White.png" class="img-fluid">
                    </div>
                    <div class="content-wrapper">
                    <div class="label-group fixed">
                    <p class="title">`+filename+`</p>
                    <p class="caption">`+filesize+`</p>
                    </div>
                    <div class="min-gap"></div>
                    
                    </div>
                    <i class="material-icons end-icon">
                      <a href="downloads/`+filename+`" class="btn btn-sm btn-warning" download><img src="images/icons/eye.svg" width="20"> Download</a>
                    </i>
                    </div> 
    `;

    $('#main4').append(printable);
}

function viewDownloadFiles(downloadsPath){
    //alert(path);
    $.ajax({
        url: 'storyOperate',
        data: {function2call: 'viewFiles', nextPath:downloadsPath},
        type: 'post',
        dataType: "xml",
        success: function (data) {
            // action to be done
            //alert(data);

            //$("#main1").text("");
            $(data).find('file').each(function(){
               var result = $(this).find("filename").map(function(){return $(this).text()}).get();
               var result2 = $(this).find("filesize").map(function(){return $(this).text()}).get();
               for (var i = 0; i<result.length; i++){
                printDownloadFile(result[i],result2[i]);
               }
               
            });

            },
            error: function(response){
                alert(response);
            }
            });
}

viewDownloadFiles("../downloads");