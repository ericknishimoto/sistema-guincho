<?php foreach ($produtos as $produto) : ?>
<?php if ($empresa['id'] == ($produto['empresas_id']) {?>
    <option value="<?= $produto['id'] ?>"><?= utf8_encode($produto['nome']) ?></option>
<?php
}
    ?>
    
<?php endforeach ?>