$(document).ready(function(){   
    

      $("#btnCreateStory").click(function(){
        // get data
        var title = $("#txtStoryTitle").val();
        var desc = $("#txtStoryDesc").val();
        var loc = "stories/..."

        // Creating XML profile of the story
        var XML = new XMLWriter();
        XML.BeginNode("story");
        XML.Node("title", title);
        XML.Node("description", desc);
        XML.Node("location", loc);
        XML.EndNode();
        XML.Close();

        var output = XML.ToString();
        //alert(output);
        //exportTextFile("xmlfile.xml", output);

        // create and save xml file (AJAX to PHP)
        $.ajax({
            url: 'storyOperate',
            data: {function2call: 'addNewStory' , storyName: title ,content: output},
            type: 'post',
            dataType: "text",
            success: function (data) {
                // action to be done
                
                alert("Story was created successfully");
                viewStories();
                //location.reload();
                },
                error: function(response){
                    alert("failed to create story" + response);
                }
                });

                
      });
});

$('body').on('click', '#backNav', function() {
    window.location.href = "../../index.html";
});