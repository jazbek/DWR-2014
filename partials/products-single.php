						<?php if ( $products = get_field('products') ) : ?>
							<aside id="products" class="row">
								<h3>Product List:</h3>
								<div class="row">
									<?php foreach ( $products as $i => $product ) : ?>
										<div class="small-6 medium-4 columns <?php echo ($i == count($products) - 1) ? 'end' : '' ?>">
											<?php if ( $product_url = get_field( 'product_url', $product->ID ) ) : ?>
												<a href="<?php echo $product_url; ?>" target="_blank"><?php echo get_the_post_thumbnail( $product->ID, 'post-thumbnail' ); ?></a>
												<h4><?php echo get_the_title( $product->ID ); ?></h4>
												<?php if ( $designer = get_field( 'designer', $product->ID ) ) : ?>
													<p>Designed by <?php echo $designer; ?></p>
												<?php endif; ?>
											<?php endif; ?>
										</div>
										<?php if ( dwr_new_row(3, 0, $i, count($products)) ) : ?>
											</div>
											<div class="row">
										<?php endif; ?>
									<?php endforeach; ?>
								</div>
							</aside>
						<?php endif; ?>

