<?php


function cargar($url)
{
    // $url = base_url($url);

    echo "
    <script>
    window.location ='{$url}';
    </script>
    ";
    exit();
}
function asign_inputs($label, $id, $valor = "", $extra = [])
{
    $type = "";
    $placeholder = "";

    extract($extra);

    return <<<HTML
        <div class = "input-group mb-3">
            <span class = "input-group-text" id="bassic-addon1">$label</span>
            <input style=" font-size: 15px; text-align: center;" type = "$type"  class = "input-compacto"  value = "$valor" placeholder="$placeholder" name= "$id" id="$id" min="1">
        </div>  
    HTML;
}



function GUID()
{
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid());
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

class Factura
{
    public $guid = '';
    public $items = array();
    public $total = 0;
    public $comment = '';
}

class Item {
    public $id = '';
    public $name = '';
    public $qty = '';
    public $price = '';

    public function __construct($id, $name, $qty, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->qty = $qty;
        $this->price = $price;
    }
}


function saveFactura() 
{
    
}