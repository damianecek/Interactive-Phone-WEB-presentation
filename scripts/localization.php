    <?php 
        function load_localization($filename){
            $data = json_decode(file_get_contents($filename));
            return $data;
        }
        function translate($key,$data){
            return $data -> $key;
        }
        if($_SERVER['SCRIPT_NAME'] == "/index.php")
            $localization = load_localization("languages/".$_SESSION["lang"].".json");
        else
            $localization = load_localization("../languages/".$_SESSION["lang"].".json");
    ?>