<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Restaurant Details</title>
        <script src="jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">      
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1 class="title">Restaurant</h1>
        <div class="menubar">
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Restaurant List
                </button>
                <div class="dropdown-menu" id="items">
                </div>
            </div>
        </div>

        <div class="main">
            <h1 class="blank">Nothing to display</h1>

            <div class="content">
                <strong>
                <p>Short Name:<span id="shortname"></span></p>
                <p>Name: <span id="name"></span></p>
                <p>Description: <span id="desc"></span></p>
                <p>Price Small: <span id="psmall"></span></p>
                <p>Price Large: <span id="plarge"></span></p>
                <p>Small Portion Name: <span id="sportion"></span></p>
                <p>Large Portion Name: <span id="lportion"></span></p></strong>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>