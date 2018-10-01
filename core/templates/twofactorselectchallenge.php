<div class="warning">
	<h2 class="two-factor-header"><?php p($l->t('Two-factor authentication')) ?></h2>
	<p><?php p($l->t('Enhanced security is enabled for your account. Choose a second factor for authentication:')) ?></p>
	<?php if ($_['providerMissing']): ?>
	<p>
		<strong><?php p($l->t('Could not load at least one of your enabled two-factor auth methods. Please contact your admin.')) ?></strong>
	</p>
	<?php endif; ?>
	<p>
		<ul>
			<?php foreach ($_['providers'] as $provider): ?>
				<li>
					<a class="two-factor-provider"
					   href="<?php p(\OC::$server->getURLGenerator()->linkToRoute('core.TwoFactorChallenge.showChallenge',
										[
											'challengeProviderId' => $provider->getId(),
											'redirect_url' => $_['redirect_url'],
										]
									)) ?>">
						<img src="<?php p(image_path('twofactor_u2f', 'app.svg')) ?>" alt="" />
						<div>
							<h3><?php p($provider->getDisplayName()) ?></h3>
							<p><?php p($provider->getDescription()) ?></p>
						</div>
					</a>
				</li>
			<?php endforeach; ?>
			<?php if (!is_null($_['backupProvider'])): ?>
				<li>
					<a class="two-factor-provider two-factor-secondary" href="<?php p(\OC::$server->getURLGenerator()->linkToRoute('core.TwoFactorChallenge.showChallenge',
						[
							'challengeProviderId' => $_['backupProvider']->getId(),
							'redirect_url' => $_['redirect_url'],
						]
					)) ?>">
						<div>
							<p><?php p($l->t('Use backup code')) ?></p>
						</div>
					</a>
				</li>
			<?php endif; ?>
			<li>
				<a class="two-factor-provider two-factor-secondary" href="<?php print_unescaped($_['logout_url']); ?>">
					<div>
						<p><?php p($l->t('Cancel log in')) ?></p>
					</div>
				</a>
			</li>
		</ul>
	</p>
</div>
