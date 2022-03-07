<!doctype html>
<html lang="en">

<head>
    <style>
        .section1 {
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px;
            font-size: 20px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media (max-width: 800px) {
            .column {
                flex: 46%;
                max-width: 46%;
            }
        }

        .card {}

        .card-title {

            margin-top: -70px;
            font-weight: bold;
            text-align: center;
        }

        .card-text {
            text-align: justify;
        }

        .modal-header {}

        .modal-footer {}

        .card-img-top {

            height: 250px;
            margin-bottom: 60px;
        }

        #left-panel-link {
            position: relative;
            margin-right: 250px;
            background: linear-gradient(45deg, #00a8f4 0%, #02d1a1 100%);
            ;
            color: white;
            font-size: 16px;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #right-panel-link {
            position: absolute;
            right: 10%;
            background: linear-gradient(45deg, #00a8f4 0%, #02d1a1 100%);
            color: white;
            font-size: 16px;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .sep {
            height: 25px;
        }

        .list-group-mine .list-group-item:hover {
            background-color: white;
            color: rgb(17, 17, 68);
        }

        .list-group-mine .list-group-item {

            background-color: #111144;
            color: white;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="section1">
        <!-- Header -->
        <div class=" header ">
            <h1>Renaissance Image Grid</h1>
        </div>

        <!-- Photo Grid -->
        <!-- Row 1 -->
        <div class="card-deck">
            <div class="card ">
                <img class="card-img-top" src="dist/img/slidesho4.png" alt="Company logo">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <ul class="list-group  list-group-mine ">
                        <li class="list-group-item   "><i class="fa fa-briefcase" style="font-size:20px;"></i> Company:Ghommo Pakistan</li>

                        <li class="list-group-item   "><i class="fa fa-map-marker" style="font-size:20px;"></i> Location</li>
                        <li class="list-group-item   "><i class="fa fa-clock-o" style="font-size:20px;"></i> Duration</li>
                        <li class="list-group-item   "><i class="fa fa-inr" style="font-size:20px;"></i> Cost</li>
                    </ul>

                </div>
                <div class="card-footer">
                    <button type="button" class="btn" id="left-panel-link">Register</button>
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal1" id="right-panel-link">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="dist/img/slidesho5.png" alt="Company logo">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <ul class="list-group list-group-mine">
                        <li class="list-group-item "><i class="fa fa-briefcase" style="font-size:20px;"></i> Company</li>

                        <li class="list-group-item "><i class="fa fa-map-marker" style="font-size:20px;"></i> Location</li>
                        <li class="list-group-item "><i class="fa fa-clock-o" style="font-size:20px;"></i> Duration</li>
                        <li class="list-group-item "><i class="fa fa-inr" style="font-size:20px;"></i> Cost</li>
                    </ul>

                </div>
                <div class="card-footer">
                    <button type="button" class="btn " id="left-panel-link">Register</button>
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal2" id="right-panel-link">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="dist/img/slidesho6.png" alt="Company logo">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <ul class="list-group list-group-mine">
                        <li class="list-group-item "><i class="fa fa-briefcase" style="font-size:20px;"></i> Company</li>

                        <li class="list-group-item "><i class="fa fa-map-marker" style="font-size:20px;"></i> Location</li>
                        <li class="list-group-item "><i class="fa fa-clock-o" style="font-size:20px;"></i> Duration</li>
                        <li class="list-group-item "><i class="fa fa-inr" style="font-size:20px;"></i> Cost</li>
                    </ul>

                </div>
                <div class="card-footer">
                    <button type="button" class="gradient-button gradient-button-4  " id="left-panel-link">Register</button>
                    <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal3" id="right-panel-link">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
        <div class="sep"></div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>