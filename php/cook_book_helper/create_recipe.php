<form>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail img-square">
                <img class="img-responsive" src="" id="edit_recipe_img" width="350" height="350">
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit" style="">
            </form>
        </div>
        <div class="col-sm-8">
            <br>
            <div class="row">
                <!-- name -->
                <div class="form-group">
                    <div class="col-sm-2 col-form-label">
                        <label for="recipe_name">Recipe</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="recipe_name" placeholder="Recipe Name">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- category(s) -->
                <div class="col-sm-2 col-form-label">
                        <label for="category">Category(s)</label>
                </div>
                <div class="col-sm-6">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" id="category" value="option1"> Chicken
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" id="category" value="option2"> Beef
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" id="category" value="option3"> Pork
                    </label>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- cooktime -->
                <div class="form-group form-inline">
                    <label for="cooktime" class="col-xs-2 col-form-label">Time</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" placeholder="000:00:00" 
                               value="000:00:00" id="cooktime" onkeyup="showCooktime(this.value)">
                        <span id="cooktime-input" style="margin-left: 5px;"></span>
                        <span id="cooktime-input-error" style="margin-left: 5px;color: red;"></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- ingredients -->
                <div class="form-group">
                    <div class="col-sm-2 col-form-label">
                        <label for="ingredients_input">Ingredients:</label>
                    </div>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="ingredients_input" rows="5" placeholder="Ingredients"></textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- instructions -->
                <div class="form-group">
                    <div class="col-sm-2 col-form-label">
                        <label for="instructions_input">Instructions:</label>
                    </div>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="instructions_input" rows="10" placeholder="Instructions"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<br>
<div class="row">
    <div class="pull-right">
        <div class="col-sm-5">
            <button class="btn btn-primary" id="submitCreate" on>Submit</button>
        </div>
        <div class="col-sm-5">
            <button class="btn btn-default" id="goback">Go Back</button>
        </div>
    </div>
</div>

<script>
    document.getElementById("goback").onclick = function () {
        location.href = "http://localhost:8888/php/cook_book.php";
    };
    
</script>