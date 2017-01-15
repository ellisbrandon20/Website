<?php
    class Recipe implements JsonSerializable{
        function __construct(){
            $this->name = "";
            $this->category = "";
            $this->cooktime = "";
            $this->ingredients = "";
            $this->instructions = "";
            $this->pic_file = "";
        }
        
        public function jsonSerialize () {
            return array(
                'name'=>$this->name,
                'category'=>$this->category,
                'cooktime'=>$this->cooktime,
                'ingredients'=>$this->ingredients,
                'instructions'=>$this->instructions,
                'pic_file'=>$this->pic_file
            );
        }
        
        public function json_to_object($data) {
            foreach ($data AS $key => $value) $this->{$key} = $value;
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
//        var recipe = new Recipe();
//        $recipe->name = $_POST["name"];
//        $recipe->category = $_POST["category"];
//        $recipe->cooktime = $_POST["cooktime"];
//        $recipe->ingredients =  $_POST["ingredients"];
//        $recipe->instructions = $_POST["instructions"];
//        $recipe->pic_file = $_POST["pic_file"];
//        
//        echo $recipe->name;
        
        
    }

?>


<div class="row" id="view-recipe">
    <h3>SQL Results</h3>
    <h3><?php echo $_POST["name"]; ?></h3>
</div>