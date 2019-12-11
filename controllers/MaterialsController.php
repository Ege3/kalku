<?php

class MaterialsController {

    public function index()

    {
        global $app;
        $materials = $app['database']->selectAll('materials');
        return view('materials', ['materials' => $materials]);  
    }

    public function add()

    {
        global $app;
        $app['database']->insert('materials', [
            'name' => $_POST['material_name'],
            'unit' => 'kg',]);
        header ('Location: /materials');     

    }
    

}