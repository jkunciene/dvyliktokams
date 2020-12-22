<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="templates/main/css/bootstrap.min.css" rel="stylesheet">
    <title>Filmai</title>
</head>

<body>
    <div class="container">
        <form>
            <!-- <div class="form-group">
                <label for="ID">ID</label>
                <input type="number" class="form-control" id="ID" name="ID" placeholder="ID">
            </div> -->
            <div class="form-group">
                <label for="pavadinimas">Pavadinimas</label>
                <input type="text" class="form-control" id="pavadinimas" name="pavadinimas" placeholder="Pavadinimas">
            </div>
            <div class="form-group">
                <label for="trukme">Trukmė</label>
                <input type="text" class="form-control" id="trukme" name="trukme" placeholder="Trukmė">
            </div>
            <div class="form-group">
                <label for="aprasymas">Aprašymas</label>
                <textarea class="form-control" name="aprasymas" id="aprasymas" rows="3"></textarea>
            </div>
            <form>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img" id="img">
                <label class="custom-file-label" for="validatedCustomFile">Pasirinkite nuotrauka...</label>
            </div>  
                <div class="form-group">
                    <label for="author">Režisierius</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Režisierius">
                </div>
                <div class="form-group">
                    <label for="kID">Kategorijos ID</label>
                    <input type="number" class="form-control" id="kID" name="kID" placeholder="Kategorijos ID">
                </div>
                <button type="pateikti" class="btn btn-primary">Pateikti</button>
            </form>
        </form>
    </div>

    <script src="templates/main/js/jquery.min.js"></script>
    <script src="templates/main/js/bootstrap.bundle.min.js"></script>
</body>

</html>