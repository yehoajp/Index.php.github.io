<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Tours</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../order.css">
</head>

<body>
    <?php include '../audio.php';
    include '../connect.php';
     ?>
    <header class="header text-center d-flex align-items-center justify-content-center">
        <div class="header-content text-white text-center">
            <h1 class="display-4 font-weight-bold">Find Your Destination</h1>
            <p class="lead mb-4">Discover the journey for you</p>
            <form class="search-bar row mx-auto p-3 rounded" style="max-width: 800px;">
                <div class="col-md-3 mb-2 mb-md-0">
                    <input type="month" class="form-control" placeholder="When">
                </div>
                <div class="col-md-4 mb-2 mb-md-0">
                    <input type="text" class="form-control" placeholder="Destination">
                </div>
                <div class="col-md-3 mb-2 mb-md-0">
                    <select class="form-control">
                        <option selected>Tour Type</option>
                        <option>Adventure</option>
                        <option>Relaxation</option>
                        <option>Historical</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-block">Search</button>
                </div>
            </form>
        </div>
    </header>

    <section class="popular-tours container my-5">
        <h2 class="text-center mb-4 font-weight-bold">Most Popular Tours</h2>
        <p class="text-center text-muted mb-5">Discover amazing places handpicked just for you.</p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow tour-card">
                    <img src="../img/tour/bg2.jpg" class="card-img-top" alt="Italian Dream Tour">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">Coasts of Liyue</h5>
                        <p class="card-text">Explore the magical coasts.</p>
                        <p class="harg text-danger font-weight-bold">$795</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow tour-card">
                    <img src="../img/tour/bg1.jpg" class="card-img-top" alt="Treasures of Thailand">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">Mountain Trip</h5>
                        <p class="card-text">Experience the Tall Mountains of Liyue.</p>
                        <p class="harg text-danger font-weight-bold">$1825</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow tour-card">
                    <img src="../img/tour/bg3.jpeg" class="card-img-top" alt="Discover Greece">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">Cities & Culture</h5>
                        <p class="card-text">Explore the unique culture of Liyue Harbor.</p>
                        <p class="harg text-danger font-weight-bold">$1230</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>