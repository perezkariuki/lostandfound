<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<body>
        <div style="border: 1px solid black; padding:100px; align-items: center; position: relative;top: 150px;" class="container">
            <div style="padding: 100px;">
                <div class="row">
                    <div class="col-md-8">
                        <h2 style="margin-top: 5px;"><i class="fal fa-map-marker-alt text-muted" aria-hidden="true"></i> where</h2>
                        <input id="where" onchange="whereAutocomplete()" type="text" placeholder="City, state, or zip" autocomplete="off" style="width: 100%; height: 39px;" />
                    </div>
                    <div class="col-md-4">
                        <a  onclick="btn_handler()" class="btn btn-primary" style="color: white; height: 40px; position: relative; top: 50px; border-radius: 15px ">Submit</a>
                    </div>
                </div>
            </div>
        </div>
</body>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCerAzjPeGPY5kEzCI71wP2mFktsfbky8k8&libraries=places&callback=whereAutocomplete" async defer></script>

<script>
    function whereAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('where'),
            {
                types: ['(regions)'],
                componentRestrictions: { 'country': ['US', 'CA'] }
            }
        );
        autocomplete.addListener('place_changed', place_changed);
    }

    function btn_handler(){
        alert($("#where").val())}
</script>
</html>