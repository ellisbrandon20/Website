<form method="post" action="cook_book.php">
    <input type="hidden" name="page_form" value="searchRecipe">
    <div class="row">
        
        <div class="col-sm-12">
            <br>
            <div class="row">
                <!-- name -->
                <div class="form-group">
                    <div class="col-sm-2 col-form-label">
                        <label for="recipe_name">Recipe</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="recipe_name" placeholder="Recipe Name" name="recipeName">
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
                        <input class="form-check-input" type="radio" id="category1" name="category" value="Chicken"> Chicken
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" id="category2" name="category" value="Beef"> Beef
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" id="category3" name="category" value="Pork"> Pork
                    </label>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- cooktime -->
                <div class="form-group form-inline">
                    <label for="cooktime" class="col-xs-2 col-form-label">Time</label>
                    <div class="col-xs-4">
                        <label class="radio">
                            <input class="form-check-input " type="radio" id="lessThan" name="cooktimeOperator" value="<="> Less than
                        </label>
                        <label class="radio">
                            <input class="form-check-input" type="radio" id="greaterThan" name="cooktimeOperator" value=">="> Greater than
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" placeholder="000:00:00" 
                               value="" id="cooktime" name="cooktime" onkeyup="showCooktime(this.value)">
                        <span id="cooktime-input" style="margin-left: 5px;"></span>
                        <span id="cooktime-input-error" style="margin-left: 5px;color: red;"></span>
                    </div>
<!--                    <input type="number" name="quantity" min="1" max="100">-->
                </div>
            </div>
           
        </div>
    </div>
    
    
    
    <br>
    <div class="row">
        <div class="pull-right">
            <div class="col-sm-5">
                <input type="submit" name="submitSearch" class="btn btn-primary" id="submitSearch" />
            </div>

        </div>
    </div>
</form>