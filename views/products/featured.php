<h1>Productos destacados</h1>

  <?php while ($product = $products->fetch_Object()): ?>
    <div class="product">
      <?php if (!empty($product->imagen)): ?>
        <img src="<?=base_url . "uploads/images/" . $product->imagen?>" alt="producto">
      <?php else: ?>
        <img src="<?=base_url?>/assets/img/camiseta.png" alt="producto">
      <?php endif;?>

      <h2><?=$product->nombre?></h2>
      <p>$<?=$product->precio?></p>
      <a href="" class="button">Comprar</a>
    </div>
  <?php endwhile?>