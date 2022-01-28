$("body").on('click', '#btnFilters', function() {
    // show/hide filters
    if($("#filters").hasClass("d-none")){
        $("#filters").removeClass("d-none");
    }
    else{
        $("#filters").addClass("d-none");
    }
    
});

function printStoryCard(){
    var output =
    `
    <div class="col-md-6">
                          <div class="story-card rounded border-right border-width4 border-dark">
                              <div class="container-fluid h-100">
                                  <div class="row h-100">
                                      <div class="col-lg-4 px-0">
                                          <img src="images/cover.jpg" width="100%" height="100%">
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="py-2">
                                            <h3>The Detective</h3>
                                            <div class="badge badge-success">Completed</div>
                                            <ul class="list-inline my-2">
                                                <li class="list-inline-item"><span class="font-2 text-color5">Watches</span><div class="font-1">168K</div></li>
                                                <li class="list-inline-item"><span class="font-2 text-color5">Votes</span><div class="font-1">6.8K</div></li>
                                                <li class="list-inline-item"><span class="font-2 text-color5">Episodes</span><div class="font-1">52</div></li>
                                            </ul>
                                            <p class="description">
                                                With eleven missing women to find and six high-profile burglary cases to solve, the last thing Detective Nathan McNamara needs in his life is one more complication. And that's exactly what his recent one-night stand is becoming-complicated. With his heinous lieutenant breathing down his neck for answers and his accidental girlfriend dropping hints for a commitment, Nathan is realizing that his career and his bachelor status are both on the line. 
                                                When the burglary cases suddenly escalate to homicide, Nathan must put everything else aside to stop the killer. But this is easier said than done when the blonde from the bar repeatedly shows up at his doorstep and enlists his own mother against him. Now he's more convinced than ever that his job hangs in the balance and that the Surgeon General's warning on the whiskey bottle should include something about women.
                                                The Detective is part of THE SOUL SUMMONER Series. Book one of the series is available on WATTPAD.
                                            </p>
                                            <div>
                                                <ul class="list-inline my-3">
                                                    <li class="list-inline-item font-1 mt-2">Price: <span class="bg-color1 text-color2 p-1 ml-1">Free</span></li>
                                                    <li class="list-inline-item float-right"><button class="btn btn-md btn-color1">Watch</button></li>
                                                </ul>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
    `;
    $("#searchResults").append(output);
}

printStoryCard();
printStoryCard();
printStoryCard();
printStoryCard();
printStoryCard();
printStoryCard();