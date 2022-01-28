function printCategoryCard(catName){
    var output =
    `
    <div class="col-md-3">
          <a href="#">
            <div class="category-card font-3 animate__animated animate__bounce" style="background-image: url('images/categories/`+catName+`.png');">
              `+catName+`
            </div>
          </a>
        </div>
    `;

    $("#category-list").append(output);
}

printCategoryCard("Paid Stories");
printCategoryCard("Adventure");
printCategoryCard("Contemporary Lit");
printCategoryCard("Diverse Lit");
printCategoryCard("Fanfiction");

printCategoryCard("Fantasy");
printCategoryCard("Historical Fiction");
printCategoryCard("Horror");
printCategoryCard("Humor");
printCategoryCard("Mystery");

printCategoryCard("New Adult");
printCategoryCard("Non-Fiction");
printCategoryCard("Paranormal");
printCategoryCard("Poetry");
printCategoryCard("Romance");

printCategoryCard("Science Fiction");
printCategoryCard("Short Story");
printCategoryCard("Teen Fiction");
printCategoryCard("Thriller");
printCategoryCard("Werewolf");