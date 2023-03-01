<section id="relacao">
    <div class="container">
        <div class="row gx-0">
            <?php 
                $relations_sobre = get_field('relations_sobre', 'option');
            ?>
            <div class="col-md-12">
                <div class="content">
                    <?php echo $relations_sobre['text_relations_sobre'];?>
                    
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <ul>
                <?php 
                    $lista_esquerda = $relations_sobre['lista_esquerda_relations_sobre'];
                    foreach($lista_esquerda as $key => $value):
                ?>
                    <li><?php echo $value['valor_lista_esquerda_relations_sobre'] ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <ul>
                <?php 
                    $lista_direita = $relations_sobre['lista_direita_relations_sobre'];
                    foreach($lista_direita as $key => $value):
                ?>
                    <li><?php echo $value['valor_lista_direita_relations_sobre'] ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>