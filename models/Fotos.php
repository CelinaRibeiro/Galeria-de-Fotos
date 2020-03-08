<?php

class Fotos extends Model {
    
    public function saveFotos(){
        
        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
           
            //tipos de arquivos permitidos
            $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
            
            //ver se o arquivo enviado está entre os tipos permitidos
            if (in_array($_FILES['arquivo']['type'], $permitidos)) {
              
                //gera um nome para o arquivo com extensão .jpg
                $nome = md5(time().rand(0, 999)).'.jpg';
                
                //pega o arquivo recebido e move para a pasta
                move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);
                
               $titulo = '';
                if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                    $titulo = addslashes($_POST['titulo']);
                }
                
                //salva no banco
                $sql = "INSERT INTO fotos SET titulo = '$titulo', url = '$nome'";
                $this->db->query($sql);
                
            }
        }
    }
    
    public function getFotos(){
        $array = array();
        
        $sql = "SELECT * FROM fotos ORDER BY id DESC";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
}

