<?php include './includes/header.php'; ?>
<div class="container">

    <section class="research">
        <h2 class="pageID"><?= $PageID ?></h2>
        <h1 class="research__header">GRID VS FLEXBOX: What is the difference?</h1>
        <p>
            Grid and Flexbox are web layout technologies that have been thriving in recent years. There are some noticeable differences between these two cutting-edge technologies. To begin with, Flexbox is Content-based, which means that the size of the box depends on the size of the content placed within the box. Meanwhile, gird is container-based, which means that the size of the cell is defined in the grid container. In addition, the grid has a unique property that Flexbox does not have, which is the “Gap” property. The gap property allows two components to be kept separated, and only the grid supports this property. In Flexbox, we need to use padding and other techniques to achieve the same result. Another distinguishing feature between the two is the dimension to which they display the content. While flexbox is one-dimensional, which means it either displays its content vertically or horizontally, Grid is two-dimensional, which means you can precisely place items into cells defined by rows and columns. Flexbox is supported by most of the currently popular browsers, which makes it easier to use, as well as to be modified.
        </p>
        <div>

            <img class="research__image" src="./images/flexbox.jpg" alt="Flexbox">
        </div>
        <p>
            However, some flexbox properties are not fully supported such as gap, flex-grow, etc. So you need to be careful when using it. Meanwhile, Grid is currently not available on IE11 and Edge 15, which could be a problem for users on these browsers if the developer used Grid. Another major difference between the two is the way in which they wrap the content of each container. For Flexbox, the size of the container will vary when they wrap the text, which may result in a non-uniform display of the content. On the other hand, Grid will ensure that the containers are of the same size, no matter what the wrapped content was.
        </p>
    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
        <h3>Works Cited</h3>
        <a href="https://www.webdesignerdepot.com/2018/09/grid-vs-flexbox-which-should-you-choose" target="_blank">Kunal Sarker. “GRID VS FLEXBOX: WHICH SHOULD YOU CHOOSE?“</a>
        <a href="https://webdesign.tutsplus.com/articles/flexbox-vs-css-grid-which-should-you-use--cms-30184" target="_blank">Anna Monus. “Flexbox vs. CSS Grid: Which Should You Use and When?”</a>
        <a href="https://blog.hubspot.com/website/css-grid-vs-flexbox" target="_blank">Anna Fitzgerald. “Here's the Difference Between Flexbox, CSS Grid, & Bootstrap”</a>
    </aside>
</div>

<?php include "./includes/footer.php"; ?>