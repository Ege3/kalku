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

    public function edit()

    {
        global $app;

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $material = $app['database']->selectById('materials', $id);

        return view('materials_edit', ['material' => $material]);  
    }
    
    public function delete()

    {   
        global $app;

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $material = $app['database']->selectById('materials', $id);

        if (is_object($material)) {

            $dbResult = $app['database']->deleteById('materials', $material->idmaterials);

            $result = 'material deleted';
        
        }

        $result = empty($result) ? 'Cannot delete' : $result;
        
        ?><meta http-equiv="refresh" content="0;URL='/materials?message=<?php echo $result; ?>'"/><?php


    }

}