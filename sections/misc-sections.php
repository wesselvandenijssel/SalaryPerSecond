<section id="privacy" class="mt-16">
	<h2 class="text-xl font-semibold mb-4 text-theme">
		<?php echo t('privacy_title'); ?>
	</h2>
	<div class="bg-green-50 dark:bg-green-900 p-4 rounded-lg border border-green-200 dark:border-green-700">
		<h3 class="font-semibold text-white-800 mb-2">
			<?php echo t('privacy_subtitle'); ?>
		</h3>
		<ul class="text-white-700 space-y-1 text-sm">
			<li>
				<?php echo t('privacy_point_1'); ?>
			</li>
			<li><?php echo t('privacy_point_2'); ?></li>
			<li><?php echo t('privacy_point_3'); ?></li>
			<li><?php echo t('privacy_point_4'); ?></li>
			<li><?php echo t('privacy_point_5'); ?></li>
		</ul>
	</div>
</section>

<section id="feedback" class="mt-16">
	<h2 class="text-xl font-semibold mb-4 text-theme">
		<?php echo t('feedback_title'); ?>
	</h2>
	<div class="bg-blue-50 dark:bg-blue-900 p-6 rounded-lg border border-blue-200 dark:border-blue-700">
		<h3 class="font-semibold text-white-800 mb-3">
			<?php echo t('feedback_subtitle'); ?>
		</h3>
		<p class="text-white-700 mb-4">
			<?php echo t('feedback_description'); ?>
		</p>
		<div class="space-y-3">
			<div>
				<h4 class="font-medium text-white-800">
					<?php echo t('feedback_email_label'); ?>
				</h4>
				<a href="mailto:info@wesselvandenijssel.nl?subject=Salary Calculator Feedback"
					class="text-white-600 hover:underline">
					<?php echo t('feedback_email'); ?>
				</a>
			</div>
			<div>
				<h4 class="font-medium text-white-800">
					<?php echo t('feedback_include_label'); ?>
				</h4>
				<ul class="text-white-700 text-sm space-y-1">
					<li><?php echo t('feedback_include_1'); ?></li>
					<li><?php echo t('feedback_include_2'); ?></li>
					<li><?php echo t('feedback_include_3'); ?></li>
					<li>
						<?php echo t('feedback_include_4'); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="changelog" class="mt-16">
	<h2 class="text-xl font-semibold mb-4 text-theme">
		<?php echo t('changelog_title'); ?>
	</h2>
	<div class="space-y-4">
		<div class="border-l-4 border-green-500 pl-4">
			<h3 class="font-semibold text-theme">
				<?php echo t('changelog_v2_title'); ?>
			</h3>
			<ul class="text-white-700 text-sm mt-2 space-y-1">
				<li>
					<?php echo t('changelog_v2_1'); ?>
				</li>
				<li>
					<?php echo t('changelog_v2_2'); ?>
				</li>
				<li><?php echo t('changelog_v2_3'); ?></li>
			</ul>
		</div>
		<div class="border-l-4 border-blue-500 pl-4">
			<h3 class="font-semibold text-theme">
				<?php echo t('changelog_v1_5_title'); ?>
			</h3>
			<ul class="text-white-700 text-sm mt-2 space-y-1">
				<li><?php echo t('changelog_v1_5_1'); ?></li>
				<li>
					<?php echo t('changelog_v1_5_2'); ?>
				</li>
				<li><?php echo t('changelog_v1_5_3'); ?></li>
			</ul>
		</div>
		<div class="border-l-4 border-purple-500 pl-4">
			<h3 class="font-semibold text-theme">
				<?php echo t('changelog_v1_title'); ?>
			</h3>
			<ul class="text-white-700 text-sm mt-2 space-y-1">
				<li>
					<?php echo t('changelog_v1_1'); ?>
				</li>
				<li><?php echo t('changelog_v1_2'); ?></li>
				<li><?php echo t('changelog_v1_3'); ?></li>
			</ul>
		</div>
	</div>
</section>

<section id="call-to-action" class="mt-16 text-center">
	<h2 class="text-xl font-semibold mb-4 text-theme">
		<?php echo t('cta_title'); ?>
	</h2>
	<button onclick="document.getElementById('income').focus()"
		class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
		<?php echo t('cta_button'); ?>
	</button>
</section>