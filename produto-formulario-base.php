   <div class="container">
   <div class="form-group">
        <label>Nome: </label>  
        <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>">
    </div>
    <div class="form-group">
       <label>Preço: </label>
        <input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>">
    </div>
    <div class="form-group">
        <label>Descrição: </label>
        <textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
    </div>
    <div class="form-group">
        <input type="checkbox" name="usado" <?=$usado?> value="true"> Usado 
    </div>
    <div class="form-group">
        <label>Categoria: </label>
         <select class="form-control" name="categoria_id">
                    <?php foreach($categorias as $categoria) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?> >
                                      <?=$categoria['nome']?>
                        </option>
                      <?php endforeach ?>
        </select>
    </div>  
</div>
           